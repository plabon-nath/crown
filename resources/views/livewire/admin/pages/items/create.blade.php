<div>

    <!--Dialog-->
    <div class="my-2 max-w-screen-xl shadow-lg" wire:key="{{ ('createFoodItem').random_int(3,8) }}">
        <div class="bg-white dark:bg-gray-800 rounded-lg ">

            <!-- session Message -->
            <div class="relative">
                <div class="fixed bottom-4 right-2 z-50">
                    @if( session()->has('error') )
                        <div
                            class="border-2 border-red-400/50 bg-white dark:bg-gray-800 dark:text-gray-300 shadow-md p-2 my-1 rounded-lg"
                            x-data="{ show: true }" x-show="show"
                            wire:key="{{ ('createFoodItem').random_int(3,8) }}"
                            x-init="setTimeout(() => show = false, 3000)">

                            <p>
                                {{ session()->get('error') }}
                            </p>
                        </div>
                    @endif

                </div>
            </div>

            <!-- page header -->
            <div class="flex justify-between p-4">
                <div class="flex flex-wrap space-x-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0" y="0"
                         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                         class=" h-8 w-8">
                            <g xmlns="http://www.w3.org/2000/svg">
                                <g transform="translate(3 1)">
                                    <polygon style="" points="372.467,75.8 331.251,451.267 166.216,451.267 125,75.8   "
                                             fill="#1566c0"
                                             data-original="#1566c0"></polygon>
                                    <polygon style="" points="346.867,75.8 305.651,451.267 166.216,451.267 125,75.8   "
                                             fill="#2296f3"
                                             data-original="#2296f3"></polygon>
                                    <path style=""
                                          d="M324.108,365.933v76.8H284.94c-2.237,0.018-4.379,0.905-5.973,2.475L238.775,485.4l-40.192-40.192    c-1.594-1.57-3.736-2.457-5.973-2.475H51.042v-76.8H324.108z"
                                          fill="#2e7d32" data-original="#2e7d32"></path>
                                    <path style=""
                                          d="M298.508,365.933v76.8H259.34c-2.237,0.018-4.379,0.905-5.973,2.475L213.175,485.4l-40.192-40.192    c-1.594-1.57-3.736-2.457-5.973-2.475H51.042v-76.8H298.508z"
                                          fill="#4caf50" data-original="#4caf50"></path>
                                    <path style=""
                                          d="M349.623,355.523c0.522,7.094-1.932,14.085-6.772,19.297c-4.84,5.212-11.63,8.176-18.743,8.18    H52.467c-13.785,0.295-25.501-10.012-26.965-23.723c-0.522-7.098,1.935-14.093,6.78-19.306c4.846-5.213,11.643-8.174,18.76-8.171    h271.616c0.485-0.014,0.971,0.014,1.451,0.085C337.336,332.254,348.246,342.362,349.623,355.523z"
                                          fill="#4e342e" data-original="#4e342e"></path>
                                    <path style=""
                                          d="M321.19,346.989c0.522,7.095-1.933,14.087-6.774,19.3c-4.842,5.213-11.634,8.175-18.749,8.177    H49.659c-13.785,0.295-25.501-10.012-26.965-23.723c-0.522-7.092,1.931-14.082,6.769-19.294    c4.838-5.212,11.626-8.177,18.737-8.184h246.016c0.485-0.014,0.971,0.014,1.451,0.085    C308.898,323.717,319.813,333.825,321.19,346.989z"
                                          fill="#795548" data-original="#795548"></path>
                                    <path style=""
                                          d="M321.267,263.533v59.819c-0.48-0.071-0.966-0.099-1.451-0.085H196.765    c-2.237,0.018-4.379,0.905-5.973,2.475l-48.725,48.725l-48.725-48.725c-1.594-1.57-3.736-2.457-5.973-2.475H48.2v-59.733H321.267z    "
                                          fill="#fdd834" data-original="#fdd834"></path>
                                    <path style=""
                                          d="M295.667,267.8v59.819c-0.48-0.071-0.966-0.099-1.451-0.085H171.165    c-2.237,0.018-4.379,0.905-5.973,2.475l-35.925,35.925l-35.925-35.925c-1.594-1.57-3.736-2.457-5.973-2.475H48.2V267.8H295.667z"
                                          fill="#ffeb3a" data-original="#ffeb3a"></path>
                                    <path style=""
                                          d="M349.708,272.067v8.533c0,4.713-3.82,8.533-8.533,8.533h-307.2c-4.713,0-8.533-3.821-8.533-8.533    v-8.533c0-47.128,38.205-85.333,85.333-85.333h153.6C311.503,186.733,349.708,224.938,349.708,272.067z"
                                          fill="#f57c00" data-original="#f57c00"></path>
                                    <g>
                                        <path style=""
                                              d="M315.575,272.067v8.533c0,4.713-3.82,8.533-8.533,8.533H33.975c-4.713,0-8.533-3.821-8.533-8.533     v-8.533c0-47.128,38.205-85.333,85.333-85.333h119.467C277.37,186.733,315.575,224.938,315.575,272.067z"
                                              fill="#ff9801" data-original="#ff9801" class=""></path>
                                        <path style=""
                                              d="M315.575,434.2v25.6c0,28.277-22.923,51.2-51.2,51.2H76.642c-28.277,0-51.2-22.923-51.2-51.2     v-25.6c0-4.713,3.821-8.533,8.533-8.533H192.61c2.237,0.018,4.379,0.905,5.973,2.475l40.192,40.192l40.192-40.192     c1.594-1.57,3.736-2.457,5.973-2.475h22.101C311.754,425.667,315.575,429.487,315.575,434.2z"
                                              fill="#ff9801" data-original="#ff9801" class=""></path>
                                    </g>
                                    <g>
                                        <path style=""
                                              d="M363.933,24.6v34.133h-230.4V24.6c0.028-9.414,7.653-17.039,17.067-17.067h196.267     C356.281,7.561,363.905,15.186,363.933,24.6z"
                                              fill="#cfd8dc" data-original="#cfd8dc"></path>
                                        <path style=""
                                              d="M389.533,58.733V75.8c0,4.713-3.82,8.533-8.533,8.533H116.467c-4.713,0-8.533-3.82-8.533-8.533     V58.733c0.028-9.414,7.653-17.039,17.067-17.067h247.467C381.881,41.695,389.505,49.319,389.533,58.733z"
                                              fill="#cfd8dc" data-original="#cfd8dc"></path>
                                    </g>
                                    <g>
                                        <path style=""
                                              d="M338.333,24.6v34.133h-230.4c0.028-9.414,7.653-17.039,17.067-17.067h8.533V24.6     c0.028-9.414,7.653-17.039,17.067-17.067h170.667C330.681,7.561,338.305,15.186,338.333,24.6z"
                                              fill="#f4f4f4" data-original="#f4f4f4"></path>
                                        <path style=""
                                              d="M363.933,58.733V75.8c0,4.713-3.82,8.533-8.533,8.533H116.467c-4.713,0-8.533-3.82-8.533-8.533     V58.733c0.028-9.414,7.653-17.039,17.067-17.067h221.867C356.281,41.695,363.905,49.319,363.933,58.733z"
                                              fill="#f4f4f4" data-original="#f4f4f4"></path>
                                    </g>
                                    <path style=""
                                          d="M483.315,288.28l-32.853,214.187H260.253l-32.768-214.101c-0.545-3.38,1.556-6.625,4.864-7.509    c0.581-0.174,1.185-0.261,1.792-0.256h7.339c1.024,0,1.963,0.085,2.987,0.171l188.416,1.621l22.955,0.171h1.963    c3.702-1.3,7.597-1.963,11.52-1.963h7.253c1.967-0.031,3.848,0.803,5.146,2.282C483.017,284.36,483.6,286.334,483.315,288.28z"
                                          fill="#c52828" data-original="#c52828"></path>
                                    <path style=""
                                          d="M457.715,288.28l-32.853,214.187H260.253l-32.768-214.101c-0.545-3.38,1.556-6.625,4.864-7.509    l199.851,1.707c0.216-0.097,0.447-0.154,0.683-0.171c3.486-1.202,7.15-1.808,10.837-1.792h7.253    c1.812,0.013,3.551,0.715,4.864,1.963C457.349,284.054,458.048,286.183,457.715,288.28z"
                                          fill="#f44335" data-original="#f44335"></path>
                                    <g>
                                        <path style=""
                                              d="M372.543,353.219c-14.399,2.318-29.12,1.679-43.264-1.877l0.521-2.475V201.923     c0.005-3.674,2.982-6.651,6.656-6.656h29.355c3.674,0.005,6.651,2.982,6.656,6.656v150.699L372.543,353.219z"
                                              fill="#ffb301" data-original="#ffb301"></path>
                                        <path style=""
                                              d="M287.133,246.467V325.4c-6.019-7.135-10.833-15.206-14.251-23.893     c-4.797-11.723-15.789-19.743-28.416-20.736v-27.648c0.005-3.674,2.982-6.651,6.656-6.656H287.133z"
                                              fill="#ffb301" data-original="#ffb301"></path>
                                    </g>
                                    <g>
                                        <path style=""
                                              d="M329.8,209.859v136.533l-0.512,2.475h-0.085c-16.444-3.908-31.194-13.003-42.069-25.941V216.515     c0.005-3.674,2.982-6.651,6.656-6.656H329.8z"
                                              fill="#fdd834" data-original="#fdd834"></path>
                                        <path style=""
                                              d="M415.987,333.165c-12.173,10.839-27.29,17.818-43.435,20.053l-0.085-0.597V212.333H406.6     c4.713,0,8.533,3.821,8.533,8.533v111.275L415.987,333.165z"
                                              fill="#fdd834" data-original="#fdd834"></path>
                                    </g>
                                    <path style=""
                                          d="M457.8,244.589v37.973c-9.045,3.158-16.291,10.062-19.883,18.944    c-4.717,12.11-12.198,22.951-21.845,31.659h-0.085l-0.853-1.024v-94.208h36.011C454.818,237.938,457.795,240.915,457.8,244.589z"
                                          fill="#ffb301" data-original="#ffb301"></path>
                                    <path style=""
                                          d="M389.533,429.933c0,21.208-17.192,38.4-38.4,38.4c-4.363,0.013-8.696-0.737-12.8-2.219    c-15.31-5.443-25.536-19.933-25.536-36.181s10.227-30.738,25.536-36.181c4.104-1.481,8.437-2.232,12.8-2.219    C372.341,391.533,389.533,408.726,389.533,429.933z"
                                          fill="#cfd8dc" data-original="#cfd8dc"></path>
                                    <ellipse style="" cx="338.333" cy="429.933" rx="25.6" ry="36.181" fill="#f4f4f4"
                                             data-original="#f4f4f4"></ellipse>
                                </g>
                                <g>
                                    <path
                                        d="M110.933,230.4h8.533c4.713,0,8.533-3.821,8.533-8.533c0-4.713-3.821-8.533-8.533-8.533h-8.533    c-4.713,0-8.533,3.821-8.533,8.533C102.4,226.579,106.221,230.4,110.933,230.4z"
                                        fill="#000000" data-original="#000000" class=""></path>
                                    <path
                                        d="M162.133,247.467h8.533c4.713,0,8.533-3.821,8.533-8.533c0-4.713-3.821-8.533-8.533-8.533h-8.533    c-4.713,0-8.533,3.821-8.533,8.533C153.6,243.646,157.421,247.467,162.133,247.467z"
                                        fill="#000000" data-original="#000000" class=""></path>
                                    <path
                                        d="M213.333,230.4h8.533c4.713,0,8.533-3.821,8.533-8.533c0-4.713-3.821-8.533-8.533-8.533h-8.533    c-4.713,0-8.533,3.821-8.533,8.533C204.8,226.579,208.621,230.4,213.333,230.4z"
                                        fill="#000000" data-original="#000000" class=""></path>
                                    <path
                                        d="M503.467,494.933h-40.055l31.36-204.433c0.64-4.37-0.66-8.802-3.558-12.134c-2.925-3.374-7.174-5.309-11.639-5.299h-7.313    c-1.007,0-1.971,0.154-2.961,0.213v-27.691c-0.005-8.374-6.782-15.166-15.155-15.189h-27.477v-17.067    c0-4.713-3.82-8.533-8.533-8.533H384v-1.877c-0.015-7.104-4.947-13.251-11.878-14.805l10.94-94.251h9.472    c4.713,0,8.533-3.821,8.533-8.533v-25.6c0-14.138-11.462-25.6-25.6-25.6V25.6c0-14.138-11.462-25.6-25.6-25.6H153.6    C139.462,0,128,11.462,128,25.6v8.533c-14.138,0-25.6,11.462-25.6,25.6v25.6c0,4.713,3.821,8.533,8.533,8.533h9.472l8.934,76.8    h-18.406c-51.816,0.061-93.806,42.051-93.867,93.867v8.533c0,9.426,7.641,17.067,17.067,17.067h8.533v26.812    c-15.987,4.007-26.757,18.955-25.498,35.388c1.285,14.422,11.488,26.483,25.498,30.14V409.6h-8.533    c-9.426,0-17.067,7.641-17.067,17.067v25.6c-0.002,16.069,6.492,31.457,18.005,42.667H8.533c-4.713,0-8.533,3.821-8.533,8.533    C0,508.18,3.821,512,8.533,512h494.933c4.713,0,8.533-3.82,8.533-8.533C512,498.754,508.18,494.933,503.467,494.933z     M477.56,290.133l-31.411,204.801H270.583l-31.351-204.801l5.214,0.001c10.256-0.069,19.539,6.062,23.501,15.522    c3.751,9.501,9.012,18.333,15.582,26.155c0.302,0.423,0.645,0.814,1.024,1.169c18.826,20.749,45.849,32.134,73.847,31.113    c42.667,0,75.605-21.333,90.453-58.445c3.956-9.437,13.209-15.56,23.441-15.514L477.56,290.133z M366.933,204.8v141.705    c-2.825,0.222-5.615,0.521-8.533,0.521c-5.724-0.037-11.433-0.565-17.067-1.579V204.8H366.933z M324.267,221.867v118.869    c-9.759-3.905-18.51-9.963-25.6-17.724V221.867H324.267z M281.6,294.886c-5.425-9.941-14.671-17.239-25.6-20.207V256h25.6V294.886    z M233.728,366.933h-68.07l34.133-34.133h28.74L233.728,366.933z M452.267,247.467v30.583    c-8.775,4.548-15.627,12.094-19.311,21.265c-1.745,4.297-3.849,8.439-6.289,12.382v-64.23H452.267z M409.6,221.867v102.4v0.085    v6.468c-7.602,5.935-16.302,10.308-25.6,12.868V221.867H409.6z M145.067,25.6c0-4.713,3.82-8.533,8.533-8.533h196.267    c4.713,0,8.533,3.821,8.533,8.533v8.533H145.067V25.6z M119.467,59.733c0-4.713,3.821-8.533,8.533-8.533h247.467    c4.713,0,8.533,3.821,8.533,8.533V76.8H119.467V59.733z M137.583,93.867h228.301l-10.897,93.867h-15.531    c-5.08,0.004-9.822,2.547-12.638,6.775c-16.077-14.469-36.705-22.863-58.317-23.731c-1.323-0.111-2.645-0.111-3.968-0.111H146.517    L137.583,93.867z M34.133,264.533c0.052-42.394,34.406-76.748,76.8-76.8h153.6c0.896,0,1.783,0,3.004,0.077    c16.475,0.637,32.299,6.599,45.099,16.99h-15.846c-8.387,0.005-15.185,6.802-15.189,15.189v18.944h-27.477    c-8.387,0.005-15.185,6.802-15.189,15.189v18.944h-204.8V264.533z M222.02,290.133c0,0.162,0,0.324,0,0.486l3.874,25.114h-26.129    c-4.51,0.003-8.836,1.792-12.032,4.975l-42.667,42.667L102.4,320.708c-3.196-3.183-7.522-4.972-12.032-4.975H59.733v-25.6H222.02z     M34.193,351.104c-0.403-4.946,1.41-9.816,4.949-13.295c3.187-3.216,7.53-5.02,12.058-5.009h39.108l34.133,34.133H52.651    C43.345,367.183,35.365,360.339,34.193,351.104z M59.733,384h176.64l8.943,58.385l-6.383,6.349L204.8,414.601    c-3.192-3.193-7.518-4.991-12.032-5.001H59.733V384z M34.133,452.267v-25.6H51.2h141.491l40.192,40.192    c3.332,3.331,8.734,3.331,12.066,0l3.516-3.516l4.847,31.573H76.8C53.254,494.888,34.171,475.813,34.133,452.267z"
                                        fill="#000000" data-original="#000000" class=""></path>
                                    <path
                                        d="M354.133,384c-18.983,0-36.096,11.435-43.361,28.973c-7.264,17.538-3.249,37.725,10.174,51.147    s33.61,17.438,51.147,10.174c17.538-7.264,28.973-24.378,28.973-43.361C401.038,405.025,380.042,384.028,354.133,384z     M354.133,460.8c-16.495,0-29.867-13.372-29.867-29.867c0-16.495,13.372-29.867,29.867-29.867    c16.495,0,29.867,13.372,29.867,29.867C384,447.428,370.628,460.8,354.133,460.8z"
                                        fill="#000000" data-original="#000000" class=""></path>
                                </g>
                            </g>
                        </svg>

                    <h4 class="text-gray-500 font-semibold"> Create New Food Item</h4>
                </div>

                <a class="text-red-300 hover:text-red-500 drop-shadow-xl flex flex-wrap"
                   href="{{ route('admin.item.index') }}">
                    {{ __("Return Back") }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="h-6 w-6"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M6.78 1.97a.75.75 0 010 1.06L3.81 6h6.44A4.75 4.75 0 0115 10.75v2.5a.75.75 0 01-1.5 0v-2.5a3.25 3.25 0 00-3.25-3.25H3.81l2.97 2.97a.75.75 0 11-1.06 1.06L1.47 7.28a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0z"></path>
                    </svg>
                </a>
            </div>

            <hr class="border-2 border-red-500/20"/>

            <!-- main form content -->
            <form wire:submit.prevent="createItem" enctype="multipart/form-data"
                  class="space-y-4 p-5 lg:p-8 mx-2 mb-5">
                @csrf
                <div>
                    <label class="sr-only" for="form.name">Item Name</label>
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
                        id="form.description"></textarea>
                    <x-jet-input-error for="form.description"></x-jet-input-error>
                </div>

                <div class="md:flex justify-evenly items-center space-y-4">
                    <div>
                        <label for="form.status">Status:</label>
                        <x-jet-checkbox for="form.status"
                                        wire:model.defer="form.status"></x-jet-checkbox>{{__("Active")}}
                        <x-jet-input-error for="form.status"></x-jet-input-error>
                    </div>

                    <div>
                        <label class="sr-only" for="form.category">Category</label>
                        <select id="form.category" wire:model.defer="form.category"
                                class="w-full p-2 text-sm bg-white dark:bg-gray-800 border border-indigo-200 rounded-lg drop-shadow-xl">
                            <option selected class="text-gray-300">Select Category</option>
                            @foreach( $categories as $category)
                                <option value="{{$category['id']}}">{{$category['name']}}</option>
                            @endforeach
                        </select>
                        <x-jet-input-error for="form.category"></x-jet-input-error>
                    </div>
                    <!-- Item Image Upload -->
                    <div class="md:flex-col">
                        <div>
                            <div class="mb-2">
                                <label class="inline-block mb-2 text-gray-500">
                                    Upload Image(jpg,png | max:2mb)
                                </label>
                                <div class="flex items-center justify-center">
                                    <label
                                        class="flex flex-col w-32 h-32 border-2 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                        <div class="relative flex flex-col items-center justify-center pt-7">
                                            @if($image)
                                                <img id="preview" class="absolute inset-0"
                                                     wire:loading.remove wire:target="image"
                                                     src="{{ $image->temporaryUrl() }}" alt="FoodItemImage">
                                            @endif

                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 class="w-12 h-12 text-gray-400 group-hover:text-gray-600"
                                                 viewBox="0 0 20 20"
                                                 fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                            <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                    <span wire:loading.remove wire:target="image">
                                                        Select Image
                                                    </span>
                                                <span wire:loading wire:target="image">
                                                        Uploading...
                                                    </span>
                                            </p>
                                        </div>
                                        <input type="file" class="opacity-0" accept="image/jpeg, image/png"
                                               wire:model.defer="image" id="image" wire:loading.attr="disabled">
                                        <x-jet-input-error for="image"></x-jet-input-error>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <hr class="border border-red-500/20"/>

                <!-- notes -->
                <div class="w-full mt-2" x-data="handler()">
                    <h3 class="text-semibold text-gray-700 dark:text-gray-300 flex flex-wrap items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                  clip-rule="evenodd"/>
                        </svg>
                        Item SKU:
                    </h3>

                    <div class="flex flex-col w-full -mx-3">

                        @foreach( $prices as $key=>$price)
                            <div class="flew items-center justify-between w-full mb-1 space-x-4" wire:key="{{ ('createFoodItem').$key }}">
                                <div class="rounded-md border-2 border-red-400/20">

                                    <label for="attributes_selected_{{$key}}" class="sr-only">Attribute</label>
                                    <select id="attributes_selected_{{$key}}"
                                            wire:model.defer="attributes_selected.{{$key}}"
                                            class="drop-shadow border-1 focus:outline-none p-3 block w-full sm:text-sm border-gray-300 rounded-md">
                                        @foreach( $attributes as $attribute)
                                            <option value="{{$attribute['id']}}">{{$attribute['name']}}</option>
                                        @endforeach
                                    </select>
                                    @error('attributes_selected.'.$key)
                                    <span class="text-xs text-red-600 flex items-start justify-center">
                                    {{ $message }}
                                </span>
                                    @enderror

                                </div>

                                <div class=" rounded-md border-2 border-red-400/20">
                                    <label for="price_{{$key}}" class="sr-only">Price</label>
                                    <input type="text" id="price_{{$key}}" wire:model.defer="prices.{{$key}}"
                                           class="drop-shadow border-1 focus:outline-none p-3 block w-full sm:text-sm border-gray-300 rounded-md"
                                           placeholder="Enter Price" autocomplete="off"
                                           value=" {{ old('prices.'.$key) }}"
                                    />
                                    @error('prices.'.$key)
                                    <span class="text-xs text-red-600 flex items-start justify-center">
                                    {{ $message }}
                                </div>

                            </div>

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
                            <p class="ml-2"> Add New SKU</p>
                        </div>
                    </div>
                </div>

                <!-- note ends -->


                <div class="mt-4">
                    <button type="submit"
                            class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto">
                        <span class="font-medium"> Submit Item </span>
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
</div>




@section('jsAfterLoad')
    <script>
        window.livewire.on('itemCreated', function () {
            window.livewire.emit('refreshItems');
        });

        function handler() {
            return {
                fields: [],
                addNewField() {
                    this.fields.push({
                        price: '',
                    });
                },
                removeField(index) {
                    this.fields.splice(index, 1);
                }
            }
        }
    </script>
@endsection
