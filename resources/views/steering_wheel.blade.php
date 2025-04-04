<x-layout>
    <x-slot:heading>
        Product | {{ $steering_wheel['name'] }}
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $steering_wheel['name'] }}</h2>
    <p><strong>Special adjustment: </strong> {{ $steering_wheel['special_adjustment'] }}</p>
    <p><strong>Shape: </strong> {{ $steering_wheel['shape'] }}</p>
    <p><strong>Assembly time: </strong> {{ $steering_wheel['assembly_time'] }}</p>
    <p><strong>Costs: </strong> € {{ $steering_wheel['costs'] }}</p>
    <image src="{{ $steering_wheel['image'] }}"> 
    
</x-layout>
