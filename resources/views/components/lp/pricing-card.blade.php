@props(['highlight' => false, 'message' => ''])
<div class="carousel-item">
    <div @class([
        'card bg-base-200 shadow-sm w-[300px]',
        'mt-10' => !$highlight,
        'border' => !$highlight,
        'border-2' => $highlight,
        'border-primary' => $highlight,
        'border-base-300' => !$highlight,
    ])>
        @if ($highlight && !empty($message))
            <div class="h-10 px-6 py-2 card-title bg-primary text-primary-content ">
                <p class="mx-auto text-sm">{{ $message }}</p>
            </div>
        @endif
        <div class="card-body  py-[47px] px-[31px] text-start">
            <h2 class="md:text-xl text-lg font-semibold mb-2">Single</h2>

            <p class="mb-12">Pilihan terbaik untuk pemula</p>
            <div class="flex justify-start gap-1">
                <p class="line-through flex-none mt-1.5">Rp. 89.900</p>
                <div class="badge bg-base-300 text-base-content bagde-lg py-1 px-3 font-bold rounded-full h-8">
                    DISKON 86%
                </div>
            </div>
            <p class="text-xl font-semibold text-base-content my-2">Rp <span class="text-5xl">12.900</span>/bln
            </p>

            <div class="mt-6">
                <button class="btn btn-outline btn-primary hover:bg-base-300 hover:text-primary btn-block">Pilih
                    Paket</button>
            </div>
            <p class="text-xs text-neutral">Perpanjangan Rp29.900/bln untuk 4 tahun. Bisa dibatalkan kapan
                saja.
            </p>
            <div class="divider"></div>

            <div class="flex flex-col gap-4">
                <x-lp.pricing-features label="*1* website" />

                <x-lp.pricing-features label="Managed Hosting untuk WordPress"
                    tooltip="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum illum
                                repellat ut
                                deleniti accusamus minus itaque obcaecati aliquam delectus modi, doloremque,
                                eaque culpa dolorum recusandae quaerat esse, voluptatem porro corrupti.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda
                                laudantium
                                est totam quae inventore soluta adipisci blanditiis harum labore, illum
                                facilis
                                eaque quia esse, facere, doloribus dolore. Fugiat, nostrum iusto?" />


                <x-lp.pricing-features label="*10 GB* SSD Storage" />

                <x-lp.pricing-features label="Website Builder NiagaHoster" />

                <x-lp.pricing-features label="Gratis domain (senilai Rp149.900)" :disabled="true"
                    tooltip="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum illum
                                repellat ut
                                deleniti accusamus minus itaque obcaecati aliquam delectus modi, doloremque,
                                eaque culpa dolorum recusandae quaerat esse, voluptatem porro corrupti.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda
                                laudantium
                                est totam quae inventore soluta adipisci blanditiis harum labore, illum
                                facilis
                                eaque quia esse, facere, doloribus dolore. Fugiat, nostrum iusto?" />

                <x-lp.pricing-features label="*Gratis* migrasi website otomatis"
                    tooltip="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum illum
                                repellat ut
                                deleniti accusamus minus itaque obcaecati aliquam delectus modi, doloremque,
                                eaque culpa dolorum recusandae quaerat esse, voluptatem porro corrupti.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda
                                laudantium
                                est totam quae inventore soluta adipisci blanditiis harum labore, illum
                                facilis
                                eaque quia esse, facere, doloribus dolore. Fugiat, nostrum iusto?" />

                <x-lp.pricing-features label="Gratis SSL *unlimited*"
                    tooltip="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum illum
                                repellat ut
                                deleniti accusamus minus itaque obcaecati aliquam delectus modi, doloremque,
                                eaque culpa dolorum recusandae quaerat esse, voluptatem porro corrupti.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda
                                laudantium
                                est totam quae inventore soluta adipisci blanditiis harum labore, illum
                                facilis
                                eaque quia esse, facere, doloribus dolore. Fugiat, nostrum iusto?" />


                <x-lp.pricing-features label="Backup *mingguan*"
                    tooltip="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum illum
                                repellat ut
                                deleniti accusamus minus itaque obcaecati aliquam delectus modi, doloremque,
                                eaque culpa dolorum recusandae quaerat esse, voluptatem porro corrupti.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda
                                laudantium
                                est totam quae inventore soluta adipisci blanditiis harum labore, illum
                                facilis
                                eaque quia esse, facere, doloribus dolore. Fugiat, nostrum iusto?" />
            </div>

            <div class="expandedfeatures hidden">
                <div class="flex flex-col gap-4 mt-6">
                    <h2 class="text-lg font-bold mb-6">Managed Hosting untuk WordPres</h2>


                    <x-lp.pricing-features label="*1* website" />

                    <x-lp.pricing-features label="Managed Hosting untuk WordPress"
                        tooltip="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum illum
                                repellat ut
                                deleniti accusamus minus itaque obcaecati aliquam delectus modi, doloremque,
                                eaque culpa dolorum recusandae quaerat esse, voluptatem porro corrupti.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda
                                laudantium
                                est totam quae inventore soluta adipisci blanditiis harum labore, illum
                                facilis
                                eaque quia esse, facere, doloribus dolore. Fugiat, nostrum iusto?" />


                    <x-lp.pricing-features label="*10 GB* SSD Storage" />

                    <x-lp.pricing-features label="Website Builder NiagaHoster" />

                    <x-lp.pricing-features label="Gratis domain (senilai Rp149.900)" :disabled="true"
                        tooltip="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum illum
                                repellat ut
                                deleniti accusamus minus itaque obcaecati aliquam delectus modi, doloremque,
                                eaque culpa dolorum recusandae quaerat esse, voluptatem porro corrupti.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda
                                laudantium
                                est totam quae inventore soluta adipisci blanditiis harum labore, illum
                                facilis
                                eaque quia esse, facere, doloribus dolore. Fugiat, nostrum iusto?" />

                    <x-lp.pricing-features label="*Gratis* migrasi website otomatis"
                        tooltip="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum illum
                                repellat ut
                                deleniti accusamus minus itaque obcaecati aliquam delectus modi, doloremque,
                                eaque culpa dolorum recusandae quaerat esse, voluptatem porro corrupti.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda
                                laudantium
                                est totam quae inventore soluta adipisci blanditiis harum labore, illum
                                facilis
                                eaque quia esse, facere, doloribus dolore. Fugiat, nostrum iusto?" />

                    <x-lp.pricing-features label="Gratis SSL *unlimited*"
                        tooltip="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum illum
                                repellat ut
                                deleniti accusamus minus itaque obcaecati aliquam delectus modi, doloremque,
                                eaque culpa dolorum recusandae quaerat esse, voluptatem porro corrupti.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda
                                laudantium
                                est totam quae inventore soluta adipisci blanditiis harum labore, illum
                                facilis
                                eaque quia esse, facere, doloribus dolore. Fugiat, nostrum iusto?" />


                    <x-lp.pricing-features label="Backup *mingguan*"
                        tooltip="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum illum
                                repellat ut
                                deleniti accusamus minus itaque obcaecati aliquam delectus modi, doloremque,
                                eaque culpa dolorum recusandae quaerat esse, voluptatem porro corrupti.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda
                                laudantium
                                est totam quae inventore soluta adipisci blanditiis harum labore, illum
                                facilis
                                eaque quia esse, facere, doloribus dolore. Fugiat, nostrum iusto?" />

                </div>

            </div>

            <div class="mt-6">
                <button onclick="showMoreFeatures()"
                    class="btn btn-primary show-more-features text-primary btn-ghost hover:bg-transparent hover:text-primary hover:border-0 border-0 hover:shadow-none btn-block text-[16px] font-bold">Lihat
                    FItur Lengkap
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <button onclick="hideMoreFeatures()"
                    class="hidden btn btn-primary hide-more-features text-primary btn-ghost hover:bg-transparent hover:text-primary hover:border-0 border-0 hover:shadow-none btn-block text-[16px] font-bold">Lihat
                    Lebih Sedikit
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
