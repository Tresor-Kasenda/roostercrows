<section class="relative py-4 max-h-screen" id="home">
    <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-slate-400 bg-opacity-70 backdrop-blur-sm"></div>
    <div class="relative container m-auto">
        <div class="mx-auto lg:max-w-6xl w-full px-5 sm:px-10 md:px-12 lg:px-5 py-[6%]">
            <div class="text-center flex flex-col items-center space-y-10">
                <h1 class="text-5xl text-white font-bold md:text-5xl lg:text-6xl/tight xl:text-7xl/tight max-w-4xl capitalize">
                    We inspire Growth for your business brand
                </h1>
                <p class="text-2xl text-white font-semibold leading-relaxed text-center max-w-2xl">
                    Faciliter vos affaires, vos échanges
                    commerciaux et vos commerce international en RDC
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ route('contact') }}"
                       class="relative px-8 h-12 text-sm rounded-xl flex items-center gap-x-3 text-white before:absolute before:inset-0  before:bg-pink-700 after:bg-pink-600 before:text-white before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                        <span class="relative w-max text-white"> Prendre rendez-vous </span>
                    </a>
                    <a href="#"
                       class="font-semibold bg-gray-500 px-8 py-3 rounded-xl text-sm text-white leading-6">
                        Learn more <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-12  grid grid-cols-4 sm:grid-cols-2 md:grid-cols-4 pb-3">
            <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
                <img src="{{ asset('assets/logos/kamoto.png') }}" class="h-12 w-auto mx-auto" loading="lazy"
                     alt="client logo">
            </div>
            <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
                <img src="{{ asset('assets/logos/mkk.png') }}" class="h-12 w-auto mx-auto" loading="lazy"
                     alt="client logo">
            </div>
            <div class="p-4 flex grayscale transition duration-200 hover:grayscale-0">
                <img src="{{ asset('assets/logos/mumi.png') }}" class="h-9 w-auto m-auto" loading="lazy"
                     alt="client logo">
            </div>
            <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
                <img src="{{ asset('assets/logos/rawbank.png') }}" class="h-12 w-auto mx-auto" loading="lazy"
                     alt="client logo">
            </div>
        </div>
    </div>
</section>
