<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.contact', ['contact' => Contact::first()]);
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
            'email' => ['required'],
            'telephone' => ['required']
        ]);

        Contact::findOrFail($id)->update([
            'teacher_name' => $request->teacher_name,
            'email' => $request->email,
            'telephone' => $request->telephone
        ]);
        return redirect()->back()->with(['success' => 'berhasil mengubah data kontak']);
    }
}
