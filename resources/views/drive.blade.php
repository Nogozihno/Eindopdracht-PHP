<x-layout>
    <x-slot:heading>
        Product | {{ $drive['name'] }}
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $drive['name'] }}</h2>
    <p><strong>Type_of_drive: </strong> {{ $drive['type_of_drive'] }}</p>
    <p><strong>Horsepower: </strong> {{ $drive['horsepower'] }}</p>
    <p><strong>Assembly_time: </strong> {{ $drive['assembly_time'] }}</p>
    <p><strong>Costs: </strong> € {{ $drive['costs'] }}</p>
    <image src="{{ $drive['image'] }}"> 
    
</x-layout>