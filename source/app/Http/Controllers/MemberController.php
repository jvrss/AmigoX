<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\User;

class MemberController extends Controller {

    function __construct() {

        $this->middleware('auth');
    }

    public function show($userId) {

        $user = User::find($userId);

        $group_id = session('group_id');
        $group = Group::find($group_id);

        return view('member.show', ['user' => $user, 'group' => $group]);
    }

    public function edit($group_id) {
        session(['group_id' => $group_id]);

        $group = Group::find($group_id);

        $users = User::all();

        return view('member.edit', ['group' => $group, 'users' => $users]);
    }

    public function update($id) {
//        $group = Group::find($id);
//        $group->update(collect($request->all())->except('_token')->toArray());
//        return redirect()->route('group.index');
    }

    public function store(Request $request) {
        $group_id = $request->get("group_id");
        $user_id = $request->get("user_id");

        $user = User::find($user_id);
        $group = Group::find($group_id);

        $group->users()->attach($user_id);
        
        return view('group.show', ['group' => $group]);
    }

}
