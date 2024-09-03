<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Indicator; 
class IndicatorController extends Controller
{
    public function index()
    {
        $indicators = Indicator::all(); 
        return view('index', compact('indicators'));
    }
}

