<x-layout>
    <x-slot:heading>
        Shoppingbag Page
    </x-slot:heading>

   
    <ul>
    <?php $totalPrice = 0;?>
    @foreach ($products as $product)
        <li class="flex max-w-sm space-between">
        <?php $totalPrice += $product['price'];?>
            <image class="size-12" src="{{ $product['image'] }}"> 
            <h2>{{ $product['name'] }}:</h2>
            <p> {{ $product['price'] }}</p>
        </li>
    @endforeach
        <li>total price: {{$totalPrice }}</li>
    </ul>
    <a href="/checkout" class="text-blue-500 hover:underline">go to checkout</a>
</x-layout>
