@if(session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 5000)"
         x-show="show"
         class="fixed bottom-4 right-4 text-gray-900 bg-white rounded-lg border border-gray-200 shadow-md transition ease-in-out duration-200 hover:border-gray-300 hover:shadow-lg focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium text-sm px-5 py-2 text-center"
    >
        <p>{{ session('success') }}</p>
    </div>
@elseif(session()->has('error'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 5000)"
         x-show="show"
         class="fixed top-4 right-4 text-gray-900 bg-white rounded-lg border border-gray-200 shadow-md transition ease-in-out duration-200 hover:border-gray-300 hover:shadow-lg focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium text-sm px-5 py-2 text-center"
    >
        <p>{{ session('error') }}</p>
    </div>
@endif
