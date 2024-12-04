<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {

        $validate = $request->validated();

        Contact::create($validate);

        return redirect()->route('contact');
    }

}
