<form method="POST" action="/profiles/{{ $user->name }}/follow">
    @csrf
    @method(auth()->user()->isFollowing($user) ? 'DELETE' : 'POST')

    <button
        class="bg-blue-900 rounded-full shadow py-2 px-4 text-white text-xs"
        type="submit"
    >
        {{ auth()->user()->isFollowing($user) ? 'Unfollow me' : 'Follow me' }}
    </button>
</form>
