<x-default-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <div class="text-center">
                <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">From the blog
                </h1>

                <p class="max-w-lg mx-auto mt-4 text-gray-500">
                    Salami mustard spice tea fridge authentic Chinese food dish salt tasty liquor. Sweet savory
                    foodtruck
                    pie.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2 xl:grid-cols-3">
                @forelse ($posts as $post)
                    <div>
                        <div class="relative">
                            <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80"
                                src="{{ $post->banner_url }}" alt="{{ $post->title }}">

                            <div class="absolute bottom-0 flex p-3 bg-white dark:bg-gray-900 rounded-tr-lg">
                                <img class="object-cover object-center w-10 h-10 rounded-full"
                                    src="{{ $post->author->photo_url }}" alt="{{ $post->author->name }}">

                                <div class="mx-4">
                                    <h1 class="text-sm text-gray-700 dark:text-gray-200">{{ $post->author->name }}</h1>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">
                                        {{ $post->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>

                        <h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">
                            {{ $post->title }}
                        </h1>

                        <hr class="w-32 my-6 text-blue-500">

                        <p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-3">
                            {{ $post->excerpt }}
                        </p>

                        <a href="{{ route('posts.show', $post->slug) }}"
                            class="inline-block mt-4 text-blue-500 underline hover:text-blue-400">Read
                            more</a>
                    </div>
                @empty
                    <h1 class="font-semibold italic text-sm text-gray-500">
                        There are no posts to show
                    </h1>
                @endforelse
            </div>
        </div>
    </section>
</x-default-layout>
