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


<body class="bg-base-100 text-gray-900" data-theme="light-custom">
    <!-- Navbar -->
    <x-lp.navbar />

    <!-- Hero Section -->
    {{-- <x-lp.hero /> --}}

    <x-lp.pricing />


    {{-- <x-lp.mulaibisnisonlineandadisini /> --}}

    <!-- Features Section -->



    {{-- <x-lp.migrasiwebsitepraktis /> --}}


    <!-- Testimonials Section -->
    {{-- <x-lp.testimonials /> --}}

    {{-- <x-lp.dashboardmudahdigunakan /> --}}


    {{-- <x-lp.cepatstabilefisien /> --}}


    {{-- "https://imagedelivery.net/LqiWLm-3MGbYHtFuUbcBtA/25e6e2a6-e1e6-424a-9b81-32c82da35e00/public --}}


    {{-- <x-lp.dipercaya /> --}}

    {{-- <x-lp.bantuanteknis /> --}}
    {{-- <x-lp.hemat /> --}}



    <!-- Footer -->
    {{-- <x-lp.footer /> --}}



    <div id="tooltip"
        class="fixed z-50 hidden bg-primary text-primary-content text-sm px-3 py-2 rounded shadow-lg max-w-[250px] whitespace-normal pointer-events-none">
    </div>


    <script>
        const popoverlayanan = document.getElementById('popover-layanan');
        const popoverjelajahi = document.getElementById('popover-jelajahi');
        const popoverbantuan = document.getElementById('popover-bantuan');
        const backdrop = document.getElementById('backdrop');



        function togglePopover(e) {
            const id = e.target.getAttribute('id');
            const selector = 'button[popovertarget=' + id + ']';
            const btn = document.querySelector(selector);
            console.log('e', btn);


            if (e.newState === "open") {
                backdrop.classList.remove('hidden');
                btn.querySelector('.arrow-up').classList.remove('hidden')
                btn.querySelector('.arrow-down').classList.add('hidden')
                btn.classList.add('text-gray-500')
            } else {
                backdrop.classList.add('hidden');
                btn.querySelector('.arrow-up').classList.add('hidden')
                btn.querySelector('.arrow-down').classList.remove('hidden')
                btn.classList.remove('text-gray-500')
            }
        }
        popoverlayanan.addEventListener("beforetoggle", (e) => togglePopover(e));
        popoverjelajahi.addEventListener("beforetoggle", (e) => togglePopover(e));
        popoverbantuan.addEventListener("beforetoggle", (e) => togglePopover(e));


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

        const tooltip = document.getElementById('tooltip');

        document.querySelectorAll('.tooltip-trigger').forEach(el => {
            el.addEventListener('mouseenter', (e) => {
                const tooltipText = el.getAttribute('data-tooltip');
                tooltip.textContent = tooltipText;
                tooltip.classList.remove('hidden');

                const rect = el.getBoundingClientRect();

                // Position tooltip above the button, centered
                tooltip.style.left = `${rect.left + rect.width / 2}px`;
                tooltip.style.top = `${rect.bottom + 8}px`; // 8px space below the trigger
                tooltip.style.transform = 'translateX(-50%)'; // only center horizontally
            });

            el.addEventListener('mouseleave', () => {
                tooltip.classList.add('hidden');
            });
        });
    </script>

</body>

</html>
