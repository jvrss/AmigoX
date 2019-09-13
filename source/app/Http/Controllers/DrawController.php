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

        $giveList = collect($group->users);
        $receivedList = collect($group->users);
        
        $countUsers = $giveList->count();
        

        for ($i = 0; $i < $countUsers; $i++) {
            
            $sortedFrom = $giveList->random();
            $sortedTo = $receivedList->random();
            
            while($sortedFrom->id == $sortedTo->id){
                $sortedTo = $receivedList->random();
            }
            
            $from = $sortedFrom->id;
            $to = $sortedTo->id;

            $draw = new Draw;
            $draw->session_id = $session_id;
            $draw->from_id = $from;
            $draw->to_id = $to;
            $draw->save();
            
            $giveList->forget($giveList->search($sortedFrom));
            $receivedList->forget($receivedList->search($sortedTo));
            
        }
        
        $session->sorted = true;
        $session->save();
        
        return redirect()->route('session.show', ['session' => $session]);
    }

}
