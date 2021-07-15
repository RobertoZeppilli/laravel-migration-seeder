<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacation;

class VacationController extends Controller
{
    public function index()
    {
        $title = "Home | Agenzia Viaggi";
        $vacations = Vacation::all();
        
        return view('home', compact('title', 'vacations'));
    }
}
