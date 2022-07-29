<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OthersController extends Controller
{
    public function return_policy()
    {
        $title = 'Returns & Refunds Policy';

        return view('others.return_policy', compact('title'));
    }

    public function terms_condition()
    {
        $title = 'Terms & Condition';

        return view('others.return_policy', compact('title'));
    }

    public function privacy_policy()
    {
        $title = 'Privacy Policy';

        return view('others.return_policy', compact('title'));
    }
}
