<div class="container" x-data="{ 'createAttributeModal':false }" @keydown.esc="createAttributeModal=false">


    <div class="flex justify-between item-content">
        <h3 class="text-gray-700 text-3xl font-medium">Food Item Attributes</h3>
        <button
            class="flex flex-wrap  py-2 px-4 bg-gradient-to-br hover:bg-gradient-to-bl from-red-500/50 to-orange-400/50 rounded-lg text-gray-700 dark:text-gray-300 font-semibold"
            type="button" @click="createAttributeModal=true">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
            </svg>
            Add New
        </button>
    </div>

    <livewire:admin.components.attribute-table/>

    <!-- session Message -->
    <div class="relative ">
        <div class="fixed bottom-4 right-2 z-50">
            @if( session()->has('success'))
                <div
                    class="border-2 border-green-400/50 bg-white dark:bg-gray-800 dark:text-gray-300 shadow-md p-2 my-1 rounded-lg"
                    x-data="{ show: true }" x-show="show" wire:key="{{ ('createAttributeModal').random_int(3,8) }}"
                    x-init="setTimeout(() => show = false, 3000)">

                    <p x-init="createAttributeModal=false">
                        {{ session()->get('success') }}
                    </p>


                </div>
            @endif

        </div>
    </div>


    <!--Overlay-->
    <div class="overflow-auto bg-gray-900/50" x-show="createAttributeModal"
         :class="{ 'absolute inset-0 z-10 flex items-center justify-center': createAttributeModal}">
    </div>


    <!--Dialog-->
    <section id="createAttributeModal" tabindex="-1" role="dialog" aria-modal="true" x-show="createAttributeModal"
             class=" overflow-y-auto overflow-x-hidden fixed top-0   z-20 w-3/4 h-modal md:h-full"
             wire:key="{{ ('createAttributeModal').random_int(3,8) }}">
        <div class="lg:mx-6 my-2 max-w-screen-xl shadow-lg">


            <div class=" bg-white dark:bg-gray-800 rounded-lg  lg:col-span-3">
                <!-- modal header -->
                <div class="flex justify-between p-4">
                    <h4 class="text-gray-500 font-semibold"> Create New Items Attribute</h4>
                    <button class="text-red-300 hover:text-red-500 drop-shadow-xl flex flex-wrap"
                            @click="createAttributeModal=false">
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
                        <label class="sr-only" for="form.name">Name</label>
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


                    <div class="mt-4">
                        <button type="submit"
                                class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto">
                            <span class="font-medium"> Add Attributes </span>
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

