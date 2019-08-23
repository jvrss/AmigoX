<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
use App\Group;

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
        $groups = Group::all();
        
        return view('session.create', ['groups'=>$groups]);
    }
    
    public function store(Request $request)
    {
        Session::create(collect($request->all())->except('_token')->toArray());
        return redirect()->route('session.index');
    }

}
