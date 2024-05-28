<?php

namespace Database\Seeders;

use App\Models\BranchOffice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'position_id' => 1,
                'code' => 'Simo',
                'address' => 'Jl. Simo Magersari No.62, Kupang Krajan, Kec. Sawahan, Surabaya, Jawa Timur 60281',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 2,
                'code' => 'Kedung Cowek',
                'address' => 'Jl. Kedung Cowek No.340, Tanah Kali Kedinding, Kec. Kenjeran, Surabaya, Jawa Timur 60129',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 3,
                'code' => 'Kenjeran',
                'address' => 'Jl. Kenjeran No.591, Kalijudan, Kec. Mulyorejo, Surabaya, Jawa Timur 60114',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 4,
                'code' => 'Kalijudan',
                'address' => 'Jl. Kalijudan No.24, Kalijudan, Kec. Mulyorejo, Surabaya, Jawa Timur 60132',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 5,
                'code' => 'Kertajaya',
                'address' => 'Jl. Raya Kertajaya Indah No.143, Gebang Putih, Kec. Sukolilo, Surabaya, Jawa Timur 60117',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 6,
                'code' => 'MERR',
                'address' => '291 (MERR, Jl. Ir. H. Soekarno no 289, Jl. Raya Kedung Baruk Utara No.19, Kedung Baruk, Kec. Rungkut, Surabaya, Jawa Timur 60298',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 7,
                'code' => 'Prapen',
                'address' => 'Jl. Raya Prapen No.50, Panjang Jiwo, Kec. Tenggilis Mejoyo, Surabaya, Jawa Timur 60299',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 8,
                'code' => 'Tenggilis',
                'address' => 'Jl. Raya Tenggilis No.96, Tenggilis Mejoyo, Kec. Tenggilis Mejoyo, Surabaya, Jawa Timur 60292',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 9,
                'code' => 'Margorejo',
                'address' => 'Jl. Margorejo Indah No.D202, Sidosermo, Kec. Wonocolo, Surabaya, Jawa Timur 60239',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 10,
                'code' => 'Pemuda',
                'address' => 'Jl. Pemuda No.003, RT.003/RW.001, Embong Kaliasin, Kec. Genteng, Surabaya, Jawa Timur 60271',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 11,
                'code' => 'Pandegiling',
                'address' => 'Jl. Pandegiling No.55, RT.001/RW.09, DR. Soetomo, Kec. Tegalsari, Surabaya, Jawa Timur 60264',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 12,
                'code' => 'Diponegoro',
                'address' => 'Jl. Diponegoro, DR. Soetomo, Kec. Tegalsari, Surabaya, Jawa Timur 60264',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 13,
                'code' => 'Jemursari',
                'address' => 'Jl. Raya Jemursari No.155, Jemur Wonosari, Kec. Wonocolo, Surabaya, Jawa Timur 60237',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 14,
                'code' => 'Dupak',
                'address' => 'Jl. Dupak No.81, Gundih, Kec. Bubutan, Surabaya, Jawa Timur 60172',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 15,
                'code' => 'Mastrip',
                'address' => 'Kedurus, Karangpilang, Surabaya, Jawa Timur 60223',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 16,
                'code' => 'Wiyung',
                'address' => 'Jl. Mayjend. Jonosewojo No.17, Babatan, Kec. Wiyung, Surabaya, Jawa Timur 60213',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 17,
                'code' => 'Sambikerep',
                'address' => 'Mayor Jenderal Sungkono Jl. Radial Road Blok Ca-18, Surabaya, Jawa Timur 60217',
                'open_hours' => '24 hours',
            ],
        ];

        BranchOffice::insert($data);
    }
}
