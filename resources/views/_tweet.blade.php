<div class="flex p-4 border-b border-gray-400">
    <div class="mr-2 flex-shrink-0">
        <img
            src="https://www.gravatar.com/avatar/{{ md5($tweet->user->email) }}?s=50&d=monsterid"
            alt=""
            class="rounded-full mr-2"
        >
    </div>
    <div>
        <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>

        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>
