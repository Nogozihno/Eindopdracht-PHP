<x-layout>
    <x-slot:heading>
        Contact Page
    </x-slot:heading>

    <form action="/submit-form" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email*:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message*:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

        <label for="type">Type of Message:</label><br>
        <select id="type" name="type">
            <option value="hulp">Hulp</option>
            <option value="sales">Sales</option>
            <option value="tips">Tips</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</x-layout>
