<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function changeLanguage(Request $request, $locale)
    {
        if ($locale && in_array($locale, config('app.languages'))) {
            $request->session()->put('language', $locale);
        }

        return redirect()->back();
    }
}
