<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        return view('pages.contact');
    }

    public function sendContact(Request $request){

        $contact=new Contact;
        $contact->name=$request->name;
        $contact->prenom=$request->prenom;
        $contact->phone=$request->phone;
        $contact->message=$request->message;
        $contact->save();
        return redirect()->back()->with('success', 'Votre message a bien été envoyé');
    }

    public function list(){
        $contacts=Contact::all();

        return view('pages.list-contact',compact("contacts"));
    }
}
