<x-layout>
    <x-slot:heading>
        Product | {{ $seat['name'] }}
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $seat['name'] }}</h2>
    <p><strong>Amount: </strong> {{ $seat['amount'] }}</p>
    <p><strong>Upholstery: </strong> {{ $seat['upholstery'] }}</p>
    <p><strong>Assembly time: </strong> {{ $seat['assembly_time'] }}</p>
    <p><strong>Costs: </strong> {{ $seat['costs'] }}</p>
    <image src="{{ $seat['image'] }}"> 
    
</x-layout>
