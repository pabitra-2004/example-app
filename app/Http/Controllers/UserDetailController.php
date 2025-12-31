<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    public function __invoke()
    {
        // $users = User::with('details')->get();
        // dd($users);


        // $user = User::inRandomOrder()->first();
        // dd($user, $user->details);


        $userDetails = UserDetail::inRandomOrder()->first();
        dd($userDetails, $userDetails->user);
    }
}
