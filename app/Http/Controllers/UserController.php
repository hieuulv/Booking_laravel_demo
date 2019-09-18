<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index_user()
    {
        $users = User::all();

        return view('admin.user.index_user', compact('users'));
    }

    //Add User
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(UserFormRequest $request)
    {
        $users = new User();
        $users->name = $request->get('name');
        $users->birthday = $request->get('birthday');
        $users->phone = $request->get('phone');
        $users->email = $request->get('email');
        $users->address = $request->get('address');
        $users->role = $request->get('role');
        $users->password = Hash::make($request->get('password'));
        //upload_image
        if ($request->file('images')) {
            $images_File = $request->file('images');
            $FileName = time() . '.' . $images_File->extension();
            $images_File->move('upload_image/', $FileName);
            $users->images = $FileName;
        }
        $users->images = config('image_default.image_df');
        $users->save();

        return redirect()->route('index_user', compact('users'));
    }

    //Update user
    public function update($id)
    {
        $users = User::find($id);
        if (empty($users)) {
            return redirect('admin/user');
        }
        return view('admin.user.edit', compact('users'));
    }

    public function edit(Request $request, $id)
    {
        $users = User::find($id);
        if (empty($users)) {
            return redirect('admin/user');
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

//    remove user
    public function remove($id)
    {
        $users = User::destroy($id);
        if (empty($users)) {
            abort(404);
        }

        return redirect()->route('index_user', compact('users'));
    }
}
