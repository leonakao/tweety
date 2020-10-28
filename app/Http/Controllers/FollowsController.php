<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FollowsController extends Controller
{
    public function store(User $user) {
        auth()
            ->user()
            ->follow($user);

        return back();
    }

    public function destroy(User $user) {
        auth()
            ->user()
            ->unFollow($user);

        return back();
    }
}
