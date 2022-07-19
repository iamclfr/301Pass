<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comptes Web') }}
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
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                    <a href="/web-accounts" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Comptes Web</a>
                                </div>
                            </li>
                        </ol>
                    </nav>

                    {{--
                        WEBACCOUNTS
                    --}}
                    <div class="flex justify-center lg:justify-between items-start flex-wrap mt-8">
                        @php($i = 0)
                        @while($i < 20)
                            <a href="#" class="w-60 bg-white rounded-lg border border-gray-200 shadow-md mb-8 transition ease-in-out duration-200 hover:border-gray-300 hover:shadow-lg dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex flex-col items-center p-3">
                                    <img class="mb-3 p-2 w-24 h-24 rounded-full shadow-lg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2048px-Google_%22G%22_Logo.svg.png" alt="Bonnie image"/>
                                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Google</h5>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">web@gmail.com</span>
                                </div>
                            </a>
                            @php($i++)
                        @endwhile
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
