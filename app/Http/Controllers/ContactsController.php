<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index', [
            'contacts' => Contacts::latest()->filter(request(['search']))->paginate(10)
        ]);
    }

    public function show($contacts)
    {
        return view('contacts.show', [
            'contact' => Contacts::find($contacts)
        ]);
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:5'],
            'contact' => ['required', 'min:9', 'max:9', Rule::unique('contacts', 'contact')],
            'email' => ['required', 'email', Rule::unique('contacts', 'email')]
        ]);

        Contacts::create($formFields);


        return redirect('/')->with('message', 'Contact created successfully');
    }
}
