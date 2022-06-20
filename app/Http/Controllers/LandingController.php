<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\GalleryPhoto;
use App\Models\Profile;
use App\Models\Teacher;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $articles = Article::limit(6)->get();

        return view('welcome', compact('articles'));
    }

    public function about()
    {
        $profile = Profile::first();
        $statusInfo = [
            [
                'label' => 'status',
                'val' => $profile->status
            ],
            [
                'label' => 'akreditasi',
                'val' => $profile->accreditation
            ],
            [
                'label' => 'Jumlah Murid',
                'val' => $profile->total_student . ' Murid'
            ],
        ];

        $contact = Contact::first();
        $contacts = [
            [
                'label' => 'Alamat',
                'icon' => 'far fa-location',
                'val' => $profile->address,
                'link' => 'https://goo.gl/maps/7MVVvsT7KdQQgQ2m9'
            ],
            [
                'label' => 'Email',
                'icon' => 'far fa-envelope',
                'val' => $contact->email,
                'link' => 'mailto:' . $contact->email
            ],
            [
                'label' => 'Contact Person',
                'icon' => 'fas fa-mobile-alt',
                'val' => $contact->telephone . ' ' . '(' . $contact->teacher_name . ')',
                'link' => 'tel:' . $contact->telephone
            ]
        ];

        $carousel = GalleryPhoto::groupBy('gallery_id')->get();
        $galleries = Gallery::inRandomOrder()->limit(4)->get();

        $teachers = Teacher::all();

        return view('about', compact('profile', 'statusInfo', 'contacts', 'teachers', 'carousel', 'galleries'));
    }
}
