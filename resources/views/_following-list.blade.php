<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
    @foreach(current_user()->follows as $user)
        <li class="mb-4">
            <div class="text-sm">
                <a
                    href="{{ $user->path() }}"
                    class="flex items-center"
                >
                    <img
                        src="{{ $user->avatar }}"
                        alt="{{ $user->name }}"
                        class="rounded-full mr-2"
                        width="40"
                        height="40"
                    >

                    {{ $user->name }}
                </a>
            </div>
        </li>
    @endforeach
</ul>
