<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Conferances disponible') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div aria-label="group of cards" tabindex="0" class="focus:outline-none py-8 w-full">
                <div class="lg:flex items-center justify-center w-full mt-7">
                    <div tabindex="0" aria-label="card 1" class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white dark:bg-gray-800  p-6 shadow rounded">
                        <div class="flex items-center border-b border-gray-200 dark:border-gray-700  pb-6">
                            <img src="https://cdn.tuk.dev/assets/components/misc/doge-coin.png" alt="coin avatar" class="w-12 h-12 rounded-full" />
                            <div class="flex items-start justify-between w-full">
                                <div class="pl-3 w-full">
                                    <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800 dark:text-white ">Dogecoin nerds</p>
                                    <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500 dark:text-gray-200 ">36 members</p>
                                </div>
                                <div role="img" aria-label="bookmark">
                                   <svg  class="focus:outline-none dark:text-white text-gray-800" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                </div>
                            </div>
                        </div>                        
                        <div class="px-2">
                            <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600 dark:text-gray-200 ">A group of people interested in dogecoin, the currency and a bit of side for the meme and dof that we all know and love. These cases are perfectly simple and easy to distinguish.</p>
                            <div tabindex="0" class="focus:outline-none flex">
                                <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#dogecoin</div>
                                <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#crypto</div>
                            </div>
                        </div>
                    </div>
                    <div aria-label="card 2" tabindex="0" class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white dark:bg-gray-800  p-6 shadow rounded">
                        <div class="flex items-center border-b border-gray-200 dark:border-gray-700  pb-6">
                            <div class="w-12 h-12 bg-gray-300 dark:bg-gray-900  rounded-full flex flex-shrink-0"></div>
                            <div class="flex items-start justify-between w-full">
                                <div class="pl-3 w-full">
                                    <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800 dark:text-white ">Sale And Purchase</p>
                                    <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500 dark:text-gray-200 ">36 members</p>
                                </div>
                                <div aria-label="bookmark" role="img">
                                   <svg  class="focus:outline-none dark:text-white text-gray-800" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="px-2">
                            <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600 dark:text-gray-200 ">A group of people interested in dogecoin, the currency and a bit of side for the meme and dof that we all know and love. These cases are perfectly simple and easy to distinguish.</p>
                            <div tabindex="0" class="focus:outline-none flex">
                                <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#Buy</div>
                                <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#Sell</div>
                                <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#Rent</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
         --}}

        <div tabindex="0" class="focus:outline-none">
            <div class="mx-auto container py-2">
                <div class="flex flex-wrap items-center lg:justify-between justify-center pb-10 mt-16 grid grid-cols-4 gap-4">
                    
                    @foreach($conferances as $conf)
                    
                    <!-- Card -->
                    <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                        <div class="bg-white dark:bg-gray-800">
                            <div class="p-6">
                                <div class="flex items-center">
                                    <h2 tabindex="0" class="focus:outline-none text-lg dark:text-white font-semibold"> {{$conf->title}}
                                        <br>
                                        Domaine :{{$conf->domaine}}
                                    </h2>
                                    <h2 tabindex="0" class="focus:outline-none text-lg dark:text-white font-semibold"></h2>
                                    <!-- <p tabindex="0" class="focus:outline-none text-xs text-gray-600 dark:text-gray-200 pl-5"></p> -->
                                </div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 dark:text-gray-200 mt-2">{{$conf->description}}</p>
                                <div class="flex mt-4">
                                    <div class="pl-2">
                                        <a href="{{ route('article.create', $conf->id) }}" class="focus:outline-none text-xs text-gray-600 dark:text-gray-200 px-2 bg-gray-200 dark:bg-gray-700 py-1m rounded">Submit my article</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>     
                    <!-- Card Ends -->
                    
                    @endforeach
                    
                </div>
            </div>
        </div>
    

            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    

                    <table class="border-collapse border border-slate-400 ...">
                        <thead>
                          <tr>
                            <th class="border border-slate-300 ...">Titre</th>
                            <th class="border border-slate-300 ...">Domaine</th>
                            <th class="border border-slate-300 ...">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($conferances as $conf)
                          <tr>
                            <td class="border border-slate-300 ...">{{$conf->title}}</td>
                            <td class="border border-slate-300 ...">{{$conf->domaine}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>



                </div>
            </div> --}}
        </div>

        
    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->

</x-app-layout>


