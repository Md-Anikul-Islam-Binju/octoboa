<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function changeLocale(Request $request, $locale)
    {
        App::setLocale($locale);
        $request->session()->put('locale', $locale);
        return back();
    }
}
