<?php

namespace App\Http\Controllers;

use App\Models\BranchOffice;
use App\Models\Position;
use Illuminate\Http\Request;

class BranchOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'address' => 'required',
        ], [
            'code.required' => 'Pastikan mengisi kolom ini',
            'address.required' => 'Pastikan mengisi kolom ini',
        ]);

        $location = Position::create([
            'lat' => $request->lat,
            'lng' => $request->lng,
        ]);

        if ($location) {
            BranchOffice::create([
                'position_id' => $location->id,
                'code' => $request->code,
                'address' => $request->address,
            ]);

            return redirect()->route('location');
        }

        return response()->json(['Periksa kembali data Anda!', 422]);
    }

    /**
     * Display the specified resource.
     */
    public function show(BranchOffice $branchOffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BranchOffice $branchOffice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BranchOffice $branchOffice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $office = BranchOffice::where('id', $id)->get();
        dd($office);
        $office->delete();

        return redirect()->route('location');
    }
}
