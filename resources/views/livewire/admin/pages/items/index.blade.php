
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
                                {{ $item->name }}
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
