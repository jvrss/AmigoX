<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class MemberController extends Controller
{
    function __construct() {
        
        $this->middleware('auth');
        
    }
    
    public function index()
    {
        $members = Group::find(1)->;

        return view ('member.index', ['members'=>$members]);
    }

}
