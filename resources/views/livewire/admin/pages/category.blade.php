<div class="container" x-data="{ 'createFoodCategoryModal':false }" @keydown.esc="createFoodCategoryModal=false">
    <div class="flex justify-between item-content">
        <h3 class="text-gray-700 text-3xl font-medium">Food Category</h3>
        <button
            class="flex flex-wrap  py-2 px-4 bg-gradient-to-br hover:bg-gradient-to-bl from-red-500/50 to-orange-400/50 rounded-lg text-gray-700 dark:text-gray-300 font-semibold"
            type="button" @click="createFoodCategoryModal=true">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
            </svg>
            Add New
        </button>
    </div>

    <livewire:admin.components.food-category-table/>

    <!-- session Message -->
    <div class="relative ">
        <div class="fixed bottom-4 right-2 z-50">
            @if( session()->has('success'))
                <div
                    class="border-2 border-green-400/50 bg-white dark:bg-gray-800 dark:text-gray-300 shadow-md p-2 my-1 rounded-lg"
                    x-data="{ show: true }" x-show="show" wire:key="{{ ('createFoodCategoryModal').random_int(3,8) }}"
                    x-init="setTimeout(() => show = false, 3000)">

                    <p x-init="createFoodCategoryModal=false">
                        {{ session()->get('success') }}
                    </p>


                </div>
            @endif

        </div>
    </div>


    <!--Overlay-->
    <div class="overflow-auto bg-gray-900/50" x-show="createFoodCategoryModal"
         :class="{ 'absolute inset-0 z-10 flex items-center justify-center': createFoodCategoryModal}">
    </div>


    <!--Dialog-->
    <section id="createFoodCategoryModal" tabindex="-1" role="dialog" aria-modal="true" x-show="createFoodCategoryModal"
             class=" overflow-y-auto overflow-x-hidden fixed top-0   z-20 w-3/4 h-modal md:h-full"
             wire:key="{{ ('createFoodCategoryModal').random_int(3,8) }}">
        <div class="lg:mx-6 my-2 max-w-screen-xl shadow-lg">


            <div class=" bg-white dark:bg-gray-800 rounded-lg  lg:col-span-3">
                <!-- modal header -->
                <div class="flex justify-between p-4">
                    <h4 class="text-gray-500 font-semibold"> Create New Food Category</h4>
                    <button class="text-red-300 hover:text-red-500 drop-shadow-xl flex flex-wrap"
                            @click="createFoodCategoryModal=false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                        {{ __("Close") }}</button>
                </div>

                <hr class="border-2 border-red-500/20"/>

                <!-- main form content -->
                <form wire:submit.prevent="createCategory" class="space-y-4 p-5 lg:p-8 mx-2 mb-5">
                    <div>
                        <label class="sr-only" for="form.name">Category Name</label>
                        <x-jet-input type="text"
                                     class="w-full p-3 border border-red-200 rounded-lg bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none "
                                     placeholder="Name" type="text" id="form.name"
                                     wire:model.defer="form.name"></x-jet-input>
                        <x-jet-input-error for="form.name"></x-jet-input-error>
                    </div>

                    <div>
                        <label class="sr-only" for="form.description">Description</label>
                        <textarea
                            class="w-full p-3 border border-red-200 rounded-lg bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none"
                            placeholder="Description"
                            rows="3" wire:model.defer="form.description"
                            id="form.description"
                        ></textarea>
                        <x-jet-input-error for="form.description"></x-jet-input-error>
                    </div>

                    <div>
                        <label class="sr-only" for="form.status">Status</label>
                        <x-jet-checkbox for="form.status" wire:model.defer="form.status"
                                        checked></x-jet-checkbox>{{__("Active")}}
                        <x-jet-input-error for="form.status"></x-jet-input-error>
                    </div>

                    <!-- notes -->
                    <div class="w-full mt-2" x-data="handler()">
                        <h3 class="text-semibold text-gray-700 dark:text-gray-300 flex flex-wrap items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                      clip-rule="evenodd"/>
                            </svg>
                            Category Notes
                        </h3>
                        <div class="flex flex-col  w-full">
                            @foreach( $notes as $key=>$note)
                                <div class="w-full rounded-md border-2 border-red-400/20 mb-1">
                                    <label for="input_{{$key}}" class="sr-only">Notes</label>
                                    <input type="text" id="note_{{$key}}" wire:model.defer="notes.{{$key}}"
                                           class="drop-shadow border-1 focus:outline-none p-3 block w-full sm:text-sm border-gray-300 rounded-md"
                                           placeholder="Enter Category Notes" autocomplete="off"
                                           value=" {{ old('notes.'.$key) }}">

                                </div>
                                @error('notes.'.$key)
                                <span
                                    class="text-xs text-red-600 flex items-start justify-center">{{ $message }}</span> @enderror
                                @if($key > 0)
                                    <div wire:click="removeInput({{$key}})"
                                         class="flex items-center justify-end text-red-600 text-sm w-full cursor-pointer">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        <p>Remove Note</p>
                                    </div>
                                @endif
                            @endforeach
                            <div wire:click="addInput"
                                 class="flex items-center justify-center text-blue-600 text-sm py-4 w-full cursor-pointer">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <p class="ml-2"> Add New Note</p>
                            </div>
                        </div>
                    </div>

                    <!-- note ends -->

                    <div class="mt-4">
                        <button type="submit"
                                class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto">
                            <span class="font-medium"> Add Category </span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="w-5 h-5 ml-3"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </section>

</div>

@section('jsAfterLoad')
    <script>
        function handler() {
            return {
                fields: [],
                addNewField() {
                    this.fields.push({
                        note: '',
                    });
                },
                removeField(index) {
                    this.fields.splice(index, 1);
                }
            }
        }
    </script>
@endsection


