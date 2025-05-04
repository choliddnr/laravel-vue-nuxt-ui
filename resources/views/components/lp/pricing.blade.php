    <!-- Pricing Section -->
    <section class="py-16 bg-base-100  text-base-content">
        <div class="container mx-auto px-4 text-center max-w-[1150px]">
            <h1 class="text-4xl md:text-4xl font-bold leading-tight mb-4 ">
                Pilih Paket Web Hosting Terbaik
            </h1>
            <p class="text-sm md:text-[16px] mb-6">
                Coba paket web hosting sekarang. Tidak puas? Ada jaminan 30 hari uang kembali.
            </p>
        </div>


        <div class="relative">
            <div id="crs" class="carousel carousel-center w-full space-x-4 flex justify-start xl:justify-center">
                <div class="ml-5"></div>
                <x-lp.pricing-card />
                <x-lp.pricing-card :highlight="true" message="PALING LARIS!" />
                <x-lp.pricing-card />
                <x-lp.pricing-card />
                <div class="mr-5"></div>
            </div>
            <div
                class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between z-50 2xl:hidden">
                <button id="prevButton" class="btn btn-circle bg-base-100 text-secondary">❮</button>
                <button id="nextButton" class="btn btn-circle bg-base-100 text-secondary">❯</button>
            </div>

        </div>

        <div class="mt-6">
            <a href="#"
                class="btn btn-primary text-primary btn-ghost hover:bg-transparent hover:text-primary hover:border-0 border-0 hover:shadow-none btn-block text-sm font-bold">Ketentuan
                Pembayaran</a>
        </div>

    </section>
