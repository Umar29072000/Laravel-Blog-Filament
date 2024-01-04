<x-default-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-center text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">All Posts
            </h1>
            <form class="mt-4" action="/posts" x-data="{ expandFilter: false }">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search" name="search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Mockups, Logos..." value="{{ request('search') }}" required>
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>

                <button type="button" @click="expandFilter =! expandFilter"
                    class="py-2.5 px-5 me-2 my-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Alternative</button>
                <div class="filters" x-show="expandFilter">
                    <label for="countries"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Filter</label>
                    <select id="countries"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a country</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>

                </div>
            </form>

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
