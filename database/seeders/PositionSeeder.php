<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'lat' => -7.260837626655372,
                'lng' => 112.74935428685455
            ],
            [
                'lat' => -7.250013516386138,
                'lng' => 112.78749077915312
            ],
            [
                'lat' => -7.261888345136076,
                'lng' => 112.77425000302176
            ],
            [
                'lat' => -7.2619827222207585,
                'lng' => 112.77453335547253
            ],
        ];

        Position::insert($data);
    }
}
