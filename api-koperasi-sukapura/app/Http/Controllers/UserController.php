<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        // $data = users::all();
        // return response()->json($data);
        return response()->json(['message' => 'Hello, World!']);
    }
}
