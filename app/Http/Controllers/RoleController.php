<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    public function __invoke()
    {
       $users = User::with('roles:id,name')->take(4)->get();
    
       $results = $users->map(fn($user) => [
            'name' => $user->name,
            
            'roles' => $user->roles->map(fn($role) => [
                'role' => $role->name,
            ]),
       ]);
       dd($users, $results);

    
        

    }
}
