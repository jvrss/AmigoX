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
    
    public function edit($id) {

        $members = Group::find($id)->users;
        $users = User::all();
        
        return view('member.edit', ['members' => $members, 'users' => $users, 'member_id' => $id]);
    }
    
    public function update(Request $request, $id) {

//        $group = Group::find($id);
//        $group->update(collect($request->all())->except('_token')->toArray());
//        return redirect()->route('group.index');
    }

}
