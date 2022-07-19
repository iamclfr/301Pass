<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sites Web') }}
        </h2>
    </x-slot>

    <x-flash />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-end md:justify-between items-center flex-wrap-reverse">
                        <form class="w-full md:w-4/12">
                            @csrf
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Rechercher</label>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </div>
                                <input type="search" id="default-search" class="block p-4 pr-24 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-200 focus:ring-gray-300 focus:border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Rechercher un Site Web" required>
                                <button type="submit" class="absolute right-2.5 bottom-2.5 text-gray-900 bg-white rounded-lg border border-gray-200 shadow-md transition ease-in-out duration-200 hover:border-gray-300 hover:shadow-lg focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium text-sm px-5 py-2 text-center">Rechercher</button>
                            </div>
                        </form>
                        <div x-data="{ openModal: false }" class="mb-4 md:mb-0">
                            <button id="btn-card-creator"  @click="openModal = true" class="text-gray-900 bg-white rounded-lg border border-gray-200 shadow-md transition ease-in-out duration-200 hover:border-gray-300 hover:shadow-lg focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium text-sm px-5 py-2.5 text-center inline-flex items-center">
                                <svg class="w-5 h-5 mr-2 -ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"></path>
                                </svg>
                                Créer une Carte
                            </button>

                            {{-- MODAL : WebSites CREATOR --}}
                            <x-modal-create-websites />
                        </div>

                    </div>
                    {{--
                        WEBSITES
                    --}}
                    <div class="flex justify-center lg:justify-between items-start flex-wrap mt-8">
                        @if($websites->count())
                            <x-websites-card :websites="$websites"/>
                        @else
                            <p class="w-full text-center">Aucune carte pour le moment.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
