@props(['websites'])

@foreach($websites as $website)
    <a href="/web-sites/{{ $website->siteSlug }}" id="website-{{ $website->id }}" class="relative w-60 bg-white rounded-lg border border-gray-200 shadow-md mb-8 transition ease-in-out duration-200 hover:border-gray-300 hover:shadow-lg dark:bg-gray-800 dark:border-gray-700">
       <span class="absolute top-0 left-0 bg-gray-50 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
            <svg class="mr-1 w-3 h-3" fill="currentColor"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
            </svg>
            {{ ($website->siteType) }}
        </span>
        <span class="absolute top-0 right-0 bg-gray-50 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
            </svg>
            {{ ($website->updated_at->diffForHumans()) }}
        </span>
        <div class="flex flex-col items-center p-3 mt-4">
            <img class="mb-3 p-1 w-24 h-24 rounded-full shadow-lg" src="{{ asset('storage/' . $website->siteImage) }}" alt="{{ $website->siteName }}"/>
            <h5 class="mb-1 text-xl text-center font-medium text-gray-900 dark:text-white">{{ Str::limit($website->siteName, 20, '...') }}</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ Str::limit($website->siteUrl, 25, '...') }}</span>
        </div>
    </a>
@endforeach
