<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\claim;
use App\Http\Requests;

class ListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function claim(Request $request)
    {
        $claims = Claim::orderBy('id','DESC')->paginate(5);
        return view('Claim.listClaim',compact('claims'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
}
