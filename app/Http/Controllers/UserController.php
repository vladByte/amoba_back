<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\user_plan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();

        return response()->json($users->toArray());
    }
}
