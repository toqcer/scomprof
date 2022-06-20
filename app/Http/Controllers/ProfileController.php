<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileRequest  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        $profile->total_student = $request->total_student;
        $profile->desc = $request->desc;
        $profile->name = $request->name;
        $profile->status = $request->status;
        $profile->accreditation = $request->accreditation;
        $profile->address = $request->address;
        $profile->vision = $request->vision;
        $profile->mission = $request->mission;

        $profile->save();
        return redirect()->back()->with(['success' => 'berhasil mengubah data profil sekolah']);
    }

}
