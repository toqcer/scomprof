<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'teacher_name' => Teacher::inRandomOrder()->first()->name,
            'telephone' => '1093789171',
            'email' => 'smpn5sipirok@gmail.com'
        ]);
    }
}
