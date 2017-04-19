<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\claim;
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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $claims = Claim::orderBy('id','DESC')->paginate(5);
        return view('home',compact('claims'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
}
 