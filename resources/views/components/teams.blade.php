<section class="py-20  scroll-mt-24" aria-labelledby="teams" aria-description="Page de notre equipe">
    <div class="container mx-auto px-6 md:px-12 xl:px-32">
        <div class="mb-16">
            <h2 id="teams" class="mb-4 text-center text-4xl font-bold text-gray-800 md:text-5xl lg:text-7xl">
                {!! __('roostercrows.teams.title') !!}
            </h2>
            <p class="text-gray-700 text-center leading-8 lg:mx-auto lg:w-8/12">
                {!! __('roostercrows.teams.sub_title') !!}
            </p>
        </div>
        <div class="grid items-center gap-12 md:grid-cols-3">
            <div class="space-y-4 text-center">
                <img
                    class="mx-auto size-56 rounded-xl object-cover md:h-40 md:w-40 lg:size-56"
                    src="{{ asset('assets/images/roosters/tresor.webp') }}"
                    alt="Tresor Kasenda"
                    aria-hidden="true"
                    role="presentation"
                    loading="lazy"
                    width="640"
                    height="805"
                />
                <div class="space-y-2">
                    <h4 class="text-2xl text-gray-500 font-semibold py-2">Tresor KASENDA</h4>
                    <span class="block text-sm text-gray-500">{!! __('roostercrows.teams.contents.title1') !!}</span>
                </div>
            </div>
            <div class="space-y-4 text-center">
                <img
                    class="mx-auto h-64 w-64 rounded-xl object-cover md:h-64 md:w-48 lg:h-80 lg:w-64"
                    src="{{ asset('assets/images/ceo.webp') }}"
                    alt="Deogracias RAMAZANI"
                    aria-hidden="true"
                    role="presentation"
                    loading="lazy"
                    width="1000"
                    height="667"
                />
                <div class="space-y-2">
                    <h4 class="text-2xl text-gray-500 font-semibold py-2">Deogratias RAMAZANI</h4>
                    <span class="block text-sm text-gray-500">{!! __('roostercrows.teams.contents.title2') !!}</span>
                </div>
            </div>
            <div class="space-y-4 text-center">
                <img
                    class="mx-auto size-56 rounded-xl object-cover md:h-40 md:w-40 lg:size-56"
                    src="{{ asset('assets/images/roosters/tresor.webp') }}"
                    alt="Dieuo KASAMBA"
                    aria-hidden="true"
                    role="presentation"
                    loading="lazy"
                    width="1000"
                    height="667"
                />
                <div class="space-y-2">
                    <h4 class="text-2xl text-gray-500 font-semibold py-2">Dieuo KASAMBA</h4>
                    <span class="block text-sm text-gray-500">{!! __('roostercrows.teams.contents.title3') !!}</span>
                </div>
            </div>
        </div>
    </div>
</section>
