<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('backend.users_manage');
    }

    public function index_detail()
    {
        return view('backend.users_detail');
    }
}
