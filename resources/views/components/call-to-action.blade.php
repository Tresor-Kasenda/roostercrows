<section class="sm:mt-6 lg:mt-8  scroll-mt-24 mt-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div
        class="my-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28 flex gap-3 lg:flex-justify lg:flex flex-col lg:flex-row">
        <div class="sm:text-center lg:text-left">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-800 sm:text-5xl md:text-6xl">
                <span class="block xl:inline">Pour prendre contact</span>
                <span class="block text-crimson-600 xl:inline">avec notre equipes</span>
            </h1>
            <p
                class="mt-3 text-gray-500 sm:mt-5 text-sm sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                Nous sommes une entreprise leader dans notre domaine, reconnue pour notre expertise, notre innovation et
                notre engagement à la satisfaction de nos clients.
            </p>

            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                <div class="rounded-md shadow">
                    <a href="{{ route('contact') }}"
                       class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-crimson-800 hover:bg-crimson-600 md:py-4 md:text-lg md:px-10">
                        Commencez
                    </a>
                </div>
                <div class="mt-3 sm:mt-0 sm:ml-3">
                    <a href="#"
                       class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-crimson-800 bg-crimson-100 hover:bg-crimson-200 md:py-4 md:text-lg md:px-10">
                        En savoir plus
                    </a>
                </div>
            </div>
        </div>

        <div class="lg:inset-y-0 lg:right-0 lg:w-1/2 my-4">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full rounded"
                 src="{{ asset('assets/images/image4.webp') }}"
                 alt="">
        </div>
    </div>
</section>
