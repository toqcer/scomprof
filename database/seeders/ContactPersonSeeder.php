<?php

namespace Database\Seeders;

use App\Models\ContactPerson;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactPersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactPerson::create([
            'teacher_name' => Teacher::inRandomOrder()->first()->name,
            'telephone' => '1093789171',
        ]);
    }
}
