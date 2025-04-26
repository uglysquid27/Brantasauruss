<?php

namespace App\Http\Controllers;

use App\Models\Screening;
use App\Models\ScreeningSymptom;
use Illuminate\Http\Request;

class ScreeningController extends Controller
{
    public function index()
    {
        return view('question');
    }

    
}