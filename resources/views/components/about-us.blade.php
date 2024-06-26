<section class="py-16  scroll-mt-24" id="about-us" aria-labelledby="about" aria-description="A propos de nous">
    <div class="max-w-6xl mx-auto px-5 sm:px-10 md:px-12 lg:px-5">
        <div class="flex flex-col space-y-16">
            <div class="flex flex-col justify-start text-center space-y-5 py-10">
                <h2 id="about" class="text-4xl sm:text-5xl lg:text-7xl font-bold leading-tight ">
                    {!! __('roostercrows.abouts.title') !!}
                </h2>
            </div>
            <div class="flex flex-col md:flex-row gap-10 lg:gap-14">
                <div class="md:w-[48%] xl:w-[45%] md:py-6 xl:py-12 space-y-8">
                    <div class="space-y-6">
                        <p class="text-gray-600 aria-selected:bg-crimson-200 text-[16.5px] leading-8 tracking-tighter">
                            {!! __('roostercrows.abouts.descriptions') !!}
                        </p>
                    </div>
                </div>
                <div
                    class="flex-1 relative bg-slate-50/10 p-6 rounded-lg shadow-sm border border-gray-600/20 aspect-[4/2.4] overflow-hidden">
                    <img aria-hidden="true" role="presentation" src="{{ asset('assets/images/roosters/5.webp') }}"
                         alt="illustration" width="1800"
                         class="w-full h-full rounded-lg aspect-auto object-cover transition duration-300 ease-out">
                    <div class="absolute -mt-6">
                        <span
                            class="relative mt-1 bg-slate-50/90 border border-base/20 hover:bg-slate-100 transition ease-in duration-300 hover:border-base/40  rounded-lg max-w-lg text-slate-800 text-sm font-normal px-4 py-2 bottom-5 left-5">
                            {!! __('roostercrows.abouts.years') !!}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
