<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['surname','givenname','gender','email','postcode','address','building_name','opinion']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['fullname','gender','email','postcode','address','building_name','opinion']);
        Contact::create($contact);
        return view('thanks');
    }

    public function manage()
    {
        return view('manage');
    }

    public function manageList()
    {
        $contacts = Contact::simplePaginate(5);
        return view('manage', ['contacts' => $contacts]);
    }

    public function delete(Request $request)
    {
        $contacts = Contact::find($request->id);
        return view('manage', ['contacts' => $contacts]);
    }

}
