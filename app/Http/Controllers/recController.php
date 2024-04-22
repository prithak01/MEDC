<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recController extends Controller
{
    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        return 'hello form controller';
    }
}
