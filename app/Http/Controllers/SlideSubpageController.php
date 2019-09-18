<?php

namespace App\Http\Controllers;

use App\Models\Slide_subpage;
use Illuminate\Http\Request;

class SlideSubpageController extends Controller
{
    //
    public function index_slide_subpage()
    {
        $slide_subpages = Slide_subpage::all();

        return view('admin.slide.slide_subpage.index_slide_subpage', compact('slide_subpages'));
    }

    //    Edit Slide Subpage
    public function update($id)
    {
        $slide_subpages = Slide_subpage::find($id);

        return view('admin.slide.slide_subpage.edit', compact('slide_subpages'));
    }

    public function edit(Request $request, $id)
    {
        $slide_subpages = Slide_subpage::find($id);
        if (empty($slide_subpages)) {
            return redirect('admin/slide/slide_subpage');
//            var_dump('1234'); die();
        } else {
            $slide_subpages->title = $request->get('title');
            //upload_image
            if ($request->file('image')) {
                $images_File = $request->file('image');
                $FileName = time() . '.' . $images_File->extension();
                $images_File->move('upload_image/', $FileName);
                $slide_subpages->image = $FileName;
            }
            $slide_subpages->save();
        }

        return redirect()->route('slide_subpage', compact('slide_subpages'));
    }
}
