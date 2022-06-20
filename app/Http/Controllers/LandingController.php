<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Profile;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('welcome');
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
                'label' => 'Location',
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

        return view('about', compact('profile', 'statusInfo', 'contacts'));
    }
}
