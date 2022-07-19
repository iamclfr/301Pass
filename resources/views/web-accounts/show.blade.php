<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $website->siteName }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{--
                        WEBSITES
                    --}}
                    <div class="flex justify-center items-start flex-wrap mt-8">
                        <div id="website-{{ $website->id }}" class="relative w-96 bg-white rounded-lg border border-gray-200 shadow-md transition ease-in-out duration-200 hover:border-gray-300 hover:shadow-lg dark:bg-gray-800 dark:border-gray-700">
                            <span class="absolute top-0 right-0 bg-gray-50 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                                <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                                {{ ($website->updated_at->diffForHumans()) }}
                            </span>
                            <div class="flex flex-col items-center p-3">
                                <img class="mb-3 p-1 w-24 h-24 rounded-full shadow-lg" src="{{ asset('storage/' . $website->siteImage) }}" alt="{{ $website->siteName }}"/>
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $website->siteName }}</h5>
                                <a href="{{ $website->siteUrl }}" target="_blank" class="text-sm text-gray-500 dark:text-gray-400">{{ Str::limit($website->siteUrl, 25, '...') }}</a>
                                <p class="text-sm text-center text-gray-900 w-full mt-2 dark:text-gray-400">{{ $website->siteComment }}</p>
                                <div class="w-full flex justify-center items-center flex-wrap">
                                    <p class="text-base text-center text-gray-900 w-full mt-2 dark:text-gray-400">Email : <span class="select-all  font-bold">{{ $website->siteEmail }}</span></p>
                                    <p class="text-base text-center text-gray-900 w-full mt-2 dark:text-gray-400">Mot de Passe : <span class="select-all blur-sm hover:blur-0 transition duration-200 ease-in-out font-bold">{{ $webSitePassword }}</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full"></div>

                        <div class="w-96 flex justify-between items-center mt-4">
                            <a href="/web-sites" class="text-gray-900 bg-white rounded-lg border border-gray-200 shadow-md transition ease-in-out duration-200 hover:border-gray-300 hover:shadow-lg focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium text-sm px-5 py-2.5 text-center inline-flex items-center">
                                <svg class="w-5 h-5 mr-2 -ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                Retour
                            </a>
                            <a href="#" class="text-gray-900 bg-white rounded-lg border border-gray-200 shadow-md transition ease-in-out duration-200 hover:border-gray-300 hover:shadow-lg focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium text-sm px-5 py-2.5 text-center inline-flex items-center">
                                <svg class="w-5 h-5 mr-2 -ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                </svg>
                                Modifier
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
