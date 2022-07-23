<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function check(Request $request){
         //Validate Inputs
         $request->validate([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required|min:5|max:30'
         ],[
             'email.exists'=>'This email is not exists in admins table'
         ]);

         $creds = $request->only('email','password');

         if( Auth::guard('admin')->attempt($creds) ){
             return redirect()->route('admin.home');
         }else{
             return redirect()->route('admin.login')->with('fail','Incorrect credentials');
         }
    }

    public function index(Request $request) 
    {
        $sort_search = null;
        $admins = Admin::orderBy('id', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $admins = $admins->where('name', 'like', '%'.$sort_search.'%');
        }
        $admins = $admins->paginate(10);
        return view('admin.index', compact('admins', 'sort_search'));
    }

    function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}