<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        $usingDataTable= true;

        return view('teacher.index', compact('teachers', 'usingDataTable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeacherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherRequest $request)
    {
        $data = $request->validated();
        $data['avatar'] = '/storage/' . $request->file('avatar')->store('teacher', 'public');
        Teacher::create($data);
        return redirect()->back()->with(['success' => 'berhasil menambahkan data guru']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherRequest  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        $teacher->name = $request->name;
        $teacher->bio = $request->bio;
        $teacher->role = $request->role;
        $teacher->acc_number = $request->acc_number;
        if ($request->hasFile('avatar')) {
            $teacher->avatar = '/storage/' . $request->file('avatar')->store('teacher', 'public');
        }

        $teacher->save();
        return redirect()->back()->with(['success' => 'berhasil mengubah data guru']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->back()->with(['success' => 'berhasil menghapus data guru']);
    }
}
