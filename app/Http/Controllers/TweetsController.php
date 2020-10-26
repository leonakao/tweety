<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tweet;

class TweetsController extends Controller
{
    public function store(Request $request) {
        $attr = $request->validate(['body' => 'required|max:255']);

        Tweet::create([
            'user_id' => auth()->user()->id,
            'body' => $attr['body'],
        ]);

        return redirect('/home');
    }
}
