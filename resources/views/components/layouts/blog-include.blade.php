{{-- Meine Komponenten für Anzeige Blogposts auf der Homepage --}}
<section class=" w-full flex flex-col bg-zinc-100 p-10">
    <div class="px-10 mx-auto max-w-7xl w-full">
        <div class="flex items-center justify-between w-full pb-5 mb-8">
            <h1
                class="w-full m-0 text-4xl font-black leading-loose tracking-wide text-center text-zinc-700 border-0 border-primary-200 sm:text-5xl">
                Blog Posts
            </h1>
        </div>

        <div class="grid grid-cols-12 gap-6">
            @foreach ($posts as $post)
                <div class="relative col-span-12 mb-10 space-y-4 md:col-span-6 lg:col-span-4">
                    <a wire:navigate href="{{ route('blog.show', $post->slug) }}"
                        class="relative block w-full h-64 overflow-hidden rounded">
                        <img class="object-cover object-center w-full h-full transition duration-500 ease-out transform scale-100 hover:scale-105"
                            src="{{ asset($post->getThumbnailUrl()) }}">
                    </a>

                    <a href=wire:navigate href="{{ route('blog.show', $post->slug) }}"
                        class="block text-2xl font-medium leading-tight text-zinc-700 hover:text-zinc-900">{{ $post->title }}</a>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center">
            <a wire:navigate href="{{ route('blog.index') }}"
                class="flex items-center rounded font-semibold text-zinc-800 hover:text-zinc-950">
                <x-button>View More Posts</x-button>

            </a>
        </div>
    </div>
</section>
