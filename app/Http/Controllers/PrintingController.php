<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintingController extends Controller
{
    public function printing()
    {
        return view('frontend.pages.printing.Printing');
    }
}
