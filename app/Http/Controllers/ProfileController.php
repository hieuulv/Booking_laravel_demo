<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Slide_subpage;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profile($id)
    {
        $users = User::find($id);
        $settings = Setting::all()->toArray();
        $slide_subpages = Slide_subpage::all()->toArray();

        return view('member.profile', compact('users', 'settings', 'slide_subpages'));
    }

    public function update_profile(Request $request, $id)
    {
        $users = User::find($id);
        if (empty($users)) {
            return redirect('/');
        } else {
            $users->name = $request->get('name');
            $users->birthday = $request->get('birthday');
            $users->phone = $request->get('phone');
            $users->email = $request->get('email');
            $users->address = $request->get('address');
            $users->role = $request->get('role');
            //upload_image
            if ($request->file('images')) {
                $images_File = $request->file('images');
                $FileName = time() . '.' . $images_File->extension();
                $images_File->move('upload_image/', $FileName);
                $users->images = $FileName;
            }
            $users->save();
        }

        return redirect()->route('index_user', compact('users'));


    }
}
