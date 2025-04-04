<x-layout>
    <x-slot:heading>
        Product | {{ $chassis['name'] }}
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $chassis['name'] }}</h2>
    <p><strong>Number of wheels: </strong> {{ $chassis['number_of_wheels'] }}</p>
    <p><strong>Type of vehicle: </strong> {{ $chassis['type_of_vehicle'] }}</p>
    <p><strong>Size: </strong> {{ $chassis['size'] }}</p>
    <p><strong>Assembly time: </strong> {{ $chassis['assembly_time'] }}</p>
    <p><strong>Costs: </strong> € {{ $chassis['costs'] }}</p>
    <image src="{{ $chassis['image'] }}"> 
    
</x-layout>
