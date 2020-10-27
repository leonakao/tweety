<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex {{ auth()->check() ? 'lg:justify-between' : 'lg:justify-center' }}">

                @if (auth()->check())
                    <div class="lg:w-32">
                        @include('_sidebar-links')
                    </div>
                @endif

                <div class="lg:flex-1 lg:mx-10 lg:mb-10" style="max-width: 700px">
                    {{ $slot }}
                </div>

                @if (auth()->check())
                    <div class="lg:w-1/6 bg-blue-300 rounded-2xl p-4">
                        @include('_following-list')
                    </div>
                @endif
            </div>
        </main>
    </section>
</x-master>
