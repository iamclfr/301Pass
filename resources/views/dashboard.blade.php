<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{--
                        BREADCRUMB
                    --}}
                    <nav class="flex py-3 px-5 text-gray-700 bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-3">
                            <li class="inline-flex items-center">
                                <a href="/dashboard" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                    <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                                    {{ __('Dashboard') }}
                                </a>
                            </li>
                        </ol>
                    </nav>
                    {{--
                        LAST WEBSITES
                    --}}
                    <h2 class="mt-8 text-xl font-medium text-gray-900 dark:text-white">Les Derniers Sites Web</h2>
                    <div class="flex justify-center lg:justify-between items-start flex-wrap mt-2">
                        @php($i = 0)
                        @while($i < 4)
                            <a href="#" class="relative w-60 bg-white rounded-lg border border-gray-200 shadow-md mb-8 transition ease-in-out duration-200 hover:border-gray-300 hover:shadow-lg dark:bg-gray-800 dark:border-gray-700">
                                <span class="absolute top-0 right-0 bg-green-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                                  <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                                  {{ $i + 10 }} mins
                                </span>
                                <div class="flex flex-col items-center p-3">
                                    <img class="mb-3 p-2 w-24 h-24 rounded-full shadow-lg" src="https://cdn-icons-png.flaticon.com/512/174/174881.png" alt="Site Web"/>
                                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Mon Site Wordpress</h5>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">https://mon-site-wordpress.com</span>
                                </div>
                            </a>
                            @php($i++)
                        @endwhile
                    </div>
                    {{--
                        LAST WEBACCOUNTS
                    --}}
                    <h2 class="text-xl font-medium text-gray-900 dark:text-white">Les Derniers Comptes Web</h2>
                    <div class="flex justify-center lg:justify-between items-start flex-wrap mt-2">
                        @php($i = 0)
                        @while($i < 4)
                            <a href="#" class="relative w-60 bg-white rounded-lg border border-gray-200 shadow-md mb-8 transition ease-in-out duration-200 hover:border-gray-300 hover:shadow-lg dark:bg-gray-800 dark:border-gray-700">
                                <span class="absolute top-0 right-0 bg-green-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                                    <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                                    {{ $i + 20 }} mins
                                </span>
                                <div class="flex flex-col items-center p-3">
                                    <img class="mb-3 p-2 w-24 h-24 rounded-full shadow-lg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2048px-Google_%22G%22_Logo.svg.png" alt="Bonnie image"/>
                                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Google</h5>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">web@gmail.com</span>
                                </div>
                            </a>
                            @php($i++)
                        @endwhile
                    </div>
                    {{--
                        STATISTICS
                    --}}
                    <h2 class="text-xl font-medium text-gray-900 dark:text-white">Les Statistiques</h2>
                    <div class="flex justify-center lg:justify-between items-start flex-wrap mt-2">
                        <a href="#" class="relative w-60  lg:w-3/12 bg-white rounded-lg border border-gray-200 shadow-md mb-8 transition ease-in-out duration-200 hover:border-gray-300 hover:shadow-lg dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex flex-col items-center p-3">
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">24</h5>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Sites Web</span>
                            </div>
                        </a>
                        <a href="#" class="relative w-60  lg:w-3/12 bg-white rounded-lg border border-gray-200 shadow-md mb-8 transition ease-in-out duration-200 hover:border-gray-300 hover:shadow-lg dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex flex-col items-center p-3">
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">32</h5>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Comptes Web</span>
                            </div>
                        </a>
                        <a href="#" class="relative w-60  lg:w-3/12 bg-white rounded-lg border border-gray-200 shadow-md mb-8 transition ease-in-out duration-200 hover:border-gray-300 hover:shadow-lg dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex flex-col items-center p-3">
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">14</h5>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Autres</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
