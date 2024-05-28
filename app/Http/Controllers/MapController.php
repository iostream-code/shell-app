<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $initialMarkers = [
            [
                'code' => 'Sawahan',
                'operation_hours' => '24 hours',
                'position' => [
                    /* -7.260837626655372, 112.74935428685455 */
                    'lat' => -7.260837626655372,
                    'lng' => 112.74935428685455
                ],
                'draggable' => false
            ],
            [
                'code' => 'Kenjeran',
                'operation_hours' => '24 hours',
                'position' => [
                    /* -7.250013516386138, 112.78749077915312 */
                    'lat' => -7.250013516386138,
                    'lng' => 112.78749077915312
                ],
                'draggable' => false
            ],
            [
                'code' => 'Mulyorejo-1',
                'operation_hours' => '24 hours',
                'position' => [
                    /* -7.261888345136076, 112.77425000302176 */
                    'lat' => -7.261888345136076,
                    'lng' => 112.77425000302176
                ],
                'draggable' => false
            ],
            [
                'code' => 'Mulyorejo-2',
                'operation_hours' => '24 hours',
                'position' => [
                    /* -7.2619827222207585, 112.77453335547253 */
                    'lat' => -7.2619827222207585,
                    'lng' => 112.77453335547253
                ],
                'draggable' => false
            ],
        ];

        return view('pages.location_page.index', compact('initialMarkers'));
    }
}