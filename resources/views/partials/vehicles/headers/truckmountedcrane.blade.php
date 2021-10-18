<p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
    @if($vehicle->odometer)
    Odometer: {{ $vehicle->odometer }}&nbsp;
    @endif
    
    @if($vehicle->engine_hours)
    Hours: {{ $vehicle->engine_hours }}
    @endif
</p>