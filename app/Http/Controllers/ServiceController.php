<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {
        return view('frontend.pages.services.services');
    }

    public function printingService()
    {
        return view('frontend.pages.services.printingService');
    }
}
