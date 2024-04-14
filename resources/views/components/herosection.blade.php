<section class="relative w-full">
    <div class="absolute top-0 inset-x-0 h-64 flex items-start">
        <div
            class="h-24 w-2/3 bg-gradient-to-br from-emerald-500 opacity-20 blur-2xl dark:from-[#570cac] dark:invisible dark:opacity-40">
        </div>
        <div
            class="h-20 w-3/5 bg-gradient-to-r from-[#8cd66a] opacity-40 blur-2xl dark:from-[#670ccf] dark:opacity-40">
        </div>
    </div>
    <div class="mx-auto lg:max-w-6xl w-full px-5 sm:px-10 md:px-12 lg:px-5 relative">
        <div aria-hidden="true" class="absolute inset-y-0 w-44 left-0 hidden dark:flex">
            <div
                class="h-full md:h-1/2 lg:h-full w-full bg-gradient-to-tr opacity-40 dark:blur-2xl dark:from-[#570cac] dark:opacity-20">
            </div>
        </div>
        <div
            class="grid lg:grid-cols-2 gap-10 xl:gap-10 relative pt-24 lg:max-w-none max-w-2xl md:max-w-3xl mx-auto">
            <div class="lg:py-6">
                <div class="text-center lg:text-left">
                    <span class="px-4 py-1 bg-gray-600 text-sm text-white rounded-full">
                        {!! __('roostercrows.hero_section.action') !!}
                    </span>
                    <h1 class="text-gray-800 tracking-tighter pt-4 font-bold text-4xl md:text-5xl lg:text-6xl">
                        {!! __('roostercrows.hero_section.title') !!}
                    </h1>
                </div>

                <p class="text-gray-600 mt-8 text-center text-sm lg:text-left mx-auto max-w-xl">
                    {!! __('roostercrows.hero_section.paragraphs') !!}
                </p>

                <div class="flex items-center gap-4 mt-8 text-sm flex-col sm:flex-row sm:w-max sm:mx-auto lg:mx-0">
                    <a href="{{ route('contact') }}"
                       class="px-7 relative text-white h-10 flex w-full sm:w-max justify-center items-center before:bg-crimson-500 before:absolute before:inset-0 before:rounded-full before:transition-transform before:ease-linear hover:before:scale-105 active:before:scale-95">
                        <span class="relative text-white">
                            {!! __('roostercrows.hero_section.contact') !!}
                        </span>
                    </a>

                    <a href="#"
                       class="px-7 relative text-crimson-500 text-sm h-10 flex w-full sm:w-max justify-center items-center before:bg-crimson-500/5 dark:before:bg-crimson-500/10 before:absolute before:inset-0 before:rounded-full before:transition-transform before:ease-linear hover:before:scale-105 active:before:scale-95">
                        <span class="relative text-crimson-500 flex items-center gap-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                 fill="currentColor" class="w-3 h-3">
                                <path fill-rule="evenodd"
                                      d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            {!! __('roostercrows.hero_section.plus') !!}
                        </span>
                    </a>
                </div>
            </div>
            <div class="lg:h-full hidden md:flex">
                <div
                    class="flex w-full h-96 min-h-[24rem] lg:min-h-[none] lg:w-full lg:h-full items-center relative">
                    <div
                        class="absolute z-0 top-1/2 -translate-y-1/2 w-5/6 right-0 h-[calc(80%+20px)] bg-gradient-to-tr opacity-25 from-emerald-500 to-pink-300 dark:from-[#570cac] dark:to-emerald-500 blur-2xl">
                    </div>
                    <div
                        class="absolute w-3/5 h-full z-10 p-1 -translate-y-1/2 top-1/2 right-3 rounded-3xl bg-whitee dark:bg-gray-950  shadow-lg shadow-gray-100 dark:shadow-transparent  border border-gray-200 dark:border-gray-800">
                        <img src="{{ asset('assets/images/image2.webp') }}" alt="In studio" width="500" height="auto"
                             loading="lazy"
                             class="w-full h-full rounded-2xl object-cover">
                    </div>
                    <div
                        class="absolute -translate-y-1/2 top-1/2 h-[calc(80%-2rem)] w-[calc(40%-20px)] p-1 rounded-3xl bg-white dark:bg-gray-950  shadow-lg shadow-gray-100 dark:shadow-transparent  border border-gray-200 dark:border-gray-800">
                        <img src="{{ asset('assets/images/image1.webp') }}" alt="Happy in studio" width="200"
                             height="auto"
                             loading="lazy" class="w-full h-full rounded-2xl object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
