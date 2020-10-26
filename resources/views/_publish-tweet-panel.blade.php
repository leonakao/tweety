<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
    <form action="">
        <textarea
            name="body"
            id=""
            class="w-full"
            placeholder="What's up doc?"
        ></textarea>

        <hr class="py-4">

        <footer class="flex justify-between items-center">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="{{ auth()->user()->name }}"
                class="rounded-full mr-2"
                max-height="40"
            >

            <button type="submit" class="bg-blue-500 rounded-lg shadow py-4 px-2 text-white">Tweet-a-roo!</button>
        </footer>
    </form>
</div>
