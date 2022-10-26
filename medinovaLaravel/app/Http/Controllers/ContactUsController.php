<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactUsController extends Controller
{
    public function index()
    {
        return view('frontendLayout.contact');
    }
    public function store(Request $request)
    {
        // $request->validate(
            //     [
            //         'cname' =>'required',
            //         'cemail' =>'required| email',
            //         'gender' =>'required',
            //         'contact_number' =>'required',
            //         'message' =>'required',
            //
            //     ]

            //  );
        $contact = new Contact;
        echo $contact->cname = $request['cname'];
        echo $contact->cemail = $request['cemail'];
        echo $contact->contact_number = $request['contact_number'];
        echo $contact->subject = $request['subject'];
        echo $contact->message = $request['message'];

             $contact->save();// insert data in table by save method
             return redirect('/');


        echo "successfully submitted";
        die;
    }
}
