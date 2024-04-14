<section class=" mt-10 lg:mt-20 mb-10 lg:mb-20 scroll-mt-24" id="services">
    <div class="container mx-auto max-w-6xl px-4">
        <div class="text-center mx-auto mb-20 space-y-4">
            <h2 class="text-center text-3xl sm:text-5xl lg:text-6xl text-black font-bold">
                {!! __('roostercrows.services.title') !!}
            </h2>

            <p class="text-gray-700 text-lg text-center dark:text-gray-400">
                {!! __('roostercrows.services.sub_title') !!}
            </p>
        </div>


        <div class="relative bg-gray-200/10 p-4 rounded-xl border shadow-lg">
            <div class="grid relative grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 h-[28rem] md:h-[19rem]">
                <div
                    class="bg-slate-50/10 backdrop-blur-sm cursor-pointer p-6 ease-in-out rounded-tl-xl transition duration-200 border border-crimson-300/50 shadow-sm text-center">
                    <svg class="mx-auto mb-4 h-16 w-16 text-crimson-700/70" xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>

                    <div class="flex items-center justify-center mb-2">
                        <h3 class="text-xl font-bold mr-2">{!! __('roostercrows.services.contents.first.title') !!}</h3>
                    </div>

                    <p class=" text-base text-slate-600 mb-4 mt-10">
                        {!! __('roostercrows.services.contents.first.description') !!}
                    </p>
                </div>
                <div
                    class="bg-slate-50/10 backdrop-blur-sm  cursor-pointer p-6 ease-in-out rounded-tr-xl transition duration-200 border border-crimson-300/50 shadow-sm text-center">
                    <svg class="mx-auto mb-4 h-16 w-16 text-crimson-700/70" xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>

                    <div class="flex items-center justify-center mb-2">
                        <h3 class="text-xl font-bold mr-2">{!! __('roostercrows.services.contents.second.title') !!}</h3>
                    </div>

                    <p class="text-base text-slate-600 mb-4 mt-10">
                        {!! __('roostercrows.services.contents.second.description') !!}
                    </p>

                </div>
            </div>
            <div class="hidden relative mt-4 md:grid grid-cols-1 md:grid-cols-3 gap-4 h-[39rem] md:h-[22rem]">
                <div
                    class="bg-slate-50/10 backdrop-blur-sm  cursor-pointer p-6 ease-in-out rounded-bl-xl transition duration-200 border border-crimson-300/50 shadow-sm text-center">
                    <svg class="mx-auto mb-4 size-16 text-crimson-700/70" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>

                    <div class="flex items-center justify-center mb-2">
                        <h3 class="text-xl font-bold">{!! __('roostercrows.services.contents.thirds.title') !!}</h3>
                    </div>

                    <p class="text-base text-slate-600 mb-4 mt-10">
                        {!! __('roostercrows.services.contents.thirds.description') !!}
                    </p>

                </div>
                <div
                    class="bg-slate-50/10 backdrop-blur-sm  dark:to-[#04050B] cursor-pointer p-6 ease-in-out transition duration-200 border border-crimson-300/50 shadow-sm text-center">
                    <svg class="mx-auto mb-4 h-16 w-16 text-crimson-700/70" xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>

                    <div class="flex items-center justify-center mb-2">
                        <h3 class="text-xl font-bold">{!! __('roostercrows.services.contents.fourth.title') !!}</h3>
                    </div>

                    <p class="text-base text-slate-600 mb-4 mt-10">
                        {!! __('roostercrows.services.contents.fourth.description') !!}
                    </p>

                </div>
                <div
                    class="bg-slate-50/10 backdrop-blur-sm  cursor-pointer p-6 border border-crimson-300/50 text-center  rounded-br-xl transition duration-200 ease-in-out shadow-sm">
                    <svg class="mx-auto mb-4 size-1/6 text-crimson-700/70" xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <div class="flex items-center justify-center mb-2">
                        <h3 class="text-xl font-bold">{!! __('roostercrows.services.contents.fiveth.title') !!}</h3>
                        <i class="fas fa-check-circle text-green-500"></i>
                    </div>
                    <p class="text-base text-slate-600 mb-4 mt-10">
                        {!! __('roostercrows.services.contents.fiveth.description') !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
