<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoinTeamController extends Controller
{
    public function index()
    {
        return view('front.join.index');
    }
}
