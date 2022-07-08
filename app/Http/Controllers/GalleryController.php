<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Requests\GalleryRequest;
use App\Models\GalleryPhoto;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function publicIndex()
    {
        $galleries = Gallery::all();

        return view('gallery.public.index', compact('galleries'));
    }

    public function publicShow(Gallery $gallery)
    {
        return view('gallery.show', compact('gallery'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();

        return view('gallery.manage', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $gallery = Gallery::create($request->validated());
        GalleryPhoto::create([
            'gallery_id' => $gallery->id,
            'image' => '/storage/' . $request->file('image')->store('gallery', 'public'),
        ]);

        return redirect()->back()->with(['success' => 'berhasil menambahkan gallery']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, Gallery $gallery)
    {
        $gallery->title = $request->title;
        $gallery->event_at = $request->event_at;
        $gallery->description = $request->description;

        $gallery->save();

        return redirect()->route('admin.gallery.index')->with(['success' => 'berhasil mengubah gallery']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->galleryPhotos()->delete();
        $gallery->delete();

        return redirect()->back()->with(['success' => 'berhasil menghapus gallery']);
    }

    public function storePhoto(Request $request, Gallery $gallery)
    {
        $request->validate([
            'image' => ['required', 'image'],
        ]);
        GalleryPhoto::create([
            'gallery_id' => $gallery->id,
            'image' => '/storage/' . $request->file('image')->store('gallery', 'public'),
        ]);
        return redirect()->back()->with(['success' => 'berhasil menambah foto gallery']);
    }

    public function destroyPhoto(GalleryPhoto $galleryPhoto)
    {
        $galleryPhoto->delete();
        return redirect()->back()->with(['success' => 'berhasil menghapus foto gallery']);
    }
}
