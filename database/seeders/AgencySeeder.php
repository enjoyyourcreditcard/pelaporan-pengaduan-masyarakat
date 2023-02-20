<?php

namespace Database\Seeders;

use App\Models\Agency;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agencies = [
            'Kementerian Luar Negeri',
            'Kementerian Dalam Negeri',
            'Kementerian Badan Usaha Milik Negera',
            'Kementerian Pertahanan',
            'Kementerian Keuangan',
            'Kementerian Hukum dan Ham',
            'Kementerian Pertanian',
            'Kementerian Kesehatan',
            'Kementerian Perhubungan',
        ];

        for ($i = 0; $i < count($agencies); $i++) { 
            Agency::create([
                'name' => $agencies[$i],
            ]);
        }
    }
}
