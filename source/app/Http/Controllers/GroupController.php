<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $groups = Group::all();
        return view ('group.index', ['groups'=>$groups]);
    }
    
    public function create()
    {
        return view('group.create');
    }
    
    public function store(Request $request)
    {
        Group::create($request->all()->except('_token'));
        return redirect()->route('group.index');
    }
}
