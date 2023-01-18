<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure_date', '>=', Carbon::now())->get();
        
        return view('homapage', compact('trains'));
    }
}
