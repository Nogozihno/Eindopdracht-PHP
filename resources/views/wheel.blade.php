<x-layout>
    <x-slot:heading>
        Product | {{ $wheel['name'] }}
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $wheel['name'] }}</h2>
    <p><strong>Type of tire: </strong> {{ $wheel['type_of_tire'] }}</p>
    <p><strong>Diameter: </strong> {{ $wheel['diameter'] }}</p>
    <p><strong>Amount: </strong> {{ $wheel['amount'] }}</p>
    <p><strong>Compatible with chassis: </strong> {{ $wheel['compatible_with_chassis'] }}</p>
    <p><strong>Assembly time: </strong> {{ $wheel['assembly_time'] }}</p>
    <p><strong>Costs: </strong> € {{ $wheel['costs'] }}</p>
    <image src="{{ $wheel['image'] }}"> 
    
</x-layout>