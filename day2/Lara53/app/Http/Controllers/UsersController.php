<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
        $users = [
        '0' => [
            'first_name' => 'Manash',
            'last_name' => 'Mandal',
            'roll' => '1203043'
        ] ,
        '1' => [
            'first_name' => 'Hello',
            'last_name' => 'world',
            'roll' => '1203043'
        ]
    ];
    return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return 'success';
    }
}
