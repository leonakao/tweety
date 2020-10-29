<x-app>
    <div>
        <ul>
            @foreach ($users as $user)
                <li class="mb-5">
                    <a href="{{ $user->path() }}" class="flex items-center">
                        <img
                            src="{{ $user->avatar }}"
                            alt="{{ $user->username }}'s avatar"
                            width="100"
                            class="mr-4"
                        >

                        <div>
                            <h4 class="font-bold">{{ '@' . $user->username }}</h4>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</x-app>
