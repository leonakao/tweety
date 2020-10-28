<x-app>
    <h3 class="text-xl font-bold mb-6">Profile Update</h3>

    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group mb-4">
            <label class="font-bold" for="username" value="Username"> Username </label>
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

        <div class="form-group mb-4">
            <label class="font-bold" for="avatar" value="Avatar"> Avatar </label>

            <div class="flex">
                <input
                    id="avatar"
                    class="border-b border-black-500 block mt-1 w-full"
                    type="file"
                    name="avatar"
                    value="{{ $user->avatar }}"
                    required
                    autofocus
                    autocomplete="avatar"
                />

                <img src="{{ $user->avatar }}" alt="your avatar" width="120">
            </div>

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label class="font-bold" for="name" value="Name"> Name </label>
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
            <label class="font-bold" for="email" value="Email"> Email </label>
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
