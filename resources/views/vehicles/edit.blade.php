<x-app-layout title="Dashboard">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"> 
        </h2>

        <div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="flex items-center text-sm px-4">
                    <img class="object-cover w-48 h-full rounded-md" src="{{ $vehicle->image }}" alt="" loading="lazy" />
                </div>
                <div>
                    <p class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        {{ $vehicle->title }}
                    </p>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        {{ $vehicle->titleDetail }}
                    </p>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>