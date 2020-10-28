<div class="border border-blue-400 rounded-2xl py-6 px-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf

        <textarea
            name="body"
            id=""
            class="w-full"
            placeholder="What's up doc?"
        ></textarea>

        <hr class="py-4">

        @error('body')
            <p class="text-red-600 text-sm pb-4 -mt-4">{{ $message }}</p>
        @enderror

        <footer class="flex justify-between items-center">
            <img
                src="{{ current_user()->avatar }}"
                alt="{{ current_user()->name }}"
                class="rounded-full mr-2"
                width="40"
                height="40"
            >

            <button
                type="submit"
                class="bg-blue-500 rounded-2xl shadow py-4 px-2 text-white"
            >
                Tweet-a-roo!
            </button>
        </footer>
    </form>
</div>
