<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

use App\Models\User;

class ProfilesController extends Controller
{
    public function show(User $user) {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user) {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user) {
        $attrs = request()->validate([
            'username' => ['required', 'string', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'avatar' => ['file'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
        ]);

        if (request('avatar')) {
            $attrs['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attrs);

        return redirect($user->path());
    }

}
