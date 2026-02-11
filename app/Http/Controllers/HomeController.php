<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
    public function faqs()
    {
        return view('academic.faqs');
    }
    public function admission()
    {
        return view('school.admission');
    }
    public function team()
    {
        return view('school.team');
    }
    public function login()
    {
        return view('student.login');
    }
     public function payment()
    {
        return view('admin.payment');
    }

    public function switchLocale(string $locale)
    {
        if (in_array($locale, ['en', 'sw'])) {
            session(['locale' => $locale]);
        }
        return redirect()->back();
    }

    public function health()
    {
        return response()->json([
            'status' => 'ok',
            'timestamp' => now()->toIso8601String(),
            'environment' => app()->environment(),
        ]);
    }
}
