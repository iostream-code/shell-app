<?php

namespace App\Http\Controllers;

use App\Models\BranchOffice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $offices = BranchOffice::with('position')->get();

        return view('pages.home_page.index', compact('offices'));
    }
}
