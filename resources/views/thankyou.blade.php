<x-layout>
    <x-slot:heading>
        Thank you
    </x-slot:heading>
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
    <h2 class="text-3xl font-semibold text-gray-800 mb-6">Thank You for Your Order!</h2>
    
    <p class="text-lg text-gray-700 mb-4">We’re excited to confirm that your order has been successfully received!</p>

    <!-- Order Summary Section -->
    <div class="mb-6">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Order Summary</h3>
        <p class="text-lg text-gray-600">Order Number: <span class="font-medium text-gray-800">#12345</span></p>
    </div>

    <!-- Next Steps Section -->
    <div class="mb-6">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">What Happens Next?</h3>
        <ul class="list-inside list-disc space-y-2 text-gray-600">
            <li><span class="font-medium">Shipping:</span> Your order will be packed and shipped within the next 1-2 business days.</li>
            <li><span class="font-medium">Customer Support:</span> If you have any questions or need assistance, our customer support team is here for you! Feel free to <a href="/contact" class="font-medium text-blue-600">reach out to us</a>.</li>
        </ul>
    </div>

    <!-- Final Message Section -->
    <div>
        <p class="text-lg text-gray-700">Thank you for choosing us! We hope you enjoy your purchase and look forward to serving you again soon.</p>
    </div>
</div>
</x-layout>
