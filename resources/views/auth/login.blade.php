<x-master>
    <div class="container mx-auto px-6 py-4">
        <div class="flex justify-center">
            <div class="card bg-blue-200 px-12 py-8 rounded-lg min-w-1/3">
                <div class="card-header">
                    <h2 class="font-bold text-xl mb-4 text-center">Login</h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <label for="email" value="Email"> Email </label>
                            <input id="email" class="border-b border-black-500 block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            @error('email')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <label for="password" value="Password"> Password </label>
                            <input id="password" class="border-b border-black-500 block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            @error('password')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                                <span class="ml-2 text-sm text-gray-600">Remember me</span>
                            </label>
                            @error('remember')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 mr-2" href="{{ route('password.request') }}">
                                    Forgot your password?
                                </a>
                            @endif

                            <button type="submit" class="px-5 py-3 rounded text-sm uppercase bg-blue-600 text-white">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-master>

