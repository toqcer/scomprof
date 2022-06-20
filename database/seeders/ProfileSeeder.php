<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'total_student' => 86,
            'desc' => 'SMP Negeri 05 Sipirok atau yang biasa disingkat menjadi SMPN 05 Sipirok merupakan sekolah menengah pertama yang berada di desa Situmba, Kecamatan Sipirok, Kabupaten Tapanuli Selatan, Provinsi Sumatera Utara. SMP Negeri 5 Sipirok didirikan pada tanggal 15 Januari 1992',
            'name' => 'SMP Negeri 05 Sipirok',
            'status' => 'negeri',
            'accreditation' => 'B',
            'address' => 'Desa Situmba, Kecamatan Sipirok, Kabupaten Tapanuli Selatan, Provinsi Sumatera Utara.',
            'vision' => 'Mewujudkan masyarakat yang berpendidikan, cerdas, berilmu pengetahuan, dan memiliki rasa indah dan nyaman, dan pengamalan UUD 1945 yaitu mencerdaskan kehidupan bangsa.',
            'mission' => 'Mengembangkan semangat pendidikan bagi masyarakat demi tercapainya pendidikan yang berbasis kompetensi dan mengacu pada standar pendidikan nasional dan memelihara lingkungan dan kesehatan.',
            'build_at' => '2008-01-02'
        ]);
    }
}
