<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return inertia('welcome');
    }

    public function about()
    {
        return inertia('About');
    }

    public function contact()
    {
        return inertia('Contact');
    }

    public function privacy()
    {
        return inertia('PrivacyPolicy');
    }

    public function terms()
    {
        return inertia('TermsOfService');
    }

    public function signup($type)
    {
        return inertia('Signup', [
            'type' => $type
        ]);
    }
}
