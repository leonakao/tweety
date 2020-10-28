<x-app>
    <form method="POST" action="{{ $user->path() }}">
        @csrf
        @method('PATCH')

        <div>
            <label for="username" value="Username"> Username </label>
            <input
                id="username"
                class="border-b border-black-500 block mt-1 w-full"
                type="text"
                name="username"
                value="{{ $user->username }}"
                required
                autofocus
                autocomplete="username"
            />

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="name" value="Name"> Name </label>
            <input
                id="name"
                class="border-b border-black-500 block mt-1 w-full"
                type="text"
                name="name"
                value="{{ $user->name }}"
                required
                autocomplete="name"
            />

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mt-4">
            <label for="email" value="Email"> Email </label>
            <input
                id="
                email" class="border-b border-black-500 block mt-1 w-full"
                type="email"
                name="email"
                value="{{ $user->email }}"
                required
            />

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mt-4">
            <button type="submit" class="px-5 py-3 rounded text-sm uppercase bg-blue-600 text-white">
                Save
            </button>
        </div>
    </form>
</x-app>
