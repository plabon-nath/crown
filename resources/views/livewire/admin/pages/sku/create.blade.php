<div class="container rounded p-4 bg-white dark:bg-gray-800 drop-shadow z-10" wire:key="createSku_{{$foodItem_id.'_'.random_int(2,8)}}">
    <!-- session Message -->
    <div class="relative ">
        <div class="fixed bottom-4 right-2 z-50">
            @if( session()->has('success'))
                <div
                    class="border-2 border-green-400/50 bg-white dark:bg-gray-800 dark:text-gray-300 shadow-md p-2 my-1 rounded-lg"
                    x-data="{ show: true }" x-show="show"
                    wire:key="{{ ('CrownAdminSessionMessage').random_int(3,8) }}"
                    x-init="setTimeout(() => show = false, 3000)">

                    <p>
                        {{ session()->get('success') }}
                    </p>

                </div>
            @elseif( session()->has('error'))
                <div
                    class="border-2 border-red-400/50 bg-white dark:bg-gray-800 dark:text-gray-300 shadow-md p-2 my-1 rounded-lg"
                    x-data="{ show: true }" x-show="show"
                    wire:key="{{ ('CrownAdminSessionMessage').random_int(3,8) }}"
                    x-init="setTimeout(() => show = false, 3000)">

                    <p>
                        {{ session()->get('error') }}
                    </p>

                </div>
            @endif

        </div>
    </div>

    <!-- Item Description -->
    <div class="flex items-center justify-between">
        <div>
            <div class="flex space-x-2 text-sm opacity-75 text-gray-700 dark:text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"/>
                </svg>
                <span>
                    {{ $item['category']['name'] }}
                </span>
            </div>
            <span class="font-semibold text-gray-800 dark:text-gray-200">
                {{ $item['name'] }}
            </span>
            <p class="text-gray-800 dark:text-gray-200">
                {{ $item['description'] }}

            </p>
            @if( $sku )
                @foreach($sku as $s)
                    <div class="flex flex-row  space-x-2 items-center">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                        </span>
                        <div class="flex flex-row opacity-75 ">
                            {{ $s['attribute']['name']}}
                            <span class="px-2 flex flex-row items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15 9a2 2 0 10-4 0v5a2 2 0 01-2 2h6m-6-4h4m8 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                {{ $s['price']}}
                            </span>
                        </div>
                    </div>

                @endforeach
            @else
                <div class="flex space-x-2 text-sm opacity-75 text-gray-700 dark:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                         fill="currentColor">
                        <path
                            d="M7.707,9.256c.391,.391,.391,1.024,0,1.414-.391,.391-1.024,.391-1.414,0-.391-.391-.391-1.024,0-1.414,.391-.391,1.024-.391,1.414,0Zm13.852,6.085l-.565,.565c-.027,1.233-.505,2.457-1.435,3.399l-3.167,3.208c-.943,.955-2.201,1.483-3.543,1.487h-.017c-1.335,0-2.59-.52-3.534-1.464L1.882,15.183c-.65-.649-.964-1.542-.864-2.453l.765-6.916c.051-.456,.404-.819,.858-.881l6.889-.942c.932-.124,1.87,.193,2.528,.851l7.475,7.412c.387,.387,.697,.823,.931,1.288,.812-1.166,.698-2.795-.342-3.835L12.531,2.302c-.229-.229-.545-.335-.851-.292l-6.889,.942c-.549,.074-1.052-.309-1.127-.855-.074-.547,.309-1.051,.855-1.126L11.409,.028c.921-.131,1.869,.191,2.528,.852l7.589,7.405c1.946,1.945,1.957,5.107,.032,7.057Zm-3.438-1.67l-7.475-7.412c-.223-.223-.536-.326-.847-.287l-6.115,.837-.679,6.14c-.033,.303,.071,.601,.287,.816l7.416,7.353c.569,.57,1.322,.881,2.123,.881h.01c.806-.002,1.561-.319,2.126-.893l3.167-3.208c1.155-1.17,1.149-3.067-.014-4.229Z"/>
                    </svg>
                    <span>
                        {{ __('No SKU found') }}
                    </span>
                </div>
            @endif

        </div>

        <div>
            @if($item['image'])
                <img
                    src="{{ asset('img/items/' . $item['image']) }}"
                    alt="{{ $item['name'] }}"
                    class="h-20"/>
            @else
                <img
                    src="{{ asset('img/foodImagePlaceholder.svg') }}"
                    alt="{{ $item['name'] }}"
                    class="h-20"/>

            @endif
        </div>
    </div>
    <!-- Item Description End-->

    <!-- SKU -->
    <div class="w-full mt-2">
        <h3 class="text-semibold text-gray-700 dark:text-gray-300 flex flex-wrap items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                 fill="currentColor">
                <path fill-rule="evenodd"
                      d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                      clip-rule="evenodd"/>
            </svg>
            Create SKU:
        </h3>

        <div class="flex flex-col w-full  bg-white dark:bg-gray-800 py-2 rounded-md">

            <form wire:submit.prevent="createSku">
                @csrf
                <div class="flex flex-row items-center justify-center mb-1 space-x-4">
                    <div class="flex rounded-md border-2 border-red-400/20">
                        <label for="attributes_selected_{{$foodItem_id}}" class="sr-only">Attribute</label>
                        <select id="attributes_selected_{{$foodItem_id}}"
                                wire:model.defer="form.attr"
                                class="drop-shadow border-1 focus:outline-none p-3 block w-full sm:text-sm border-gray-300 rounded-md bg-transparent">
                            <option value="" selected> Select Attribute</option>
                            @foreach( $attributes as $attribute)
                                <option value="{{ $attribute['id']}}">{{$attribute['name']}}</option>
                            @endforeach
                        </select>
                        @error('form.attr')
                        <span class="text-xs text-red-600 flex items-start justify-center">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <div class="flex rounded-md border-2 border-red-400/20">
                        <label for="price_{{$foodItem_id}}" class="sr-only">Price</label>
                        <input type="text" id="price_{{$foodItem_id}}"
                               wire:model.defer="form.price" value="{{ old('form.price') }}"
                               class="bg-transparent drop-shadow border-1 focus:outline-none p-3 block w-full sm:text-sm border-gray-300 rounded-md"
                               placeholder="Enter Price" autocomplete="off"/>

                        @error('form.price')
                        <span class="text-xs text-red-600 flex flex-col items-start justify-center">
                            {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="flex justify-center">

                        <label for="checked-toggle" class="inline-flex relative items-center cursor-pointer">
                            <input type="checkbox" id="checked-toggle" class="sr-only peer"
                                   wire:model.defer="form.status" checked=""
                                   value="{{ old('form.status') }}">
                            <div
                                class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">SKU Status</span>
                        </label>

                        @error('form.status')
                        <span class="text-xs text-red-600 flex flex-col items-start justify-center">
                        {{ $message }}

                        @enderror
                    </div>

                </div>

                <div class="flex item-center justify-center">
                    <button type="submit"
                    class="flex flex-row space-x-2 px-4 py-2 rounded items-center justify-center text-blue-600 text-sm cursor-pointer border border-blue-400 hover:bg-gray-200 dark:hover:bg-gray-700">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                          clip-rule="evenodd"></path>
                </svg>
                <span>Add New SKU</span>
            </button>
                </div>
            </form>
    </div>
</div>
<!-- SKU ends -->
</div>




