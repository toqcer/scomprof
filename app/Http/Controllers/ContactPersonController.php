<?php

namespace App\Http\Controllers;

use App\Models\ContactPerson;
use Illuminate\Http\Request;

class ContactPersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.contact-person', ['contactPerson' => ContactPerson::first()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'teacher_name' => ['required'],
            'telephone' => ['required']
        ]);

        ContactPerson::findOrFail($id)->update([
            'teacher_name' => $request->teacher_name,
            'telephone' => $request->telephone
        ]);
    }
}
