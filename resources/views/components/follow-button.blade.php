@unless (current_user()->is($user))

    <form method="POST" action="{{ route('follows.store', $user) }}">
        @csrf

        @method(current_user()->isFollowing($user) ? 'DELETE' : 'POST')

        <button
            class="bg-blue-900 rounded-full shadow py-2 px-4 text-white text-xs"
            type="submit"
        >
            {{ current_user()->isFollowing($user) ? 'Unfollow me' : 'Follow me' }}
        </button>
    </form>

@endunless
