<x-layout title="Blog">
    @if (request()->is('author/*'))
        <x-slot:header>
            <h1 class="text-2xl font-bold tracking-tight text-gray-900"> {{$articles[0]->author->name}}</h1>
        </x-slot:header>
    @elseif (request()->is('category/*'))
        <x-slot:header>
            <h1 class="text-2xl font-bold tracking-tight text-gray-900"> {{$articles[0]->category->title}}</h1>
        </x-slot:header>
    @endif

    <form class="mx-auto max-w-4xl ">
        <div class="mt-2">
            <div
                class="flex items-center rounded-none bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-gray-400 h-10 sm:h-12">
                <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">
                    <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4"
                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 15L21 21" stroke="#323232" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                            stroke="#323232" stroke-width="2" />
                    </svg>

                </div>
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">

                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <input type="text" name="search" id="search" aria-label="Search"
                    class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                    placeholder="find articles..." value="{{ request('search') }}">
                <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">
                    <div class="grid shrink-0 grid-cols-1 focus-within:relative">

                        <button type="submit"
                            class="col-start-1 row-start-1 flex items-center justify-center bg-indigo-600 px-3 py-1.5 text-base font-semibold text-white shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20 sm:text-sm/6  h-10 sm:h-12 w-32">Search</button>
                    </div>
                </div>
            </div>
    </form>
    <div class="my-4">
        {{ $articles->links() }}

    </div>
    @forelse($articles as $article)
        <div class="bg-white my-2 sm:my-5">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="mx-auto mt-1 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 py-5 sm:mt-2 sm:py-7 ">

                    <article class="flex max-w-7xl flex-col items-start justify-between">
                        <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="2020-03-16"
                                class="text-gray-500">{{$article->updated_at->diffForHumans()}}</time>
                            <a href="/blog?category={{ $article->category->slug }}"
                                class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{$article->category->title}}</a>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                                <a href="/blog/{{$article->slug}}">
                                    <span class="absolute inset-0"></span>
                                    {{$article->title}}
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">
                                {{ Str::limit($article->content, 200)}}...
                            </p>

                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <img src="{{ $article->author->avatar }}" alt="" class="size-10 rounded-full bg-gray-50">
                            <div class="text-sm/6">
                                <p class="font-semibold text-gray-900">
                                    <a href="/blog?author={{ $article->author->username }}">
                                        <span class="absolute inset-0"></span>
                                        {{ $article->author->name }}
                                    </a>
                                </p>
                                <p class="text-gray-600">{{ $article->author->job}}</p>
                            </div>
                        </div>
                    </article>

                    <!-- More posts... -->
                </div>
            </div>
        </div>
    @empty
        <p class="text-2xl content-center font-semibold">Article not found</p>
    @endforelse
    <div class="my-4">
        {{ $articles->links() }}

    </div>
</x-layout>