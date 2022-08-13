<div class="bg-gray-100 dark:bg-gray-900">
    <div class="bg-[url('/img/hero-bg.svg')] min-h-screen flex flex-col sm:justify-center items-center pt-[3.5rem] sm:pt-0 ">
        <div>
            {{ $logo }}
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4  bg-white dark:bg-gray-800 shadow-2xl overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</div>
