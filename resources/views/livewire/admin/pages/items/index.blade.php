
<div>
    <div class="container">
        <!-- page header -->
        <div class="flex justify-between item-content">
            <h3 class="text-gray-700 text-3xl font-medium">Food Items</h3>
            <a href="{{ route('admin.item.create') }}"
               class="flex flex-wrap  py-2 px-4 bg-gradient-to-br hover:bg-gradient-to-bl from-red-500/50 to-orange-400/50 rounded-lg text-gray-700 dark:text-gray-300 font-semibold"
               type="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
                Add New
            </a>
        </div>

        <!-- session Message -->
        <div class="relative ">
            <div class="fixed bottom-4 right-2 z-50">
                @if( session()->has('success'))
                    <div
                        class="border-2 border-green-400/50 bg-white dark:bg-gray-800 dark:text-gray-300 shadow-md p-2 my-1 rounded-lg"
                        x-data="{ show: true }" x-show="show"
                        wire:key="{{ ('CrownAdminSessionMessage').random_int(3,8) }}"
                        x-init="setTimeout(() => show = false, 3000)">

                        <p x-init="createFoodCategoryModal=false">
                            {{ session()->get('success') }}
                        </p>

                    </div>
                @endif

            </div>
        </div>

        <!-- index container -->
        <div class="">

            <div class="overflow-x-auto my-2 py-2 rounded-lg bg-white dark:bg-gray-800">

                <div>
                    <label class="text-sm text-gray-600 dark:text-gray-400 mx-4">
                        Show
                        <select class="border border-gray-500 bg-white dark:bg-gray-800 ring-0 focus:border-0"
                                wire:model="limit" wire:change="ChangeLimit($event.target.value)">
                            <option value="10" selected>10</option>
                            <option value="15">15</option>
                            <option value="25">25</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                        </select>
                        per page
                    </label>
                </div>

                <table class="min-w-full text-sm divide-y divide-gray-200 table table-auto">
                    <thead>
                    <tr>
                        <th class="sticky left-0 p-4 text-left">
                            <label class="sr-only" for="row_all">Select All</label>
                            <input
                                class="w-5 h-5 border-gray-200 rounded"
                                type="checkbox"
                                id="row_all"
                            />
                        </th>
                        <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                            <div class="flex items-center">
                                Name
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 ml-1.5 text-gray-700"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </div>
                        </th>
                        <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                            <div class="flex items-center">
                                Description
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 ml-1.5 text-gray-700"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </div>
                        </th>
                        <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                            <div class="flex items-center">
                                Status
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 ml-1.5 text-gray-700"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </div>
                        </th>
                        <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                            <div class="flex items-center">
                                Category
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 ml-1.5 text-gray-700"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </div>
                        </th>
                        <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                            <div class="flex items-center">
                                Image
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 ml-1.5 text-gray-700"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </div>
                        </th>
                        <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                            <div class="flex items-center">
                                Actions
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 ml-1.5 text-gray-700"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </div>
                        </th>
                    </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-100">
                    @foreach( $items as $item)

                        <tr>
                            <td class="sticky left-0 p-4">
                                <label class="sr-only" for="row_1">Row 1</label>
                                <input
                                    class="w-5 h-5 border-gray-200 rounded"
                                    type="checkbox"
                                    id="row_1"
                                    value="{{ $item->id}}"
                                />
                            </td>
                            <td class="p-4 font-medium text-gray-900 dark:text-gray-100 whitespace-nowrap">
                                <p>
                                    {{ $item->name }}
                                </p>
                                <div class="flex flex-row  space-x-2 items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                             <path stroke-linecap="round" stroke-linejoin="round"
                                             d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                            </svg>
                                    </span>
                                    <div class="flex flex-row opacity-75 ">
                                       
                                    </div>
                                </div>
                            </td>
                            <td class="p-4 text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                {{ $item->description }}
                            </td>
                            <td class="p-4 text-gray-700 bg-transparent whitespace-nowrap">
                                @if($item->is_available === 1)
                                    <strong
                                        class="bg-green-100 text-green-700 px-3 py-1.5 rounded text-xs font-medium">
                                        {{ 'Active' }}
                                    </strong>
                                @else
                                    <strong
                                        class="bg-red-100 text-red-700 px-3 py-1.5 rounded text-xs font-medium">
                                        {{ 'Inactive' }}
                                    </strong>
                                @endif
                            </td>
                            <td class="p-4 text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                {{ $item->category->name}}
                            </td>
                            <td class="p-4 text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                @if($item->image)
                                    <img
                                        src="{{ asset('img/items/' . $item->image) }}"
                                        alt="{{ $item->name }}"
                                        class="h-20"/>
                                @else
                                    <img
                                        src="{{ asset('img/foodImagePlaceholder.svg') }}"
                                        alt="{{ $item->name }}"
                                        class="h-20"/>

                                @endif
                            </td>
                            <td class="p-4 text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                <div class="flex flex-row space-x-2">
                                    <a href="{{ route('admin.item.edit', $item->id) }}" title="Edit Item"
                                       class="text-gray-700 dark:text-gray-200 hover:text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                             fill="currentColor">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/>
                                            <path fill-rule="evenodd"
                                                  d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </a>
                                    <a href="{{ route('admin.item.edit', $item->id) }}" title="Edit SKU"
                                       class="text-gray-700 dark:text-gray-200 hover:text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                             fill="currentColor">
                                            <path
                                                d="M20.214,4.392l-7.48-4.2a1.5,1.5,0,0,0-1.468,0l-7.48,4.2A3.505,3.505,0,0,0,2,7.443V17.5A6.508,6.508,0,0,0,8.5,24h7A6.508,6.508,0,0,0,22,17.5V7.443A3.506,3.506,0,0,0,20.214,4.392ZM19,17.5A3.5,3.5,0,0,1,15.5,21h-7A3.5,3.5,0,0,1,5,17.5V7.443a.5.5,0,0,1,.255-.436L12,3.221l6.744,3.786A.5.5,0,0,1,19,7.443Z"/>
                                            <circle cx="12" cy="9" r="2"/>
                                        </svg>
                                    </a>
                                    <a href="{{ route('admin.sku.create', $item->id) }}" title="Add SKU"
                                       class="text-gray-700 dark:text-gray-200 hover:text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                        fill="currentColor">
                                            <path
                                                d="M7.707,9.256c.391,.391,.391,1.024,0,1.414-.391,.391-1.024,.391-1.414,0-.391-.391-.391-1.024,0-1.414,.391-.391,1.024-.391,1.414,0Zm13.852,6.085l-.565,.565c-.027,1.233-.505,2.457-1.435,3.399l-3.167,3.208c-.943,.955-2.201,1.483-3.543,1.487h-.017c-1.335,0-2.59-.52-3.534-1.464L1.882,15.183c-.65-.649-.964-1.542-.864-2.453l.765-6.916c.051-.456,.404-.819,.858-.881l6.889-.942c.932-.124,1.87,.193,2.528,.851l7.475,7.412c.387,.387,.697,.823,.931,1.288,.812-1.166,.698-2.795-.342-3.835L12.531,2.302c-.229-.229-.545-.335-.851-.292l-6.889,.942c-.549,.074-1.052-.309-1.127-.855-.074-.547,.309-1.051,.855-1.126L11.409,.028c.921-.131,1.869,.191,2.528,.852l7.589,7.405c1.946,1.945,1.957,5.107,.032,7.057Zm-3.438-1.67l-7.475-7.412c-.223-.223-.536-.326-.847-.287l-6.115,.837-.679,6.14c-.033,.303,.071,.601,.287,.816l7.416,7.353c.569,.57,1.322,.881,2.123,.881h.01c.806-.002,1.561-.319,2.126-.893l3.167-3.208c1.155-1.17,1.149-3.067-.014-4.229Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                    <tfoot>
                    <tr>

                    </tr>
                    </tfoot>
                </table>
                <div class="mx-2">
                    {{ $items->links() }}
                </div>


            </div>

        </div>

    </div>

</div>
