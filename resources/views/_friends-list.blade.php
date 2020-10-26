<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @foreach(range(1, 8) as $index)
        <li class="mb-4">
            <div class="flex items-center text-sm">
                <img
                    src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50"
                    alt=""
                    class="rounded-full mr-2"
                    width="40"
                >

                John Doe
            </div>
        </li>
    @endforeach
</ul>
