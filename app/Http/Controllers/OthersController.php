<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReturnRefund;
use App\Models\TermsCondition;
use App\Models\PrivacyPolicy;

class OthersController extends Controller
{
    public function return_policy()
    {
        $title = 'Returns & Refunds Policy';
        $return_policy = ReturnRefund::orderBy('id', 'asc')->first();

        return view('others.return_policy', compact('title', 'return_policy'));
    }

    public function terms_condition()
    {
        $title = 'Terms & Condition';
        $terms_condition = TermsCondition::orderBy('id', 'asc')->first();

        return view('others.terms_condition', compact('title', 'terms_condition'));
    }

    public function privacy_policy()
    {
        $title = 'Privacy Policy';
        $privacy_policy = PrivacyPolicy::orderBy('id', 'asc')->first();

        return view('others.privacy_policy', compact('title', 'privacy_policy'));
    }
}
