<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\User;

class MemberController extends Controller {

    function __construct() {

        $this->middleware('auth');
    }

    public function show(Request $request, $userId) {

        $path = $request->get('path');
        
        $user = User::find($userId);

        $group_id = session('group_id');
        $group = Group::find($group_id);

        return view('member.show', ['user' => $user, 'group' => $group, 'path' => $path]);
    }

    public function edit($group_id) {
        session(['group_id' => $group_id]);

        $group = Group::find($group_id);

        $users = User::all();

        return view('member.edit', ['group' => $group, 'users' => $users]);
    }

    public function store(Request $request) {
        $group_id = $request->get("group_id");
        $user_id = $request->get("user_id");

        $group = Group::find($group_id);
        $group->users()->attach($user_id);

        return view('group.show', ['group' => $group]);
    }

    public function destroy(Request $request, $id) {
        $group_id = $request->get("group_id");
        $user_id = $request->get("user_id");
        
        $group = Group::find($group_id);
        $group->users()->detach($user_id);
        
        return view('group.show', ['group' => $group]);
    }

}
