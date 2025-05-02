{{-- <x-layout>
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4">Welcome to the Home Page</h1>
        <p class="mb-4">This is a simple Laravel Blade template.</p>
        <a href="{{ route('about') }}" class="text-blue-500 hover:underline">Go to About Page</a>
    </div>
</x-layout> --}}

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Niagahoster Clone</title>
    @vite('resources/css/app.css')
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script> --}}

</head>

{{-- Hero Image URL: https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/31f64542-353a-4cc1-6367-78c8bba34800/public --}}

<body class="bg-base-100 text-gray-900" data-theme="light-custom">
    <!-- Navbar -->
    <div class="navbar bg-base-100 shadow-sm px-10 py-5 sticky top-0 z-50">
        <div class="navbar-start mx-auto">

            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 30"
                    class="h-svgo-icon h-svgo-icon--logo"
                    style="fill:var(--neutral--1000);color:var(--neutral--1000);height:30;width:192;" data-v-8bf4be8b=""
                    data-v-03dae1ca="">
                    <clipPath id="i370534843__a">
                        <path d="M0 0h191.25v30H0z"></path>
                    </clipPath>
                    <g clip-path="url(#i370534843__a)">
                        <path fill="#007dff"
                            d="M18.39 7.147a9.43 9.43 0 0 0-7.665.2 9.464 9.464 0 0 0-2.606 1.855L1.675 15.68a5.26 5.26 0 0 0-1.53 3.71c0 2.878 2.356 5.245 5.22 5.245h.001c.063 0 .126 0 .19-.003a3.949 3.949 0 0 1-1.354-6.548l5.39-5.413.571-.578.194-.194.219-.221c.135-.133.273-.26.417-.382a12.177 12.177 0 0 1 8.043-3.025c.481 0 .963.028 1.441.084a9.347 9.347 0 0 0-2.088-1.207zm21.84 2.558c-1.078-2.666-4.147-3.97-6.802-2.889l-.066.028A5.208 5.208 0 0 0 31.7 7.968l-3.943 3.963-.57.57-.052.05a1.74 1.74 0 0 1-2.407-.05l-3.026-3.04a11.359 11.359 0 0 0-6.804.467 5.893 5.893 0 0 1 4.086 1.748l5.23 5.256a2.472 2.472 0 0 0 3.487 0l6.457-6.489c.062-.063.13-.12.201-.174a3.908 3.908 0 0 1 2.549-.946 3.927 3.927 0 0 1 3.693 2.625 5.253 5.253 0 0 0-.372-2.243zm-3.32.493c-.176 0-.352.015-.526.046a1.753 1.753 0 0 1 .236 2.67l-6.417 6.45-.041.041c-.112.114-.23.222-.35.326a12.185 12.185 0 0 1-8.15 3.117c-.448 0-.897-.024-1.342-.073a9.424 9.424 0 0 0 9.66.972 9.35 9.35 0 0 0 2.64-1.868l6.262-6.29.198-.2c.07-.07.138-.142.204-.216a3.068 3.068 0 0 0 .67-1.913c0-1.678-1.375-3.06-3.045-3.06h-.001zM25.896 21.152a5.916 5.916 0 0 1-4.143-1.748l-5.205-5.231a2.498 2.498 0 0 0-1.763-.75 2.443 2.443 0 0 0-1.747.726l-1.535 1.545-.646.648-1.502 1.51-.622.626-1.03 1.036-.919.924-.184.186a1.736 1.736 0 0 1-2.681-.269c-.036.19-.055.384-.055.577 0 1.679 1.374 3.06 3.045 3.062.769 0 1.51-.293 2.071-.818l.04-.04.04-.038.052-.053 1.697-1.705 2.756-2.77a1.742 1.742 0 0 1 2.446.013l3.083 3.098a11.36 11.36 0 0 0 6.802-.529zm29.99-12.416v6.682l-6.86-6.738h-1.26v13.688h3.585v-6.7l6.839 6.72h1.243V8.736zM66.93 22.395V8.761h-3.437V11.8h.006v7.537h-.006v3.057h3.437zM77.111 8.57h-1.49l-6.106 13.301-.233.507h3.623l.794-1.714h5.35l.794 1.714h3.624l-.232-.507zm-2.286 9.114 1.531-3.583 1.569 3.583zm22.433-3.078h-6.413v3.018h2.884c-.62 1.305-1.512 1.676-2.907 1.676-2.054 0-3.372-1.48-3.372-3.74 0-2.084 1.182-3.796 3.372-3.796 1.376 0 2.267.467 2.829 1.635h3.411c-.66-3.388-3.508-4.81-6.24-4.83-3.45 0-6.937 2.338-6.96 6.995.02 4.654 3.508 6.971 6.96 6.971 2.5 0 5.077-1.09 6.047-3.934.464-1.326.464-2.632.389-3.995zm8.632-6.036h-1.491l-6.106 13.301-.231.507h3.622l.795-1.714h5.349l.795 1.714h3.624l-.234-.507zm-2.286 9.114 1.53-3.583 1.57 3.583zm17.973-8.922v4.946h-4.186V8.762h-3.548v13.633h3.548v-5.472h4.186v5.472h3.546V8.762zm6.138 6.822c0 9.445 13.914 9.445 13.914 0 0-9.426-13.914-9.426-13.914 0zm3.566 0c0-4.908 6.802-4.908 6.802 0a3.418 3.418 0 0 1-3.401 3.115 3.413 3.413 0 0 1-3.401-3.115zm17.695-1.315c-1.222-.136-2.229-.349-2.152-1.382.116-1.617 3.76-1.773 3.76.04h3.294c.077-5.883-10.464-5.883-10.348 0 .038 2.959 1.977 3.971 4.921 4.186 1.356.078 2.48.292 2.48 1.249 0 1.598-4.244 1.577-4.244-.156h-3.353c-.076 5.998 10.969 5.9 10.969.175.001-3.413-2.634-3.821-5.327-4.112zm6.536-5.507v3.116h3.331v10.517h3.429V11.878h3.314V8.762zm15.628 10.536v-2.395h4.611v-3.098h-4.611v-1.927h5.019V8.762h-8.469v13.633h8.643v-3.098zm17-1.733c3.43-2.337 2.461-8.783-2.869-8.803h-5.95v13.633h3.47v-4.013h1.803l2.326 4.013h4.185l-.31-.506zm-2.869-2.279h-2.48v-3.408c.814 0 1.666-.019 2.48 0 1.977.02 1.88 3.408 0 3.408z">
                        </path>
                    </g>
                </svg></a>
            <div class="mx-5">

                <button class="btn btn-ghost text-lg font-light" popovertarget="popover-1"
                    style="anchor-name:--anchor-1">
                    Harga
                </button>
                <div class="max-w-4xl dropdown menu p-2 bg-amber-500 shadow-xl" popover id="popover-1"
                    style="position-anchor:--anchor-1">
                    <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto veniam suscipit repudiandae.
                        Error
                        nisi atque quae dolores eaque mollitia odio quasi? Optio nobis sit doloribus deleniti eos
                        accusantium. Saepe, voluptatum!</h1>
                </div>
                <button class="btn btn-ghost  text-lg font-light" popovertarget="popover-2"
                    style="anchor-name:--anchor-2">
                    Layanan
                </button>
                <div class="max-w-4xl dropdown menu p-2 bg-amber-500" popover id="popover-2"
                    style="position-anchor:--anchor-2">
                    <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto veniam suscipit repudiandae.
                        Error
                        nisi atque quae dolores eaque mollitia odio quasi? Optio nobis sit doloribus deleniti eos
                        accusantium. Saepe, voluptatum!</h1>
                </div>
                <button class="btn btn-ghost  text-lg font-light" popovertarget="popover-3"
                    style="anchor-name:--anchor-3">
                    Jelajah
                </button>
                <div class="max-w-4xl dropdown menu p-2 bg-amber-500" popover id="popover-3"
                    style="position-anchor:--anchor-3">
                    <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto veniam suscipit repudiandae.
                        Error
                        nisi atque quae dolores eaque mollitia odio quasi? Optio nobis sit doloribus deleniti eos
                        accusantium. Saepe, voluptatum!</h1>
                </div>
                <button class="btn btn-ghost  text-lg font-light" popovertarget="popover-4"
                    style="anchor-name:--anchor-4">
                    Bantuan
                </button>
                <div class="max-w-4xl dropdown menu p-2 bg-amber-500" popover id="popover-4"
                    style="position-anchor:--anchor-4">
                    <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto veniam suscipit repudiandae.
                        Error
                        nisi atque quae dolores eaque mollitia odio quasi? Optio nobis sit doloribus deleniti eos
                        accusantium. Saepe, voluptatum!</h1>
                </div>
            </div>
        </div>
        {{-- <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a>Item 1</a></li>
                <li>
                    <details>
                        <summary>Parent</summary>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </details>
                </li>
                <li><a>Item 3</a></li>
            </ul>
        </div> --}}
        <div class="navbar-end">
            <a class="btn btn-outline btn-secondary hover:bg-base-200 hover:text-base-content">Login</a>
        </div>
    </div>

    <!-- Hero Section -->
    <div id="backdrop" class="fixed inset-0 bg-black/50 z-40 hidden"></div>

    <x-lp.hero />



    <section class="py-16 inset-0">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold leading-tight mb-9 text-base-content">
                Mulai bisnis online Anda di sini
            </h1>
            <p class="text-md text-base-content mb-12">
                Pilih layanan dan produk terbaik untuk wujudkan bisnis online Anda.
            </p>

            <div class="tabs  flex justify-center gap-4  ">
                <input type="radio" name="mbo"
                    class="tab rounded-full !text-base-content font-bold bg-base-200 hover:bg-base-100 checked:bg-base-300 checked:hover:bg-base-300 text-sm px-6 py-2.5"
                    checked aria-label="Rekomendai" />
                <div class="tab-content p-6 ">
                    <div class="grid grid-cols-3 gap-7 max-w-[1128px] mx-auto">
                        <div class="card col-span-3 lg:card-side bg-base-100 shadow-sm min-h-[400px] ">
                            <div class="card-body p-0 bg-neutral grid grid-cols-1 lg:grid-cols-2 gap-4 rounded-2xl">
                                <div
                                    class="rounded-tl-2xl h-[400px] w-[300px] absolute z-0 top-0 bg-gradient-to-br from-indigo-500/70  to-neutral to-40%">
                                </div>
                                <div class="z-10 p-10 grid grid-cols-1 gap-4 content-center text-primary-content">
                                    <div class="badge badge-primary badge-xl rounded-full py-1 px-3 text-sm font-bold">
                                        Hostinger Horizons</div>
                                    <h2 class="card-title text-primary-content text-4xl">Turn your idea into reality
                                    </h2>
                                    <p class="text-[16px] text-start">Build and lunch any web apps, tools, and
                                        sofftware
                                        in
                                        minutes - without writing anycode.</p>
                                    <a href="#" class="text-primary flex flex-row gap-1">Start now <svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </a>

                                </div>
                                <figure>
                                    <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/1d4b57f9-a48d-43cb-5242-6c3aafe88b00/public"
                                        alt="Album" />
                                </figure>
                            </div>
                        </div>
                        <div class="card col-span-3 lg:col-span-2 bg-base-100 shadow-sm min-h-[400px] ">
                            <div class="card-body p-0 bg-indigo-950 grid grid-cols-1 gap-4 rounded-2xl overflow-hidden">
                                <div class="grid grid-col-1 lg:grid-cols-2 gap-6">
                                    <div
                                        class=" lg:col-span-2 text-2xl font-bold mb-6 mx-10 mt-10 rounded-t-xl text-start">
                                        <div
                                            class="badge badge-primary badge-xl rounded-full py-1 px-3 text-sm font-bold">
                                            GRATIS MIGRASI WEBSITE
                                        </div>
                                    </div>
                                    <div
                                        class="grid grid-cols-1 content-center text-primary-content text-start px-10 pt-0 pb-10 gap-5">

                                        <h2 class="card-title text-primary-content text-4xl">Web hosting
                                        </h2>
                                        <p class="text-[16px] text-start">Dapatkan performa website terbaik dengan
                                            hosting cepat dan aman untuk sukseskan bisnis Anda.</p>
                                        <a href="#"
                                            class="text-indigo-300 text-semibold text-lg flex flex-row gap-1">Mulai
                                            dan
                                            kembangkan
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6 mt-1 ">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </a>
                                    </div>
                                    <figure>
                                        <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/aca5677b-a56b-49da-8d0e-fbe591f96f00/public"
                                            alt="Album" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="card col-span-3 lg:col-span-1 shadow-sm min-h-[400px] ">
                            <div class="card-body p-0 bg-indigo-400/90 flex flex-col gap-4 rounded-2xl justify-between">
                                <div class="flex text-2xl font-bold p-10 pb-3 justify-between">
                                    <div class="bg-primary text-primary-content rounded-lg p-2 font-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="flex-1 size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                                        </svg>

                                    </div>
                                    <div class="bg-transparent text-primary-content rounded-lg p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="flex-1 size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                        </svg>
                                    </div>

                                </div>
                                <div class="text-start p-10 pt-0">
                                    <h3 class="card-title text-primary-content text-3xl">Gunakan domain sendiri untuk
                                        bisnis
                                        Anda
                                    </h3>

                                </div>
                                <figure>
                                    <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/183f455e-ff22-4124-ec61-a8f8abf21300/public"
                                        alt="Album" />
                                </figure>
                            </div>
                        </div>
                    </div>

                </div>
                <input type="radio" name="mbo"
                    class="tab rounded-full !text-base-content font-bold bg-base-200 hover:bg-base-100 checked:bg-base-300 checked:hover:bg-base-300  text-sm px-6 py-2.5"
                    aria-label="Buat Website" />
                <div class="tab-content p-6 ">
                    <div class="grid grid-cols-3 gap-7 max-w-[1128px] mx-auto">

                        <div class="card col-span-3 lg:col-span-2 bg-base-100 shadow-sm min-h-[400px] ">
                            <div class="card-body p-0 bg-indigo-950 grid grid-cols-1 gap-4 rounded-2xl">
                                <div class="grid grid-cols-2 gap-6">
                                    <div
                                        class=" col-span-2 text-2xl font-bold mb-6 mx-10 mt-10 rounded-t-xl text-start">
                                        <div
                                            class="badge badge-primary badge-xl rounded-full py-1 px-3 text-sm font-bold">
                                            GRATIS MIGRASI WEBSITE
                                        </div>
                                    </div>
                                    <div
                                        class="grid grid-cols-1 content-center text-primary-content text-start px-10 pt-0 pb-10 gap-5">

                                        <h2 class="card-title text-primary-content text-4xl">Web hosting
                                        </h2>
                                        <p class="text-[16px] text-start">Dapatkan performa website terbaik dengan
                                            hosting cepat dan aman untuk sukseskan bisnis Anda.</p>
                                        <a href="#"
                                            class="text-indigo-300 text-semibold text-lg flex flex-row gap-1">Mulai
                                            dan
                                            kembangkan
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6 mt-1 ">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </a>
                                    </div>
                                    <figure>
                                        <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/aca5677b-a56b-49da-8d0e-fbe591f96f00/public"
                                            alt="Album" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="card col-span-3 lg:col-span-1 shadow-sm min-h-[400px] ">
                            <div
                                class="card-body p-0 bg-indigo-400/90 flex flex-col gap-4 rounded-2xl justify-between">
                                <div class="flex text-2xl font-bold p-10 pb-3 justify-between">
                                    <div class="bg-primary text-primary-content rounded-lg p-2 font-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="flex-1 size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                                        </svg>

                                    </div>
                                    <div class="bg-transparent text-primary-content rounded-lg p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="flex-1 size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                        </svg>
                                    </div>

                                </div>
                                <div class="text-start p-10 pt-0">
                                    <h3 class="card-title text-primary-content text-3xl">Gunakan domain sendiri untuk
                                        bisnis
                                        Anda
                                    </h3>

                                </div>
                                <figure>
                                    <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/183f455e-ff22-4124-ec61-a8f8abf21300/public"
                                        alt="Album" />
                                </figure>
                            </div>
                        </div>
                        <div class="card col-span-3 lg:card-side bg-base-100 shadow-sm min-h-[400px] ">
                            <div class="card-body p-0 bg-neutral grid grid-cols-1 lg:grid-cols-2 gap-4 rounded-2xl">
                                <div
                                    class="rounded-tl-2xl h-[400px] w-[300px] absolute z-0 top-0 bg-gradient-to-br from-indigo-500/70  to-neutral to-40%">
                                </div>
                                <div class="z-10 p-10 grid grid-cols-1 gap-4 content-center text-primary-content">
                                    <div class="badge badge-primary badge-xl rounded-full py-1 px-3 text-sm font-bold">
                                        Hostinger Horizons</div>
                                    <h2 class="card-title text-primary-content text-4xl">Turn your idea into reality
                                    </h2>
                                    <p class="text-[16px] text-start">Build and lunch any web apps, tools, and
                                        sofftware
                                        in
                                        minutes - without writing anycode.</p>
                                    <a href="#" class="text-primary flex flex-row gap-1">Start now <svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </a>

                                </div>
                                <figure>
                                    <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/1d4b57f9-a48d-43cb-5242-6c3aafe88b00/public"
                                        alt="Album" />
                                </figure>
                            </div>
                        </div>
                    </div>

                </div>
                <input type="radio" name="mbo"
                    class="tab rounded-full !text-base-content font-bold bg-base-200 hover:bg-base-100 checked:bg-base-300 checked:hover:bg-base-300  text-sm px-6 py-2.5"
                    aria-label="Hosting" />
                <div class="tab-content p-6 ">
                    <div class="grid grid-cols-3 gap-7 max-w-[1128px] mx-auto">
                        <div class="card col-span-3 lg:card-side bg-base-100 shadow-sm min-h-[400px] ">
                            <div class="card-body p-0 bg-neutral grid grid-cols-1 lg:grid-cols-2 gap-4 rounded-2xl">
                                <div
                                    class="rounded-tl-2xl h-[400px] w-[300px] absolute z-0 top-0 bg-gradient-to-br from-indigo-500/70  to-neutral to-40%">
                                </div>
                                <div class="z-10 p-10 grid grid-cols-1 gap-4 content-center text-primary-content">
                                    <div class="badge badge-primary badge-xl rounded-full py-1 px-3 text-sm font-bold">
                                        Hostinger Horizons</div>
                                    <h2 class="card-title text-primary-content text-4xl">Turn your idea into reality
                                    </h2>
                                    <p class="text-[16px] text-start">Build and lunch any web apps, tools, and
                                        sofftware
                                        in
                                        minutes - without writing anycode.</p>
                                    <a href="#" class="text-primary flex flex-row gap-1">Start now <svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </a>

                                </div>
                                <figure>
                                    <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/1d4b57f9-a48d-43cb-5242-6c3aafe88b00/public"
                                        alt="Album" />
                                </figure>
                            </div>
                        </div>
                        <div class="card col-span-3 lg:col-span-1 shadow-sm min-h-[400px] ">
                            <div
                                class="card-body p-0 bg-indigo-400/90 flex flex-col gap-4 rounded-2xl justify-between">
                                <div class="flex text-2xl font-bold p-10 pb-3 justify-between">
                                    <div class="bg-primary text-primary-content rounded-lg p-2 font-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="flex-1 size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                                        </svg>

                                    </div>
                                    <div class="bg-transparent text-primary-content rounded-lg p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="flex-1 size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                        </svg>
                                    </div>

                                </div>
                                <div class="text-start p-10 pt-0">
                                    <h3 class="card-title text-primary-content text-3xl">Gunakan domain sendiri untuk
                                        bisnis
                                        Anda
                                    </h3>

                                </div>
                                <figure>
                                    <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/183f455e-ff22-4124-ec61-a8f8abf21300/public"
                                        alt="Album" />
                                </figure>
                            </div>
                        </div>
                        <div class="card col-span-3 lg:col-span-2 bg-base-100 shadow-sm min-h-[400px] ">
                            <div class="card-body p-0 bg-indigo-950 grid grid-cols-1 gap-4 rounded-2xl">
                                <div class="grid grid-cols-2 gap-6">
                                    <div
                                        class=" col-span-2 text-2xl font-bold mb-6 mx-10 mt-10 rounded-t-xl text-start">
                                        <div
                                            class="badge badge-primary badge-xl rounded-full py-1 px-3 text-sm font-bold">
                                            GRATIS MIGRASI WEBSITE
                                        </div>
                                    </div>
                                    <div
                                        class="grid grid-cols-1 content-center text-primary-content text-start px-10 pt-0 pb-10 gap-5">

                                        <h2 class="card-title text-primary-content text-4xl">Web hosting
                                        </h2>
                                        <p class="text-[16px] text-start">Dapatkan performa website terbaik dengan
                                            hosting cepat dan aman untuk sukseskan bisnis Anda.</p>
                                        <a href="#"
                                            class="text-indigo-300 text-semibold text-lg flex flex-row gap-1">Mulai
                                            dan
                                            kembangkan
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6 mt-1 ">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </a>
                                    </div>
                                    <figure>
                                        <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/aca5677b-a56b-49da-8d0e-fbe591f96f00/public"
                                            alt="Album" />
                                    </figure>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <input type="radio" name="mbo"
                    class="tab rounded-full !text-base-content font-bold bg-base-200 hover:bg-base-100 checked:bg-base-300 checked:hover:bg-base-300  text-sm px-6 py-2.5"
                    aria-label="Domain & Email" />
                <div class="tab-content p-6 ">
                    <div class="grid grid-cols-3 gap-7 max-w-[1128px] mx-auto">

                        <div class="card col-span-3 lg:col-span-1 shadow-sm min-h-[400px] ">
                            <div
                                class="card-body p-0 bg-indigo-400/90 flex flex-col gap-4 rounded-2xl justify-between">
                                <div class="flex text-2xl font-bold p-10 pb-3 justify-between">
                                    <div class="bg-primary text-primary-content rounded-lg p-2 font-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="flex-1 size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                                        </svg>

                                    </div>
                                    <div class="bg-transparent text-primary-content rounded-lg p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="flex-1 size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                        </svg>
                                    </div>

                                </div>
                                <div class="text-start p-10 pt-0">
                                    <h3 class="card-title text-primary-content text-3xl">Gunakan domain sendiri untuk
                                        bisnis
                                        Anda
                                    </h3>

                                </div>
                                <figure>
                                    <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/183f455e-ff22-4124-ec61-a8f8abf21300/public"
                                        alt="Album" />
                                </figure>
                            </div>
                        </div>
                        <div class="card col-span-3 lg:col-span-2 bg-base-100 shadow-sm min-h-[400px] ">
                            <div class="card-body p-0 bg-indigo-950 grid grid-cols-1 gap-4 rounded-2xl">
                                <div class="grid grid-cols-2 gap-6">
                                    <div
                                        class=" col-span-2 text-2xl font-bold mb-6 mx-10 mt-10 rounded-t-xl text-start">
                                        <div
                                            class="badge badge-primary badge-xl rounded-full py-1 px-3 text-sm font-bold">
                                            GRATIS MIGRASI WEBSITE
                                        </div>
                                    </div>
                                    <div
                                        class="grid grid-cols-1 content-center text-primary-content text-start px-10 pt-0 pb-10 gap-5">

                                        <h2 class="card-title text-primary-content text-4xl">Web hosting
                                        </h2>
                                        <p class="text-[16px] text-start">Dapatkan performa website terbaik dengan
                                            hosting cepat dan aman untuk sukseskan bisnis Anda.</p>
                                        <a href="#"
                                            class="text-indigo-300 text-semibold text-lg flex flex-row gap-1">Mulai
                                            dan
                                            kembangkan
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6 mt-1 ">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </a>
                                    </div>
                                    <figure>
                                        <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/aca5677b-a56b-49da-8d0e-fbe591f96f00/public"
                                            alt="Album" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="card col-span-3 lg:card-side bg-base-100 shadow-sm min-h-[400px] ">
                            <div class="card-body p-0 bg-neutral grid grid-cols-1 lg:grid-cols-2 gap-4 rounded-2xl">
                                <div
                                    class="rounded-tl-2xl h-[400px] w-[300px] absolute z-0 top-0 bg-gradient-to-br from-indigo-500/70  to-neutral to-40%">
                                </div>
                                <div class="z-10 p-10 grid grid-cols-1 gap-4 content-center text-primary-content">
                                    <div class="badge badge-primary badge-xl rounded-full py-1 px-3 text-sm font-bold">
                                        Hostinger Horizons</div>
                                    <h2 class="card-title text-primary-content text-4xl">Turn your idea into reality
                                    </h2>
                                    <p class="text-[16px] text-start">Build and lunch any web apps, tools, and
                                        sofftware
                                        in
                                        minutes - without writing anycode.</p>
                                    <a href="#" class="text-primary flex flex-row gap-1">Start now <svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </a>

                                </div>
                                <figure>
                                    <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/1d4b57f9-a48d-43cb-5242-6c3aafe88b00/public"
                                        alt="Album" />
                                </figure>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Features Section -->



    <section class="py-16 bg-indigo-950 inset-0">
        <div class="container mx-auto px-4 text-center text-primary-content max-w-[1200px]">
            <h1 class="text-4xl font-bold leading-tight mb-9 ">
                Migrasi website praktis
            </h1>
            <p class="text-md mb-12">
                Hosting website di provider lain? Migrasi ke Niagahoster dan nikmati web hosting yang cepat, aman, dan
                dipercaya 3+ juta pengguna website di seluruh dunia. Tim teknis kami akan menangani proses migrasi
                sepenuhnya dan memastikan website Anda tetap online. Tanpa downtime, kehilangan data, dan error!
            </p>

            <div class="grid md:grid-cols-3 grid-cols-1 gap-4">
                <div class="card bg-indigo-900">
                    <div class="card-body flex flex-col justify-start gap-4">
                        <div class="bg-primary w-fit p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                        </div>
                        <div class="text-start">
                            <h3 class="text-2xl font-bold">
                                3 langkah mudah
                            </h3>
                        </div>
                        <div class="text-start">
                            <p>Cukup pilih paket hosting, isi formulir permintaan migrasi, kirim, dan tunggu proses
                                migrasi selesai.</p>
                        </div>
                    </div>
                </div>
                <div class="card bg-indigo-900">
                    <div class="card-body flex flex-col justify-start gap-4">
                        <div class="bg-primary w-fit p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                        </div>
                        <div class="text-start">
                            <h3 class="text-2xl font-bold">
                                3 langkah mudah
                            </h3>
                        </div>
                        <div class="text-start">
                            <p>Cukup pilih paket hosting, isi formulir permintaan migrasi, kirim, dan tunggu proses
                                migrasi selesai.
                                Cukup pilih paket hosting, isi formulir permintaan migrasi, kirim, dan tunggu proses
                                migrasi selesai.</p>
                        </div>
                    </div>
                </div>
                <div class="card bg-indigo-900">
                    <div class="card-body flex flex-col justify-start gap-4">
                        <div class="bg-primary w-fit p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                        </div>
                        <div class="text-start">
                            <h3 class="text-2xl font-bold">
                                3 langkah mudah
                            </h3>
                        </div>
                        <div class="text-start">
                            <p>Cukup pilih paket hosting, isi formulir permintaan migrasi, kirim, dan tunggu proses
                                migrasi selesai.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-primary btn-lg mt-8 px-12 py-3 rounded-xl">Pilih paket</a>

        </div>
    </section>


    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center max-w-[1200px]">
            {{-- <h2 class="text-3xl font-bold mb-8">Apa Kata Pelanggan Kami</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-100 p-6 rounded-lg">
                    <p class="text-gray-700 mb-4">"Layanan hosting terbaik dengan harga terjangkau. Sangat puas!"
                    </p>
                    <h4 class="font-semibold">Andi, Jakarta</h4>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg">
                    <p class="text-gray-700 mb-4">"Support 24/7 sangat membantu saat saya mengalami kendala."</p>
                    <h4 class="font-semibold">Siti, Bandung</h4>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg">
                    <p class="text-gray-700 mb-4">"Website saya jadi lebih cepat dan stabil sejak pindah ke
                        Niagahoster."</p>
                    <h4 class="font-semibold">Budi, Surabaya</h4>
                </div>
            </div> --}}

            <div class="carousel w-full">
                <div id="slide1" class="carousel-item relative w-full">
                    <div class="flex md:flex-row flex-col-reverse gap-10">
                        <div class="card">
                            <div class="card-body rounded-xl p-0 overflow-hidden w-xs">
                                <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/aaa2e62e-becd-457c-a47d-8c96b0575800/public"
                                    class="w-full" />
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-col gap-4 ">
                                <div class="size-9 text-primary bg-base-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        class="h-svgo-icon"
                                        style="fill:var(--primary--500);color:var(--primary--500);" data-v-df12c3be=""
                                        data-v-03dae1ca="">
                                        <path fill="currentColor"
                                            d="M5.822 3.951c.431-.532 1.217-.578 1.73-.124l1.464 1.3c.512.455.553 1.237.124 1.77-.908 1.125-1.596 2.211-2.066 3.26-.563 1.296-.845 2.697-.845 4.203L4.315 12.04h5.183c.682 0 1.235.553 1.235 1.235v6.494c0 .682-.553 1.235-1.235 1.235H2.735A1.235 1.235 0 0 1 1.5 19.768v-4.027c0-2.385.375-4.56 1.126-6.526.671-1.71 1.736-3.464 3.196-5.264Zm11.767 0c.43-.532 1.217-.578 1.729-.124l1.465 1.3c.512.455.553 1.237.123 1.77-.907 1.125-1.595 2.211-2.066 3.26-.563 1.296-.844 2.697-.844 4.203l-1.914-2.321h5.183c.682 0 1.235.553 1.235 1.235v6.494c0 .682-.553 1.235-1.235 1.235h-6.763a1.235 1.235 0 0 1-1.235-1.235v-4.027c0-2.385.375-4.56 1.126-6.526.67-1.71 1.736-3.464 3.196-5.264Z">
                                        </path>
                                    </svg>
                                </div>
                                <p class="text-4xl text-secondary text-start">Lorem ipsum dolor, sit amet consectetur
                                    adipisicing elit. Molestiae pariatur deserunt perferendis laboriosam dolor ut,
                                    facilis hic.</p>

                                <a href="#" class="text-primary text-start font-bold">Cek Review Lengkap</a>
                                <div class="divider"></div>
                                <div class="flex justify-between">
                                    <div class="flex flex-col gap-2 text-secondary text-start">
                                        <h1 class="text-xl font-semibold">Charlie Low and Dale Comely</h1>
                                        <p>nohma.com</p>
                                    </div>
                                    <div class="flex flex-row gap-3">
                                        <a href="#slide3" class="btn btn-circle">❮</a>
                                        <a href="#slide2" class="btn btn-circle">❯</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slide2" class="carousel-item relative w-full">
                    <div class="flex md:flex-row flex-col-reverse gap-10">
                        <div class="card">
                            <div class="card-body rounded-xl p-0 overflow-hidden w-xs">
                                <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/aaa2e62e-becd-457c-a47d-8c96b0575800/public"
                                    class="w-full" />
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-col gap-4 ">
                                <div class="size-9 text-primary bg-base-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        class="h-svgo-icon"
                                        style="fill:var(--primary--500);color:var(--primary--500);" data-v-df12c3be=""
                                        data-v-03dae1ca="">
                                        <path fill="currentColor"
                                            d="M5.822 3.951c.431-.532 1.217-.578 1.73-.124l1.464 1.3c.512.455.553 1.237.124 1.77-.908 1.125-1.596 2.211-2.066 3.26-.563 1.296-.845 2.697-.845 4.203L4.315 12.04h5.183c.682 0 1.235.553 1.235 1.235v6.494c0 .682-.553 1.235-1.235 1.235H2.735A1.235 1.235 0 0 1 1.5 19.768v-4.027c0-2.385.375-4.56 1.126-6.526.671-1.71 1.736-3.464 3.196-5.264Zm11.767 0c.43-.532 1.217-.578 1.729-.124l1.465 1.3c.512.455.553 1.237.123 1.77-.907 1.125-1.595 2.211-2.066 3.26-.563 1.296-.844 2.697-.844 4.203l-1.914-2.321h5.183c.682 0 1.235.553 1.235 1.235v6.494c0 .682-.553 1.235-1.235 1.235h-6.763a1.235 1.235 0 0 1-1.235-1.235v-4.027c0-2.385.375-4.56 1.126-6.526.67-1.71 1.736-3.464 3.196-5.264Z">
                                        </path>
                                    </svg>
                                </div>
                                <p class="text-4xl text-secondary text-start">Lorem ipsum dolor, sit amet consectetur
                                    adipisicing elit. Molestiae pariatur deserunt perferendis laboriosam dolor ut,
                                    facilis hic.</p>

                                <a href="#" class="text-primary text-start font-bold">Cek Review Lengkap</a>
                                <div class="divider"></div>
                                <div class="flex justify-between">
                                    <div class="flex flex-col gap-2 text-secondary text-start">
                                        <h1 class="text-xl font-semibold">Charlie Low and Dale Comely</h1>
                                        <p>nohma.com</p>
                                    </div>
                                    <div class="flex flex-row gap-3">
                                        <a href="#slide1" class="btn btn-circle">❮</a>
                                        <a href="#slide3" class="btn btn-circle">❯</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slide3" class="carousel-item relative w-full">
                    <div class="flex md:flex-row flex-col-reverse gap-10">
                        <div class="card">
                            <div class="card-body rounded-xl p-0 overflow-hidden w-xs">
                                <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/aaa2e62e-becd-457c-a47d-8c96b0575800/public"
                                    class="w-full" />
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-col gap-4 ">
                                <div class="size-9 text-primary bg-base-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        class="h-svgo-icon"
                                        style="fill:var(--primary--500);color:var(--primary--500);" data-v-df12c3be=""
                                        data-v-03dae1ca="">
                                        <path fill="currentColor"
                                            d="M5.822 3.951c.431-.532 1.217-.578 1.73-.124l1.464 1.3c.512.455.553 1.237.124 1.77-.908 1.125-1.596 2.211-2.066 3.26-.563 1.296-.845 2.697-.845 4.203L4.315 12.04h5.183c.682 0 1.235.553 1.235 1.235v6.494c0 .682-.553 1.235-1.235 1.235H2.735A1.235 1.235 0 0 1 1.5 19.768v-4.027c0-2.385.375-4.56 1.126-6.526.671-1.71 1.736-3.464 3.196-5.264Zm11.767 0c.43-.532 1.217-.578 1.729-.124l1.465 1.3c.512.455.553 1.237.123 1.77-.907 1.125-1.595 2.211-2.066 3.26-.563 1.296-.844 2.697-.844 4.203l-1.914-2.321h5.183c.682 0 1.235.553 1.235 1.235v6.494c0 .682-.553 1.235-1.235 1.235h-6.763a1.235 1.235 0 0 1-1.235-1.235v-4.027c0-2.385.375-4.56 1.126-6.526.67-1.71 1.736-3.464 3.196-5.264Z">
                                        </path>
                                    </svg>
                                </div>
                                <p class="text-4xl text-secondary text-start">Lorem ipsum dolor, sit amet consectetur
                                    adipisicing elit. Molestiae pariatur deserunt perferendis laboriosam dolor ut,
                                    facilis hic.</p>

                                <a href="#" class="text-primary text-start font-bold">Cek Review Lengkap</a>
                                <div class="divider"></div>
                                <div class="flex justify-between">
                                    <div class="flex flex-col gap-2 text-secondary text-start">
                                        <h1 class="text-xl font-semibold">Charlie Low and Dale Comely</h1>
                                        <p>nohma.com</p>
                                    </div>
                                    <div class="flex flex-row gap-3">
                                        <a href="#slide2" class="btn btn-circle">❮</a>
                                        <a href="#slide1" class="btn btn-circle">❯</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class=" bg-white">
        <div class="flex flex-col-reverse content-stretch md:flex-row">
            <div class="w-full flex max-h-[670px] bg-indigo-300 flex-row justify-end">
                <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/25e6e2a6-e1e6-424a-9b81-32c82da35e00/public"
                    class="h-full max-h-md my-auto w-auto" />

            </div>
            <div class="w-full max-w-[857px] content-start text-secondary flex flex-col justify-center ">
                <div class="w-sm flex flex-col gap-4  ml-24">
                    <div class="badge bg-base-300 badge-xl rounded-full py-1 px-3 text-sm font-bold">
                        Dashboard mudah digunakan</div>
                    <h2 class="card-title  text-4xl">Kelola layanan dari satu dashboard
                    </h2>
                    <span>

                        <p class="text-[16px] text-start">Dashboard dengan fitur lengkap untuk kelola hosting dan
                            layanan
                            Anda.</p>
                        <p class="text-[16px] text-start">
                            Dirancang agar mudah digunakan oleh pemula hingga profesional. Anda bisa cek performa
                            website,
                            mengatasi kendala, dan mengatur layanan dengan mudah dari satu tempat.</p>
                    </span>
                </div>
            </div>
        </div>
    </section>


    <section class="py-16 bg-indigo-950 inset-0">
        <div class="container mx-auto px-4 text-center text-primary-content max-w-[1100px]">
            <h1 class="text-4xl font-bold leading-tight mb-9 ">
                Cepat. Stabil. Efisien.
            </h1>
            <p class="text-md mb-12">
                Nikmati performa website dan pengalaman kunjungan terbaik dengan web hosting tepercaya.
            </p>

            <div class="grid md:grid-cols-3 grid-cols-1 gap-4">
                <div class="card bg-indigo-900 p-8">
                    <div class="card-body flex flex-col justify-start gap-4 p-0">
                        <div class="bg-primary w-fit p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                        </div>
                        <div class="text-start">
                            <h3 class="text-lg font-bold">
                                Data center lokal di seluruh dunia
                            </h3>
                        </div>
                        <div class="text-start">
                            <p>Situs Anda akan secara otomatis terhubung ke data center terdekat di jaringan global kami
                                tanpa tambahan biaya, sangat efisien!</p>
                        </div>
                    </div>
                </div>
                <div class="card bg-indigo-900 p-8">
                    <div class="card-body flex flex-col justify-start gap-4 p-0">
                        <div class="bg-primary w-fit p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                        </div>
                        <div class="text-start">
                            <h3 class="text-lg font-bold">
                                Traffic tinggi, website tetap ngebut
                            </h3>
                        </div>
                        <div class="text-start">
                            <p>Waktu respons dan loading website tetap cepat meskipun traffic kunjungan sedang tinggi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card bg-indigo-900 p-8">
                    <div class="card-body flex flex-col justify-start gap-4 p-0">
                        <div class="bg-primary w-fit p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                        </div>
                        <div class="text-start">
                            <h3 class="text-lg font-bold">
                                Website online 24/7
                            </h3>
                        </div>
                        <div class="text-start">
                            <p>Dijamin website online 24 jam dengan garansi uptime 99,9%.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-10 flex flex-col-reverse md:flex-row gap-7">
                <figure><img
                        src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/10d3524c-8d59-45a8-f7c2-b07611fabf00/public"
                        alt="" class="w-full h-auto"></figure>
                <div class="flex flex-col gap-4 text-primary-content text-start justify-center">
                    <h1 class="text-4xl">Keamanan penuh, kerja lebih tenang</h1>
                    <p class="flex flex-row gap-2 text-md">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </span>
                        Cegah kehilangan data dengan fitur backup otomatis dan 2FA
                    </p>
                    <p class="flex flex-row gap-2 text-md">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </span>
                        Cegah kehilangan data dengan fitur backup otomatis dan 2FA
                    </p>
                    <p class="flex flex-row gap-2 text-md">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </span>
                        Cegah kehilangan data dengan fitur backup otomatis dan 2FA
                    </p>
                    <a href="#" class="btn btn-primary btn-lg mt-8 px-12 py-3 rounded-xl w-auto">Pilih
                        paket</a>
                </div>
            </div>
        </div>
    </section>


    {{-- "https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/25e6e2a6-e1e6-424a-9b81-32c82da35e00/public --}}


    <section class="py-16 bg-base-100 inset-0">
        <div class="container mx-auto px-4 text-center text-secondary max-w-[1200px]">
            <h1 class="text-4xl font-bold leading-tight mb-9 ">
                Dipercaya 3+ juta user di seluruh dunia
            </h1>

            <div class="grid md:grid-cols-3 grid-cols-1 gap-4">
                <div class="card border-base-300 border-1 rounded-2xl">
                    <div class="card-body p-0 flex flex-col justify-start gap-4">
                        <div class="bg-base-200 w-full rounded-t-2xl">
                            <div class="py-6 px-8 flex flex-row gap-3">
                                <figure>
                                    <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/ef801bf5-45e4-42dc-c394-c37dafc54e00/public"
                                        alt="img" class="w-16 h-auto">
                                </figure>
                                <div class="flex flex-col text-start">
                                    <h1 class="text-lg font-bold mt-1.5">Charlie Low</h1>
                                    <p>Co-founder Nohma</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col text-start p-8 pb-10 ">
                            <div class="flex flex-row gap-1 mb-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-4">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-4">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-4">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-4">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-4">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="mt-2 text-base">
                                Web hosting terbaik yang pernah saya pakai selama bertahun-tahun. Karena selain cepat
                                dan aman, customer supportnya pun luar bisa membantu ketika ada kesulitan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card border-base-300 border-1 rounded-2xl">
                    <div class="card-body p-0 flex flex-col justify-start gap-4">
                        <div class="bg-base-200 w-full rounded-t-2xl">
                            <div class="py-6 px-8 flex flex-row gap-3">
                                <figure>
                                    <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/ef801bf5-45e4-42dc-c394-c37dafc54e00/public"
                                        alt="img" class="w-16 h-auto">
                                </figure>
                                <div class="flex flex-col text-start">
                                    <h1 class="text-lg font-bold mt-1.5">Charlie Low</h1>
                                    <p>Co-founder Nohma</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col text-start p-8 pb-10 ">
                            <div class="flex flex-row gap-1 mb-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-4">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-4">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-4">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-4">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-4">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="mt-2 text-base">
                                Web hosting terbaik yang pernah saya pakai selama bertahun-tahun. Karena selain cepat
                                dan aman, customer supportnya pun luar bisa membantu ketika ada kesulitan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card border-base-300 border-1 rounded-2xl">
                    <div class="card-body p-0 flex flex-col justify-start gap-4">
                        <div class="bg-base-200 w-full rounded-t-2xl">
                            <div class="py-6 px-8 flex flex-row gap-3">
                                <figure>
                                    <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/ef801bf5-45e4-42dc-c394-c37dafc54e00/public"
                                        alt="img" class="w-16 h-auto">
                                </figure>
                                <div class="flex flex-col text-start">
                                    <h1 class="text-lg font-bold mt-1.5">Charlie Low</h1>
                                    <p>Co-founder Nohma</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col text-start p-8 pb-10 ">
                            <div class="flex flex-row gap-1 mb-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-4">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-4">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-4">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-4">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-4">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="mt-2 text-base">
                                Web hosting terbaik yang pernah saya pakai selama bertahun-tahun. Karena selain cepat
                                dan aman, customer supportnya pun luar bisa membantu ketika ada kesulitan.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <a href="#"
                class="btn btn-primary btn-outline text-base btn-lg mt-8 px-12 py-3 rounded-xl hover:text-primary hover:bg-base-200">Lihat
                testimoni
                pelanggan</a>

        </div>
    </section>

    <section class="py-16">
        <div class="container max-w-[1100px] mx-auto w-auto text-secondary">
            <div class="flex flex-col md:flex-row justify-between gap-8">
                <div class="flex flex-col gap-4 text-start justify-center max-w-md ml-10 xl:ml-0">
                    <h1 class="text-4xl">Bantuan teknis 24/7
                    </h1>
                    <p class="flex flex-row gap-2 text-md">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5 mt-.5 text-success">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </span>
                        Akses bantuan pelanggan via live chat dan email selama 24 jam
                    </p>
                    <p class="flex flex-row gap-2 text-md">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5 mt-.5 text-success">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </span>
                        Tersedia dalam bahasa Indonesia dan 10+ bahasa lainnya
                    </p>
                    <p class="flex flex-row  gap-2 text-md">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5 mt-.5 text-success">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </span>
                        Tak perlu menunggu lama! Dapatkan jawaban kurang dari 2 menit
                    </p>
                </div>
                <figure class="max-w-xl h-auto">
                    <img
                        src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/43929794-bf80-4f1b-60ee-309d6a785e00/public" />
                </figure>
            </div>
        </div>
    </section>

    <section class="py-16 bg-indigo-950 inset-0">
        <div class="container mx-auto px-4 text-center text-primary-content max-w-[1200px]">
            <h1 class="text-4xl font-bold leading-tight mb-9 ">
                Hemat hingga 77% + domain gratis
            </h1>


            <div class="flex flex-row justify-center gap-1.5 text-base-100 text-center">

                <p class="">Garansi 30 hari uang kembali.</p>
                <div class="tooltip tooltip-bottom tooltip-primary">
                    <div class="tooltip-content p-5 -mt-1 shadow-lg rounded-lg text-justify">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum illum repellat ut
                            deleniti accusamus minus itaque obcaecati aliquam delectus modi, doloremque,
                            eaque culpa dolorum recusandae quaerat esse, voluptatem porro corrupti.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda laudantium
                            est totam quae inventore soluta adipisci blanditiis harum labore, illum facilis
                            eaque quia esse, facere, doloribus dolore. Fugiat, nostrum iusto?</p>

                    </div>
                    <span class="size-4"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" class="size-5 mt-.5">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0ZM8.94 6.94a.75.75 0 1 1-1.061-1.061 3 3 0 1 1 2.871 5.026v.345a.75.75 0 0 1-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 1 0 8.94 6.94ZM10 15a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>

            </div>


            <a href="#" class="btn btn-primary btn-lg mt-8 px-12 py-3 rounded-xl">Dapatkan promo</a>

        </div>
    </section>




    <!-- Footer -->
    <div class="bg-base-200 text-secondary">


        <footer class="footer flex flex-wrap max-w-[1100px] mx-auto py-10 justify-between px-10 xl:px-0 gap-1">
            <nav>
                <h6 class="text-lg font-bold">Services</h6>
                <a href="#" class=" text-sm hover:test-primary">Branding</a>
                <a href="#" class=" text-sm hover:test-primary">Design</a>
                <a href="#" class=" text-sm hover:test-primary">Marketing</a>
                <a href="#" class=" text-sm hover:test-primary">Advertisement sdgsdgs</a>
                <a href="#" class=" text-sm hover:test-primary">Design</a>
                <a href="#" class=" text-sm hover:test-primary">Marketing</a>
                <a href="#" class=" text-sm hover:test-primary">Advertisement sdgsdgs</a>
            </nav>
            <nav>
                <h6 class="text-lg font-bold">Company</h6>
                <a href="#" class=" text-sm hover:test-primary">About us</a>
                <a href="#" class=" text-sm hover:test-primary">Contact</a>
                <a href="#" class=" text-sm hover:test-primary">Jobs</a>
                <a href="#" class=" text-sm hover:test-primary">Press kit</a>
                <a href="#" class=" text-sm hover:test-primary">Jobs</a>
                <a href="#" class=" text-sm hover:test-primary">Press kit</a>
                <a href="#" class=" text-sm hover:test-primary">Jobs</a>
                <a href="#" class=" text-sm hover:test-primary">Press kit</a>
                <a href="#" class=" text-sm hover:test-primary">Jobs</a>
                <a href="#" class=" text-sm hover:test-primary">Press kit</a>
            </nav>
            <nav>
                <h6 class="text-lg font-bold">Legal</h6>
                <a href="#" class=" text-sm hover:test-primary">Terms of use</a>
                <a href="#" class=" text-sm hover:test-primary">Privacy policsgsdgg sdgsdg</a>
                <a href="#" class=" text-sm hover:test-primary">Cookie policy</a>
            </nav>
            <nav>
                <h6 class="text-lg font-bold">Services</h6>
                <a href="#" class=" text-sm hover:test-primary">Branding</a>
                <a href="#" class=" text-sm hover:test-primary">Design sdgjdsgj</a>
                <a href="#" class=" text-sm hover:test-primary">Marketing</a>
                <a href="#" class=" text-sm hover:test-primary">Advertisement</a>
            </nav>
            <nav>
                <h6 class="text-lg font-bold">Company</h6>
                <a href="#" class=" text-sm hover:test-primary">About us</a>
                <a href="#" class=" text-sm hover:test-primary">Contact</a>
                <a href="#" class=" text-sm hover:test-primary">Jobs</a>
                <a href="#" class=" text-sm hover:test-primary">Press kit</a>
            </nav>
            <nav>
                <h6 class="text-lg font-bold">Legal</h6>
                <a href="#" class=" text-sm hover:test-primary">Terms of use</a>
                <a href="#" class=" text-sm hover:test-primary">Privacy policy</a>
                <a href="#" class=" text-sm hover:test-primary">Cookie policy</a>
            </nav>
        </footer>
        <footer class="max-w-[1100px] mx-auto py-10 justify-between px-10 xl:px-0">
            <div class="flex flex-col-reverse md:flex-row justify-between">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 30"
                        class="h-svgo-icon h-svgo-icon--logo"
                        style="fill:var(--neutral--1000);color:var(--neutral--1000);height:30;width:192;"
                        data-v-8bf4be8b="" data-v-03dae1ca="">
                        <clipPath id="i370534843__a">
                            <path d="M0 0h191.25v30H0z"></path>
                        </clipPath>
                        <g clip-path="url(#i370534843__a)">
                            <path fill="#007dff"
                                d="M18.39 7.147a9.43 9.43 0 0 0-7.665.2 9.464 9.464 0 0 0-2.606 1.855L1.675 15.68a5.26 5.26 0 0 0-1.53 3.71c0 2.878 2.356 5.245 5.22 5.245h.001c.063 0 .126 0 .19-.003a3.949 3.949 0 0 1-1.354-6.548l5.39-5.413.571-.578.194-.194.219-.221c.135-.133.273-.26.417-.382a12.177 12.177 0 0 1 8.043-3.025c.481 0 .963.028 1.441.084a9.347 9.347 0 0 0-2.088-1.207zm21.84 2.558c-1.078-2.666-4.147-3.97-6.802-2.889l-.066.028A5.208 5.208 0 0 0 31.7 7.968l-3.943 3.963-.57.57-.052.05a1.74 1.74 0 0 1-2.407-.05l-3.026-3.04a11.359 11.359 0 0 0-6.804.467 5.893 5.893 0 0 1 4.086 1.748l5.23 5.256a2.472 2.472 0 0 0 3.487 0l6.457-6.489c.062-.063.13-.12.201-.174a3.908 3.908 0 0 1 2.549-.946 3.927 3.927 0 0 1 3.693 2.625 5.253 5.253 0 0 0-.372-2.243zm-3.32.493c-.176 0-.352.015-.526.046a1.753 1.753 0 0 1 .236 2.67l-6.417 6.45-.041.041c-.112.114-.23.222-.35.326a12.185 12.185 0 0 1-8.15 3.117c-.448 0-.897-.024-1.342-.073a9.424 9.424 0 0 0 9.66.972 9.35 9.35 0 0 0 2.64-1.868l6.262-6.29.198-.2c.07-.07.138-.142.204-.216a3.068 3.068 0 0 0 .67-1.913c0-1.678-1.375-3.06-3.045-3.06h-.001zM25.896 21.152a5.916 5.916 0 0 1-4.143-1.748l-5.205-5.231a2.498 2.498 0 0 0-1.763-.75 2.443 2.443 0 0 0-1.747.726l-1.535 1.545-.646.648-1.502 1.51-.622.626-1.03 1.036-.919.924-.184.186a1.736 1.736 0 0 1-2.681-.269c-.036.19-.055.384-.055.577 0 1.679 1.374 3.06 3.045 3.062.769 0 1.51-.293 2.071-.818l.04-.04.04-.038.052-.053 1.697-1.705 2.756-2.77a1.742 1.742 0 0 1 2.446.013l3.083 3.098a11.36 11.36 0 0 0 6.802-.529zm29.99-12.416v6.682l-6.86-6.738h-1.26v13.688h3.585v-6.7l6.839 6.72h1.243V8.736zM66.93 22.395V8.761h-3.437V11.8h.006v7.537h-.006v3.057h3.437zM77.111 8.57h-1.49l-6.106 13.301-.233.507h3.623l.794-1.714h5.35l.794 1.714h3.624l-.232-.507zm-2.286 9.114 1.531-3.583 1.569 3.583zm22.433-3.078h-6.413v3.018h2.884c-.62 1.305-1.512 1.676-2.907 1.676-2.054 0-3.372-1.48-3.372-3.74 0-2.084 1.182-3.796 3.372-3.796 1.376 0 2.267.467 2.829 1.635h3.411c-.66-3.388-3.508-4.81-6.24-4.83-3.45 0-6.937 2.338-6.96 6.995.02 4.654 3.508 6.971 6.96 6.971 2.5 0 5.077-1.09 6.047-3.934.464-1.326.464-2.632.389-3.995zm8.632-6.036h-1.491l-6.106 13.301-.231.507h3.622l.795-1.714h5.349l.795 1.714h3.624l-.234-.507zm-2.286 9.114 1.53-3.583 1.57 3.583zm17.973-8.922v4.946h-4.186V8.762h-3.548v13.633h3.548v-5.472h4.186v5.472h3.546V8.762zm6.138 6.822c0 9.445 13.914 9.445 13.914 0 0-9.426-13.914-9.426-13.914 0zm3.566 0c0-4.908 6.802-4.908 6.802 0a3.418 3.418 0 0 1-3.401 3.115 3.413 3.413 0 0 1-3.401-3.115zm17.695-1.315c-1.222-.136-2.229-.349-2.152-1.382.116-1.617 3.76-1.773 3.76.04h3.294c.077-5.883-10.464-5.883-10.348 0 .038 2.959 1.977 3.971 4.921 4.186 1.356.078 2.48.292 2.48 1.249 0 1.598-4.244 1.577-4.244-.156h-3.353c-.076 5.998 10.969 5.9 10.969.175.001-3.413-2.634-3.821-5.327-4.112zm6.536-5.507v3.116h3.331v10.517h3.429V11.878h3.314V8.762zm15.628 10.536v-2.395h4.611v-3.098h-4.611v-1.927h5.019V8.762h-8.469v13.633h8.643v-3.098zm17-1.733c3.43-2.337 2.461-8.783-2.869-8.803h-5.95v13.633h3.47v-4.013h1.803l2.326 4.013h4.185l-.31-.506zm-2.869-2.279h-2.48v-3.408c.814 0 1.666-.019 2.48 0 1.977.02 1.88 3.408 0 3.408z">
                            </path>
                        </g>
                    </svg></a>
                <div class="grid grid-flow-col gap-4">
                    <a href="#">
                        <div class="bg-secondary text-secondary-content rounded-lg w-7 h-7 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" class="fill-current">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                                </path>
                            </svg>
                        </div>
                    </a>
                    <a href="#">
                        <div class="bg-secondary text-secondary-content rounded-lg w-7 h-7 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" class="fill-current">
                                <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                                </path>
                            </svg>
                        </div>
                    </a>
                    <a href="#">
                        <div class="bg-secondary text-secondary-content rounded-lg w-7 h-7 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" class="fill-current">
                                <path
                                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex flex-row gap-5 text-sm mt-5">
                <a href="#" class="hover:text-primary">Kebijakan Privasi</a>
                <a href="#" class="hover:text-primary">Kebijakan Pengembalian Uang</a>
                <a href="#" class="hover:text-primary">Syarat dan Ketentuan</a>
            </div>
            <div class="divider mt-6"></div>
            <div class="flex flex-row justify-between text-sm">
                <p>© 2025 niagahoster.co.id - Premium Web Hosting, Cloud Hosting, VPS, AI Website Builder, & Domain.</p>
                <p>Harga belum termasuk PPN</p>
            </div>

        </footer>
    </div>
    <script>
        const popover1 = document.getElementById('popover-1');
        const popover2 = document.getElementById('popover-2');
        const popover3 = document.getElementById('popover-3');
        const popover4 = document.getElementById('popover-4');
        const backdrop = document.getElementById('backdrop');



        function toggleBackdrop(show) {
            if (show) {
                backdrop.classList.remove('hidden');
            } else {
                backdrop.classList.add('hidden');
            }
        }
        popover1.addEventListener("beforetoggle", (e) => toggleBackdrop(e.newState === "open"));
        popover2.addEventListener("beforetoggle", (e) => toggleBackdrop(e.newState === "open"));
        popover3.addEventListener("beforetoggle", (e) => toggleBackdrop(e.newState === "open"));
        popover4.addEventListener("beforetoggle", (e) => toggleBackdrop(e.newState === "open"));


        const tooltipcontents = document.getElementsByClassName('herosection');
        console.log(tooltipcontents);

        [...tooltipcontents].forEach((tooltipcontent) => {
            const style = window.getComputedStyle(tooltipcontent);
            tooltipcontent.style.marginTop = `${parseFloat(style.height) / 2 - 7}px`;
        });


        const expandedfeatures = document.getElementsByClassName('expandedfeatures');
        const showMoreFeaturesBtns = document.getElementsByClassName('show-more-features');
        const hideMoreFeaturesBtns = document.getElementsByClassName('hide-more-features');
        const expandedfeaturesArray = [...expandedfeatures];

        const showMoreFeatures = () => {

            for (let i = 0; i < expandedfeaturesArray.length; i++) {
                expandedfeatures[i].classList.remove('hidden');
                showMoreFeaturesBtns[i].classList.add('hidden');
                hideMoreFeaturesBtns[i].classList.remove('hidden');
            }
        };

        const hideMoreFeatures = () => {
            for (let i = 0; i < expandedfeaturesArray.length; i++) {
                expandedfeatures[i].classList.add('hidden');
                showMoreFeaturesBtns[i].classList.remove('hidden');
                hideMoreFeaturesBtns[i].classList.add('hidden');
            }
        };


        const carousel = document.getElementById("crs");
        const itemWidth = () => carousel.querySelector(".carousel-item").offsetWidth + 16; // 16px is space-x-4

        document.getElementById("nextButton").addEventListener("click", () => {
            carousel.scrollBy({
                left: itemWidth(),
                behavior: 'smooth'
            });
        });

        document.getElementById("prevButton").addEventListener("click", () => {
            carousel.scrollBy({
                left: -itemWidth(),
                behavior: 'smooth'
            });
        });
    </script>

</body>

</html>

{{-- <div class="h-social-icons" data-v-8cd3c6d2="" data-v-2330a837=""><!--[-->
    <a class="h-social-icons--icon" data-click-id="hgr-footer-social_icons-linkedin"
        href="https://www.linkedin.com/company/hostinger" aria-label="SvgoLinkedin24"
        rel="noopener noreferrer nofollow" target="_blank" data-v-2330a837=""
        data-gtm-vis-first-on-screen7887523_1293="259170" data-gtm-vis-total-visible-time7887523_1293="3000"
        data-gtm-vis-has-fired7887523_1293="1"></a><a class="h-social-icons--icon"
        data-click-id="hgr-footer-social_icons-facebook" href="https://www.facebook.com/Niagahoster"
        aria-label="SvgoFacebook24" rel="noopener noreferrer nofollow" target="_blank" data-v-2330a837=""
        data-gtm-vis-first-on-screen7887523_1293="259177" data-gtm-vis-total-visible-time7887523_1293="3000"
        data-gtm-vis-has-fired7887523_1293="1"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 25" class="h-svgo-icon" style="fill:var(--primary--800);color:var(--primary--800);"
            data-v-2330a837="" data-v-03dae1ca="">
            <path fill="currentColor" fill-rule="evenodd"
                d="M7.498 2.13a6 6 0 0 0-6 6v9a6 6 0 0 0 6 6h9a6 6 0 0 0 6-6v-9a6 6 0 0 0-6-6h-9Zm.803 8.238h1.696V8.454c0-1.714.902-2.61 2.936-2.61h2.153v2.828h-1.631c-.522 0-.63.214-.63.754v.942h2.26l-.202 2.262h-2.059v6.785H9.997V12.63H8.301v-2.262Z"
                clip-rule="evenodd"></path>
        </svg></a><a class="h-social-icons--icon" data-click-id="hgr-footer-social_icons-instagram"
        href="https://www.instagram.com/niagahoster.id" aria-label="SvgoInstagram24"
        rel="noopener noreferrer nofollow" target="_blank" data-v-2330a837=""
        data-gtm-vis-first-on-screen7887523_1293="259178" data-gtm-vis-total-visible-time7887523_1293="3000"
        data-gtm-vis-has-fired7887523_1293="1"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 25" class="h-svgo-icon" style="fill:var(--primary--800);color:var(--primary--800);"
            data-v-2330a837="" data-v-03dae1ca="">
            <path fill="currentColor" d="M7.612 13.707a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0Z"></path>
            <path fill="currentColor" fill-rule="evenodd"
                d="M7.498 2.457a6 6 0 0 0-6 6v9a6 6 0 0 0 6 6h9a6 6 0 0 0 6-6v-9a6 6 0 0 0-6-6h-9Zm10.539 5.7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Zm-6.3-.825a6.375 6.375 0 1 0 0 12.75 6.375 6.375 0 0 0 0-12.75Z"
                clip-rule="evenodd"></path>
        </svg></a><a class="h-social-icons--icon" data-click-id="hgr-footer-social_icons-twitter"
        href="https://x.com/niagahoster" aria-label="SvgoTwitter24" rel="noopener noreferrer nofollow"
        target="_blank" data-v-2330a837="" data-gtm-vis-first-on-screen7887523_1293="259178"
        data-gtm-vis-total-visible-time7887523_1293="3000" data-gtm-vis-has-fired7887523_1293="1"><svg
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 25" class="h-svgo-icon"
            style="fill:var(--primary--800);color:var(--primary--800);" data-v-2330a837="" data-v-03dae1ca="">
            <path fill="currentColor" d="M16.21 17.726h-1.123l-7.33-9.627h1.205l7.248 9.627Z"></path>
            <path fill="currentColor" fill-rule="evenodd"
                d="M7.498 2.444a6 6 0 0 0-6 6v9a6 6 0 0 0 6 6h9a6 6 0 0 0 6-6v-9a6 6 0 0 0-6-6h-9Zm10.326 4.5h-2.026l-3.34 3.834-2.886-3.834H5.39l4.995 6.563-4.734 5.437h2.027l3.655-4.195 3.193 4.195h4.078l-5.207-6.917 4.426-5.083Z"
                clip-rule="evenodd"></path>
        </svg></a><a class="h-social-icons--icon" data-click-id="hgr-footer-social_icons-youtube"
        href="https://www.youtube.com/channel/UCEj5t40X7DDIptSCsm4cryw" aria-label="SvgoYoutube24"
        rel="noopener noreferrer nofollow" target="_blank" data-v-2330a837=""
        data-gtm-vis-first-on-screen7887523_1293="259179" data-gtm-vis-total-visible-time7887523_1293="3000"
        data-gtm-vis-has-fired7887523_1293="1"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 25" class="h-svgo-icon" style="fill:var(--primary--800);color:var(--primary--800);"
            data-v-2330a837="" data-v-03dae1ca="">
            <path fill="currentColor" d="m14.33 12.174-3.783-2.228v4.447l3.782-2.22Z"></path>
            <path fill="currentColor" fill-rule="evenodd"
                d="M7.498 1.67a6 6 0 0 0-6 6v9a6 6 0 0 0 6 6h9a6 6 0 0 0 6-6v-9a6 6 0 0 0-6-6h-9Zm-1.19 5.608c1.14-.303 5.685-.303 5.685-.303s4.555 0 5.696.321c.62.165 1.114.67 1.275 1.302.315 1.164.306 3.585.306 3.585s0 2.412-.306 3.567a1.827 1.827 0 0 1-1.275 1.31c-1.141.303-5.696.303-5.696.303s-4.536 0-5.686-.311a1.87 1.87 0 0 1-1.284-1.311c-.297-1.146-.297-3.567-.297-3.567s0-2.412.297-3.576a1.9 1.9 0 0 1 1.284-1.32Z"
                clip-rule="evenodd"></path>
        </svg></a><a class="h-social-icons--icon" data-click-id="hgr-footer-social_icons-tiktok"
        href="https://www.tiktok.com/@niagahoster" aria-label="SvgoTiktok24" rel="noopener noreferrer nofollow"
        target="_blank" data-v-2330a837="" data-gtm-vis-first-on-screen7887523_1293="259180"
        data-gtm-vis-total-visible-time7887523_1293="3000" data-gtm-vis-has-fired7887523_1293="1"><svg
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 25" class="h-svgo-icon"
            style="fill:var(--primary--800);color:var(--primary--800);" data-v-2330a837="" data-v-03dae1ca="">
            <path fill="currentColor" fill-rule="evenodd"
                d="M7.498 2.283a6 6 0 0 0-6 6v9a6 6 0 0 0 6 6h9a6 6 0 0 0 6-6v-9a6 6 0 0 0-6-6h-9Zm7.12 3.818c.225 1.895 1.283 3.029 3.123 3.15v2.133c-1.07.102-2.007-.244-3.097-.903v3.99c0 5.07-5.535 6.659-7.76 3.022-1.43-2.338-.558-6.442 4.034-6.609v2.254a7.789 7.789 0 0 0-1.065.257c-1.02.345-1.597.992-1.437 2.125.308 2.184 4.323 2.824 3.983-1.44V6.094h2.213l.006.007Z"
                clip-rule="evenodd"></path>
        </svg></a><!--]-->
</div> --}}

{{-- 
   <div class="card lg:card-side bg-base-100 shadow-sm min-h-[400px] max-w-[1128px] mx-auto ">
                        <div class="card-body p-0 bg-neutral grid grid-cols-1 lg:grid-cols-2 gap-4 rounded-2xl">
                            <div
                                class="rounded-tl-2xl h-[400px] w-[300px] absolute z-0 top-0 bg-gradient-to-br from-indigo-500/70  to-neutral to-40%">
                            </div>
                            <div class="z-10 p-10 grid grid-cols-1 gap-4 content-center text-primary-content">
                                <div class="badge badge-primary badge-xl rounded-full py-1 px-3 text-sm font-bold">
                                    Hostinger Horizons</div>
                                <h2 class="card-title text-primary-content text-4xl">Turn your idea into reality</h2>
                                <p class="text-[16px] text-start">Build and lunch any web apps, tools, and sofftware in
                                    minutes - without writing anycode.</p>
                                <a href="#" class="text-primary flex flex-row gap-1">Start now <svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>

                            </div>
                            <figure>
                                <img src="https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/1d4b57f9-a48d-43cb-5242-6c3aafe88b00/public"
                                    alt="Album" />
                            </figure>
                        </div>
                    </div> --}}
