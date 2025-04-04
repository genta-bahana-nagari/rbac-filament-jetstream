<x-guest-layout>
    <section class="relative flex items-center justify-center min-h-screen bg-gradient-to-br from-gray-100 to-gray-300 dark:from-gray-800 dark:to-gray-900">
        <!-- Animated Background Circles -->
        <div class="absolute inset-0 flex items-center justify-center -z-10">
            <div class="w-80 h-80 bg-primary-500 opacity-20 rounded-full blur-3xl animate-ping"></div>
        </div>

        <div class="text-center bg-white dark:bg-gray-800 shadow-lg rounded-lg p-10 max-w-lg">
            <h1 class="text-8xl font-extrabold text-primary-600 dark:text-primary-500">404</h1>
            <p class="text-4xl font-bold text-gray-900 dark:text-white mt-4">Not Found</p>
            <p class="text-lg text-gray-600 dark:text-gray-300 mt-2">Sorry! We couldn't find the page you're looking for.</p>

            <a href="{{ url('/dashboard') }}" 
                class="mt-6 inline-flex items-center px-6 py-3 text-lg font-medium text-black bg-primary-600 rounded-lg shadow-md hover:bg-primary-700 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 transition-all duration-300">
                Back to Homepage
            </a>
        </div>
    </section>
</x-guest-layout>