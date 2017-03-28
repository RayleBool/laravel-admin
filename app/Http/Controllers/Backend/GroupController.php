<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Group;
use App\Models\GroupUser;

class GroupController extends Controller
{
    public function index()
    {
        $groups     = Group::all();
        
        return view('backend.group.index', compact('groups'));
    }
    

    public function groupMember()
    {
        $groupUsers     = GroupUser::all();


        return view('backend.group.member', compact('groupUsers'));
    }
}
