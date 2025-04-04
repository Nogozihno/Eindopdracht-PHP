<x-layout>
    <x-slot:heading>
        Productslisting Listings
    </x-slot:heading>

    <div style="display: flex; flex-direction: column; gap: 60px; align-items: center;">
        <h2>Chassis</h2>
        <ul style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center; padding: 0;">
            @foreach ($chassises as $chassis)
                <li style="list-style-type: none; border: 1px solid #ccc; width: 380px; height: 500px; padding: 10px;">
                    <a href="/chassis/{{ $chassis['id'] }}" class="text-blue-500 hover:underline; width: 300px; height: 300px; padding: 7px; text-align: center; color: black">
                        <image src="{{ $chassis['image'] }}"> 
                        <h2>{{ $chassis['name'] }}:</h2>
                        <p> € {{ $chassis['costs'] }}</p>
                    </a>
                </li>
            @endforeach
        </ul> 

        <h2><br><br>Seats</h2>
        <ul style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center; padding: 0;">
            @foreach ($seats as $seat)
                <li style="list-style-type: none; border: 1px solid #ccc; width: 380px; height: 500px; padding: 10px;">
                    <a href="/seat/{{ $seat['id'] }}" class="text-blue-500 hover:underline; width: 300px; height: 300px; padding: 7px; text-align: center; color: black">
                        <image src="{{ $seat['image'] }}"> 
                        <h2>{{ $seat['name'] }}:</h2>
                        <p> € {{ $seat['costs'] }}</p>
                    </a>
                </li>
            @endforeach
        </ul>

        <h2><br><br>Drives</h2>
        <ul style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center; padding: 0;">
            @foreach ($drives as $drive)
                <li style="list-style-type: none; border: 1px solid #ccc; width: 380px; height: 500px; padding: 10px;">
                    <a href="/drive/{{ $drive['id'] }}" class="text-blue-500 hover:underline; width: 300px; height: 300px; padding: 7px; text-align: center; color: black">
                        <image src="{{ $drive['image'] }}"> 
                        <h2>{{ $drive['name'] }}:</h2>
                        <p> € {{ $drive['costs'] }}</p>
                    </a>
                </li>
            @endforeach
        </ul>

        <h2><br><br>Wheels</h2>
        <ul style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center; padding: 0;">
            @foreach ($wheels as $wheel)
                <li style="list-style-type: none; border: 1px solid #ccc; width: 380px; height: 500px; padding: 10px;">
                    <a href="/wheel/{{ $wheel['id'] }}" class="text-blue-500 hover:underline; width: 300px; height: 300px; padding: 7px; text-align: center; color: black">
                        <image src="{{ $wheel['image'] }}"> 
                        <h2>{{ $wheel['name'] }}:</h2>
                        <p> {{ $wheel['type_of_tire'] }}</p>
                        <p> {{ $wheel['diameter'] }}</p>
                        <p> {{ $wheel['amount'] }}</p>
                        <p> {{ $wheel['compatible_with_chassis'] }}</p>
                        <p> {{ $wheel['assembly_time'] }}</p>
                        <p> € {{ $wheel['costs'] }}</p>
                    </a>
                </li>
            @endforeach
        </ul>

        <h2><br><br>Steering Wheels</h2>
        <ul style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center; padding: 0;">
            @foreach ($steering_wheels as $steering_wheel)
                <li style="list-style-type: none; border: 1px solid #ccc; width: 380px; height: 500px; padding: 10px;">
                    <a href="/steering_wheel/{{ $steering_wheel['id'] }}" class="text-blue-500 hover:underline; width: 300px; height: 300px; padding: 7px; text-align: center; color: black">
                        <image src="{{ $steering_wheel['image'] }}"> 
                        <h2>{{ $steering_wheel['name'] }}:</h2>
                        <p> € {{ $steering_wheel['costs'] }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

</x-layout>
