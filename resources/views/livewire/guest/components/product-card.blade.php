<div>
    
 <!--Overlay-->
 <div class="overflow-auto bg-gray-900/50" x-show="showItemCard"
 :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showItemCard}"></div>

 <!--Dialog-->
 <section id="showItemCard" tabindex="-1" role="dialog" aria-modal="true" x-show="showItemCard"
 class=" overflow-y-auto overflow-x-hidden fixed top-4 right-4 z-20  h-modal md:h-full"
 wire:key="{{ ('showItemCard').random_int(3,8) }}">
 <div class="lg:mx-6 my-2 max-w-screen-xl shadow-lg">

    <div class=" bg-white dark:bg-gray-800 rounded-lg  lg:col-span-3"> 
        <!-- modal header -->
        <div class="flex justify-between p-4">
        <h4 class="text-gray-500 font-semibold"> {{ "Item name"}} </h4>
        <button class="text-red-300 hover:text-red-500 drop-shadow-xl flex flex-wrap"
                @click="showItemCard=false">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
            {{ __("Close") }}</button>
    </div>

    <hr class="border-2 border-red-500/20"/>

    <!-- main form content -->
    <form wire:submit.prevent="createAttribute" class="space-y-4 p-5 lg:p-8 mx-2 mb-5">
        <div>
           <ul>
                <li> Product Name:</li>
                <li> Product Discription:</li>
                <li> Product Category:</li>
                <li> Product Price:</li>
           </ul>
        </div>
        <div class="mt-4">
            <button type="submit"
                    class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto">
                <span class="font-medium"> Add to cart </span>
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-5 h-5 ml-3" fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </button>
        </div>
    </form>
</div>



</section>

</div>
