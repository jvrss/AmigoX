<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
use App\Group;
use App\Draw;

class DrawController extends Controller {

    public function store(Request $request) {
        $session_id = $request->get('id');
        $session = Session::find($session_id);

        $group_id = $session->group_id;
        $group = Group::find($group_id);

        if (count($group->users) < 2) {
            $request->session()->flash('message', 'Necessário pelo menos dois usuários no grupo para realizar o sorteio!');
            return redirect()->route('session.show', ['session' => $session]);
        }

        $userList = collect($group->users);
        $countUsers = $userList->count();

        if ($countUsers == 2) {
            $sortedUsers = $userList->random(2);

            $from = $sortedUsers->get(0)->id;
            $to = $sortedUsers->get(1)->id;

            $draw = new Draw;
            $draw->session_id = $session_id;
            $draw->from_id = $from;
            $draw->to_id = $to;
            //$draw->save();

            $from = $sortedUsers->get(1)->id;
            $to = $sortedUsers->get(0)->id;

            $draw = new Draw;
            $draw->session_id = $session_id;
            $draw->from_id = $from;
            $draw->to_id = $to;
            //$draw->save();
        }

        for ($i = 0; $i < $countUsers; $i++) {
            
            $sortedUsers = $userList->random(2);

            $from = $sortedUsers->get(0)->id;
            $to = $sortedUsers->get(1)->id;

            $draw = new Draw;
            $draw->session_id = $session_id;
            $draw->from_id = $from;
            $draw->to_id = $to;
            //$draw->save();
            
            $userList->forget($sortedUsers->get(1));
            
        }
        
        

        dd($userList);



        return redirect()->route('session.show', ['session' => $session]);
    }

}
