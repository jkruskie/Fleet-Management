<x-app-layout title="Dashboard">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"></h2>

        <div>
            <!-- Vehicle Header -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="flex items-center text-sm px-4">
                    <img class="object-cover w-48 h-full rounded-md" src="{{ asset('/images/vehicles/' . $vehicle->defaultImage()) }}" alt="" loading="lazy" />
                </div>
                <div>
                    <p class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        {{ $vehicle->title }}
                    </p>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        {{ $vehicle->titleDetail }}
                    </p>
                    @if($vehicle->vehicleType->name == "Truck Mounted Crane")
                        @include('partials.vehicles.headers.truckmountedcrane', ['vehicle' => $vehicle])
                    @endif
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        @if($vehicle->isActive())
                            <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-full active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
                                <svg class="w-4 h-4" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M9,20.42L2.79,14.21L5.62,11.38L9,14.77L18.88,4.88L21.71,7.71L9,20.42Z" />
                                </svg>
                                Active
                            </button>
                        @else
                            <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-full active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                </svg>
                                Inactive
                            </button>
                        @endif
                    </p>
                </div>
            </div>
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"></h2>

            {{-- Vehicle Information Navigation --}}

            <div class="py-6 flex flex-col justify-center sm:py-12">
                <section class="space-y-8">
                    <div class="container flex flex-row items-stretch justify-center w-full" x-data="{tab: 1}">
                        <div class="flex flex-col justify-start w-1/4 space-y-4">
                            <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 1, ' transform -translate-x-2': tab !== 1}" href="#" @click.prevent="tab = 1">
                                Vehicle Overview
                            </a>
                            <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 2, ' transform -translate-x-2': tab !== 2}" href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                                Gallery
                            </a>
                            <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 3, ' transform -translate-x-2': tab !== 3}" href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                                Documents
                            </a>
                            <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 4, ' transform -translate-x-2': tab !== 4}" href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                                Notes
                            </a>
                            <hr>
                            <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 5, ' transform -translate-x-2': tab !== 5}" href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                                Work Orders
                            </a>
                            <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 6, ' transform -translate-x-2': tab !== 6}" href="#" @click.prevent="tab = 6" @click.prevent="tab = 6">
                                Issues
                            </a>
                            <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 7, ' transform -translate-x-2': tab !== 7}" href="#" @click.prevent="tab = 7" @click.prevent="tab = 7">
                                Service History
                            </a>
                        </div>
                        <div class="w-full bg-white rounded-lg shadow-xs">
                            <div class="p-4 bg-white rounded-lg" x-show="tab === 1">
                                <h4 class="mb-4 font-semibold">
                                    Overview
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Fuga, cum commodi a omnis numquam quod? Totam exercitationem
                                    quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
                                    nihil dolorum.
                                </p>
                            </div>
            
                            <div class="p-4 bg-white rounded-lg" x-show="tab === 2">
                                <div class="container grid grid-cols-3 gap-2 mx-auto">
                                    @foreach($vehicle->images as $image)
                                    <div class="w-full rounded-lg">
                                        <img src="{{ asset('/images/vehicles/' . $image->url) }}"
                                            alt="{{ $vehicle->title }}">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
            
                            <div class="p-4 bg-white rounded-lg" x-show="tab === 3">
                                <h4 class="mb-4 font-semibold">
                                    Documents
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Fuga, cum commodi a omnis numquam quod? Totam exercitationem
                                    quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
                                    nihil dolorum.
                                </p>
                            </div>
            
                            <div class="p-4 bg-white rounded-lg" x-show="tab === 4">
                                <h4 class="mb-4 font-semibold">
                                    Notes
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Fuga, cum commodi a omnis numquam quod? Totam exercitationem
                                    quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
                                    nihil dolorum.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>



            {{-- <div class="grid gap-6 mb-8 grid-cols-3">
                <div x-data="{ openTab: 1 }" class="min-w-0 col-span-1">
                    <ul class="mt-6">
                        <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="relative px-6 py-3">
                            {!! request()->routeIs('dashboard') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
                            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="#overview">
                                <span class="ml-4">Vehicle Overview</span>
                            </a>
                        </li>
                        <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="relative px-6 py-3">
                            {!! request()->routeIs('vehicles') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
                            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="#gallery">
                                <span class="ml-4">Gallery</span>
                            </a>
                        </li>
                        <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="relative px-6 py-3">
                            {!! request()->routeIs('forms') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
                            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="#documents">
                                <span class="ml-4">Documents</span>
                            </a>
                        </li>
                        <li @click="openTab = 4" :class="{ '-mb-px': openTab === 4 }" class="relative px-6 py-3">
                            {!! request()->routeIs('forms') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
                            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="#notes">
                                <span class="ml-4">Notes</span>
                            </a>
                        </li>
                    </ul>
                    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 col-span-2">
                        <div x-show="openTab === 1">Tab #1</div>
                        <div x-show="openTab === 2">Tab #2</div>
                        <div x-show="openTab === 3">Tab #3</div>
                    </div>
                </div> --}}
                {{-- <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 col-span-2">
                    <h4 class="mb-4 font-semibold">
                        Colored card
                    </h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Fuga, cum commodi a omnis numquam quod? Totam exercitationem
                        quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
                        nihil dolorum.
                    </p>
                </div> --}}
            </div>
        </div>
    </div>
</x-app-layout>