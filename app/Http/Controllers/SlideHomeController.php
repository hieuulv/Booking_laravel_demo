<?php

namespace App\Http\Controllers;

use App\Models\Slide_home;
use Illuminate\Http\Request;

class SlideHomeController extends Controller
{
    //
    public function index_slide_home()
    {
        $slide_homes = Slide_home::all();
        return view('admin.slide.slide_home.index_slide_home', compact('slide_homes'));
    }

    //    Edit Slide Home
    public function update($id)
    {
        $slide_homes = Slide_home::find($id);
        return view('admin.slide.slide_home.edit', compact('slide_homes'));
    }

    public function edit(Request $request, $id)
    {
        $slide_homes = Slide_home::find($id);
        if (empty($slide_homes)) {
            return redirect('admin/slide/slide_home');
        } else {
            $slide_homes->title_one = $request->get('title_one');
            $slide_homes->title_two = $request->get('title_two');
            //upload_image
            if ($request->file('image')) {
                $images_File = $request->file('image');
                $FileName = time() . '.' . $images_File->extension();
                $images_File->move('upload_image/', $FileName);
                $slide_homes->image = $FileName;
            }
            $slide_homes->save();
        }

        return redirect()->route('slide_home', compact('slide_homes'));
    }
}
