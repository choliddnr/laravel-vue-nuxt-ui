<x-layout>
    {{-- <x-slot:header>
        <div class="flex items-center gap-x-4 text-xs">
            <time datetime="2020-03-16" class="text-gray-500">{{$article->updated_at->diffForHumans()}}</time>
            <a href="/category/{{ $article->category->slug }}"
                class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{$article->category->title}}</a>
        </div>
        <h3 class="text-2xl font-bold tracking-tight text-gray-900">{{$article->title}}</h3>

    </x-slot:header> --}}
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
                            <div>
                                <span class="absolute inset-0"></span>
                                {{$article->title}}
                            </div>
                        </h3>
                        <p class="mt-5 text-justify text-sm/6 text-gray-600">
                            @php
                                // dump($article->content);
                            @endphp
                            {{ $article->content}}
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
</x-layout>