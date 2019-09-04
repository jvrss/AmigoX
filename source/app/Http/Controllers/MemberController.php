<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\User;

class MemberController extends Controller
{
    
    function __construct() {
        
        $this->middleware('auth');
        
    }
    
    public function show($userId) {
        
        $user = User::find($userId);
        
        $group_id = session('group_id');
        $group = Group::find($group_id);

        return view('member.show', ['user' => $user, 'group' => $group]);
    }
    
    public function edit($id) {
        session(['group_id' => $id]);
        
        $group = Group::find($id);
        $users = User::all();
        
        return view('member.edit', ['group' => $group, 'users' => $users, 'member_id' => $id]);
    }
    
    public function update($id) {
//        $group = Group::find($id);
//        $group->update(collect($request->all())->except('_token')->toArray());
//        return redirect()->route('group.index');
    }

}
