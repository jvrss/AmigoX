<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $sessions = Message::all();
        
        return view ('session.index', ['sessions'=>$sessions]);
    }
}
