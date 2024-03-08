<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        try {
            $user = Auth::user();
            if ($user->role == 1) {
                return view('admin.dashboard');
            } elseif ($user->role == 2) {
                //
            }
        } catch (\Exception $e) {
            return redirect()->route('error.page');
        }

    }
}
