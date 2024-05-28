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
                'code' => 'Sawahan',
                'address' => 'Jl. Simo Magersari No.62, Kupang Krajan, Kec. Sawahan, Surabaya, Jawa Timur 60281',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 2,
                'code' => 'Kenjeran',
                'address' => 'Jl. Kedung Cowek No.340, Tanah Kali Kedinding, Kec. Kenjeran, Surabaya, Jawa Timur 60129',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 3,
                'code' => 'Mulyorejo-1',
                'address' => 'Jl. Kenjeran No.591, Kalijudan, Kec. Mulyorejo, Surabaya, Jawa Timur 60114',
                'open_hours' => '24 hours',
            ],
            [
                'position_id' => 4,
                'code' => 'Mulyorejo-2',
                'address' => 'Jl. Kalijudan No.24, Kalijudan, Kec. Mulyorejo, Surabaya, Jawa Timur 60132',
                'open_hours' => '24 hours',
            ],
        ];

        BranchOffice::insert($data);
    }
}
