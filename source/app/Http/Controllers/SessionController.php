<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;

class SessionController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }    
    
    public function index()
    {
        $sessions = Session::all();
        return view ('session.index', ['sessions'=>$sessions]);
    }
    
    public function create()
    {
        return view('session.create');
    }
    
    public function store(Request $request)
    {
        dd($request->all());
    }

}
