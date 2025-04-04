<x-layout>
    <x-slot:heading>
        Checkout Page
    </x-slot:heading>
    
    <?php $totalPrice = 0;?>
    @foreach ($products as $product)
        <?php $totalPrice += $product['price'];?>
    @endforeach
    
    <form action="/thankyou" method="get">
        <!-- Shipping Address Section -->
        <div class="mb-6">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Shipping Address</h3>
            
            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-600">Shipping Address:</label>
                <input type="text" id="address" name="address" placeholder="Enter your address" required class="mt-2 w-full p-3 border border-gray-300 rounded-md text-gray-700" />
            </div>

            <div class="mb-4">
                <label for="postal-code" class="block text-sm font-medium text-gray-600">Postal Code:</label>
                <input type="text" id="postal-code" name="postal-code" placeholder="Enter your postal code" required class="mt-2 w-full p-3 border border-gray-300 rounded-md text-gray-700" />
            </div>

            <div class="mb-4">
                <label for="city" class="block text-sm font-medium text-gray-600">City:</label>
                <input type="text" id="city" name="city" placeholder="Enter your city" required class="mt-2 w-full p-3 border border-gray-300 rounded-md text-gray-700" />
            </div>
        </div>

         <!-- Payment Details Section -->
         <div class="mb-6">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Payment Details</h3>
            
            <div class="mb-4">
                <label for="payment-method" class="block text-sm font-medium text-gray-600">Choose Payment Method:</label>
                <select id="payment-method" name="payment-method" class="mt-2 w-full p-3 border border-gray-300 rounded-md text-gray-700">
                    <option value="credit-card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank-transfer">ideal</option>
                </select>
            </div>

        </div>

        <!-- Total Price Section -->
        <div class="mb-6">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Order Summary</h3>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Total Price: {{ $totalPrice}}</label>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full bg-green-500 text-white p-3 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
            Proceed to Payment
        </button>
    </form>
    
   
</x-layout>
