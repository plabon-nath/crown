
<section x-data="{ 'showItemCard':false }" @keydown.esc="showItemCard=false">
    <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
         <!-- session Message -->
         <div class="relative ">
            <div class="fixed bottom-4 right-2 z-50">
                @if( session()->has('success'))
                    <div
                        class="border-2 border-green-400/50 bg-white dark:bg-gray-800 dark:text-gray-300 shadow-md p-2 my-1 rounded-lg"
                        x-data="{ show: true }" x-show="show" wire:key="{{ ('showItemCard').random_int(3,8) }}"
                        x-init="setTimeout(() => show = false, 3000)">
    
                        <p x-init="showItemCard=false">
                            {{ session()->get('success') }}
                        </p>
    
    
                    </div>
                @endif
    
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:items-start">

    
            <!-- sidebar / food category -->
            <div class="">
                @livewire('guest.components.category-sidebar')
            </div>

            <!-- food collections -->
            <div class="lg:col-span-3">
                <div class="absolute backdrop-blur bg-gray-800 bg-opacity-25 top-[2rem] right-4 w-full h-full flex justify-center item-center"
                     wire:loading >
                   <p class="flex items-center justify-center mx-5 text-xl font-bold text-red-500 animate-ping ">
                       Loading...
                   </p>
                </div>
                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">
                        <span class="hidden sm:inline">Showing</span>
                        {{ $items->count()  }} of {{ $items->total() }} Items
                    </p>


                    <div class="ml-4">
                        <label for="SortBy" class="sr-only ">
                            Sort
                        </label>

                        <select id="SortBy" name="sort_by" class="text-sm border-0 rounded dark:bg-gray-800 ring-0">

                            <option readonly>Sort</option>
                            <option value="title-asc">Title, A-Z</option>
                            <option value="title-desc">Title, Z-A</option>
                            <option value="price-asc">Price, Low-High</option>
                            <option value="price-desc">Price, High-Low</option>
                        </select>
                    </div>
                </div>

                <div
                    class="grid grid-cols-2 gap-2 mt-4 p-2 border border-gray-200 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                    @if($items->count()>0)

                    @foreach($items as $item)
                        <div class="flex flex-col border border-red-400/20">
                            <img loading="lazy" alt="{{__ ($item->name) }}"
                                class="object-contain w-full h-56"
                                src="{{ asset($item->image?'img/items/'.$item->image:'/img/foodImagePlaceholder.svg') }}"/>
                            <div class="px-4 py-2">
                                <h5 class="text-lg font-semibold">
                                    {{__ ($item->name) }}
                                </h5>
                                <span class="text-sm text-gray-600 dark:text-gray-400 capitalize">
                                    {{__( $item->description)}}
                                </span>

                                <p class="mt-2 text-sm font-medium text-gray-600 dark:text-gray-400 flex flex-row justify-between items-center">
                                    <span>
                                        <i class="icofont-pound"></i>{{ $item->price}}
                                    </span>
                                    <span>
                                        @if( $item->attribute == "Meal")

                                            <span class="text-xl">
                                                <i> meal</i>
                                                <i class="icofont-soft-drinks"></i>
                                                <i class="icofont-french-fries -ml-4"></i>
                                            </span>
                                            @else
                                            <span class="text-md">
                                                {{ $item->attribute}}
                                            </span>
                                       @endif
                                    </span>
                                </p>

                                <button name="add" type="button"
                                    wire:click="showItem({{ $item->skuId }})"
                                        class="flex items-end justify-center w-full py-4 mt-4
                                        text-gray-800 bg-gradient-to-bl from-red-500/50 to-orange-400/50 hover:bg-gradient-to-br
                                        transition-all duration-100 rounded-sm" >
                                    <span class="text-sm font-medium">
                                        Add to Cart
                                    </span>
                                    <svg class="w-5 h-5 ml-1.5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @endforeach
                    @else
                        <div class="flex items-center justify-center w-full px-8 py-4 mt-4 bg-gradient-to-br from-red-500/50 to-orange-400/50 hover:bg-gradient-to-br transition-all duration-150 rounded-sm">
                            <span class="text-sm font-medium">
                                No Items Found
                            </span>
                        </div>
                    @endif
                </div>

                <div class="mx-2 text-sm font-sans bg-transparent">
                    {{ $items->links() }}
                </div>

            </div>



        </div>
    </div>
   
</section>






