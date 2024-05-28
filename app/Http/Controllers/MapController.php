<?php

namespace App\Http\Controllers;

use App\Models\BranchOffice;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $offices = BranchOffice::with('position')->get();

        // dd($offices);

        // $initialMarkers = [
        //     [
        //         'code' => $office->code,
        //         'address' => $office->address,
        //         'operation_hours' => $office->open_hours,
        //         'position' => [
        //             /* -7.260837626655372, 112.74935428685455 */
        //             'lat' => $office->position->lat,
        //             'lng' => $office->position->lng
        //         ],
        //     ],
        //     [
        //         'code' => 'Kenjeran',
        //         'address' => $office->address,
        //         'operation_hours' => '24 hours',
        //         'position' => [
        //             /* -7.250013516386138, 112.78749077915312 */
        //             'lat' => -7.250013516386138,
        //             'lng' => 112.78749077915312
        //         ],
        //     ],
        //     [
        //         'code' => 'Mulyorejo-1',
        //         'address' => $office->address,
        //         'operation_hours' => '24 hours',
        //         'position' => [
        //             /* -7.261888345136076, 112.77425000302176 */
        //             'lat' => -7.261888345136076,
        //             'lng' => 112.77425000302176
        //         ],
        //     ],
        //     [
        //         'code' => 'Mulyorejo-2',
        //         'address' => $office->address,
        //         'operation_hours' => '24 hours',
        //         'position' => [
        //             /* -7.2619827222207585, 112.77453335547253 */
        //             'lat' => -7.2619827222207585,
        //             'lng' => 112.77453335547253
        //         ],
        //     ],
        // ];

        return view('pages.location_page.index', compact('offices'));
    }
}
