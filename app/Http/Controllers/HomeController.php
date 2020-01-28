<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if(auth()->check() and $request->user()->level==1){
            return redirect('/admin'); 
        }elseif(auth()->check() and $request->user()->level==2){
            return redirect('/admin'); 
        }elseif(auth()->check() and $request->user()->level==3){
        return redirect('/apps'); 
       }
       else{
           return"halaman tidak ditemukan";
       }
    }
    public function homeApp()
    {
        return view('/');
    }
}
 