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
        Group::create($request->only('name'));
        return redirect()->route('group.index');
    }
    
    public function show($id) {

        $group = Group::find($id);

        return view('group.show', ['group' => $group]);
    }
    
    public function edit($id) {

        $group = Group::find($id);

        return view('group.edit', ['group' => $group]);
    }
    
    public function update(Request $request, $id) {

        $group = Group::find($id);
        $group->update(collect($request->all())->except('_token')->toArray());
        return redirect()->route('group.index');
    }

    public function destroy($id) {

        $session = Session::find($id);
        $session->delete();
        return redirect()->route('group.index');
        
    }
}
