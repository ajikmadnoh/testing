<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\claim;
use App\Http\Requests;

class ProfilPenggunaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        return view('ProfilPengguna.index');
    }

}
