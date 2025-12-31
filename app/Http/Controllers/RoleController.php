<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    public function __invoke()
    {
        // Method 1
        // using relationship method
        // $users = User::with('roles:id,name')->take(4)->get();

        // Method 2
        $users = User::take(5)->get(); // Q..1

        $userIds = $users->pluck('id')->all();
        $roles = Role::join('role_user', 'roles.id', 'role_user.role_id')->where('role_user.user_id', $userIds)->get(); // Q..2

        $__users = $users->map(function ($user) use ($roles) {

            $user->roles = $roles->where('user_id', $user->id)
                ->pluck('name')
                ->all();
            return $user;
        });
        dd($users, $roles, $__users);

        // Method 3
        // $userWithRoles = User::leftJoin('role_user', 'role_user.user_id', 'users.id')
        //     ->join('roles', 'roles.id', 'role_user.role_id')
        //     ->select('users.*', 'roles.id', 'roles.name')
        //     ->groupBy('users.id')
        //     ->get();

        // dd($userWithRoles);
    }
}
