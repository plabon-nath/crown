<section class="bg-[url('/img/hero-bg.svg')] shadow-lg border-b-2 border-red-400/50">
<div class="container px-6 py-14 mx-auto ">
    <div class="items-center lg:flex py-15 sm:py-5">
        <div class="container px-2 flex items-center justify-between drop-shadow-xl">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-orange-600 sm:text-3xl sm:truncate">{{ $title }}</h2>
                <div class="mt-1 flex w-full">
                    @foreach( $breadcrumbs as $bread)
                        <span class="text-sm md:text-md text-gray-600 dark:text-gray-300 flex space-x-4 justify-evenly">
                        <a href="{{ route($bread) }}" class="capitalize px-4 border-b-2 border-transparent hover:border-red-400" aria-label="{{ $bread}}">
                            {{ $bread }}</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 justify-end items-end" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7"/>
                    </svg>
                   </span>
                    @endforeach
                </div>
            </div>

            <div class="mt-5 flex lg:mt-0 lg:ml-4">

            <span class="ml-3">
                <a href="tel:01702332122"
                   class="items-center px-4 py-2 border hover:border-2 border-teal-300 dark:border-gray-300 rounded-full drop-shadow-xl text-sm font-medium text-indigo-800 dark:text-gray-200 focus:ring-2 focus:ring-indigo-500">
                    <i class="icofont-phone"></i> Call Now
                </a>
            </span>
            </div>

        </div>
        <div class="px-4 text-gray-600 dark:text-gray-300 text-sm flex-wrap">
            To place order <span class="text-red-400 text-semibold">Call Us</span> ( 01702332122 ) with the items you want to order.
        </div>

    </div>
    <div class=" flex w-auto justify-center items-center">

       <div class="relative mt-3 md:mt-0">
           <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 absolute text-red-500 -top-4 left-8 bg-gray-100 dark:bg-gray-900 px-2 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
               <path stroke-linecap="round"  stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
           </svg>
           <p class="border-2 border-red-400 rounded-lg p-2 my-2 text-xs sm:text-sm text-muted">

               Some of our dishes contain allergens. If you have any allergy, we strongly recommend you to mention that before placing any order.
           </p>
       </div>
    </div>



</div>

</section>
