<?php

namespace App\Traits;

use App\Models\User;
use App\Models\Tweet;
use App\Models\Like;

trait Likeable {
    public function like($user, $liked = true) {
        return $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id(),
        ], [
            'liked' => $liked
        ]);
    }

    public function dislike($user) {
        return $this->like($user, false);
    }

    public function isLikedBy(User $user, $liked = true) {
        return (bool)$user->likes->where('tweet_id', $this->id)->where('liked', $liked)->count();
    }

    public function isDislikedBy(User $user) {
        return $this->isLikedBy($user, false);
    }

    public function likes() {
        return $this->hasMany(Like::class);
    }
}
