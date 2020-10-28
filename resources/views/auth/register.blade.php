<x-master>
    <div class="container mx-auto px-6 py-4">
        <div class="row justify-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="font-bold text-xl mb-4 text-center">Register</h2>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div>
                                <label for="username" value="Username"> Username </label>
                                <input id="username" class="border-b border-black-500 block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
                            </div>

                            <div>
                                <label for="name" value="Name"> Name </label>
                                <input id="name" class="border-b border-black-500 block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>

                            <div class="mt-4">
                                <label for="email" value="Email"> Email </label>
                                <input id="email" class="border-b border-black-500 block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>

                            <div class="mt-4">
                                <label for="password" value="Password"> Password </label>
                                <input id="password" class="border-b border-black-500 block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="mt-4">
                                <label for="password_confirmation" value="Confirm Password"> Confirm Password </label>
                                <input id="password_confirmation" class="border-b border-black-500 block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 mr-2" href="{{ route('login') }}">
                                    Already registered?
                                </a>

                                <button type="submit" class="px-5 py-3 rounded text-sm uppercase bg-blue-600 text-white">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
