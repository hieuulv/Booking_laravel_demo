<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index_contact(){
        $contacts = Contact::all();

        return view('admin.contact.index_contact', compact('contacts'));
    }

    public function contact_admin(ContactFormRequest $request)
    {
        $contacts = new Contact();
        $contacts->name = $request->get('name');
        $contacts->email = $request->get('email');
        $contacts->phone = $request->get('phone');
        $contacts->address = $request->get('address');
        $contacts->content = $request->get('content');
        $contacts->save();

        return redirect()->route('contact', compact('contacts'));
    }

    public function remove($id)
    {
        $contacts = Contact::destroy($id);
        if (empty($contacts)) {
            abort(404);
        }

        return redirect()->route('index_contact', compact('contacts'));
    }
}
