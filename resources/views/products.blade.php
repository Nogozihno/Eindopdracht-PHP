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
                        <p> {{ $chassis['number_of_wheels'] }}</p>
                        <p> {{ $chassis['type_of_vehicle'] }}</p>
                        <p> {{ $chassis['size'] }}</p>
                        <p> {{ $chassis['assembly_time'] }}</p>
                        <p> € {{ $chassis['costs'] }}</p>
                    </a>
                    <div>
                        <a href="#" class="btn btn-default" role="button" style="border: 1px solid black; border-radius: 5px; padding: 1px;">Add to card</a>
                    </div>
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
                        <p> {{ $seat['amount'] }}</p>
                        <p> {{ $seat['upholstery'] }}</p>
                        <p> {{ $seat['assembly_time'] }}</p>
                        <p> € {{ $seat['costs'] }}</p>
                    </a>
                    <div>
                        <a href="#" class="btn btn-default" role="button" style="border: 1px solid black; border-radius: 5px; padding: 1px;">Add to card</a>
                    </div>
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
                        <p> {{ $drive['type_of_drive'] }}</p>
                        <p> {{ $drive['horsepower'] }}</p>
                        <p> {{ $drive['assembly_time'] }}</p>
                        <p> € {{ $drive['costs'] }}</p>
                    </a>
                    <div>
                        <a href="#" class="btn btn-default" role="button" style="border: 1px solid black; border-radius: 5px; padding: 1px;">Add to card</a>
                    </div>
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
                        <p> {{ $steering_wheel['special_adjustment'] }}</p>
                        <p> {{ $steering_wheel['shape'] }}</p>
                        <p> {{ $steering_wheel['assembly_time'] }}</p>
                        <p> € {{ $steering_wheel['costs'] }}</p>
                    </a>
                    <div>
                        <a href="#" class="btn btn-default" role="button" style="border: 1px solid black; border-radius: 5px; padding: 1px;">Add to card</a>
                    </div>
                </li>
            @endforeach
        </ul>

        <h2><br><br>Wheels</h2>
        <ul style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center; padding: 0;">
            @foreach ($wheels as $wheel)
                <li style="list-style-type: none; border: 1px solid #ccc; width: 380px; height: 500px; padding: 10px;">
                    <a href="/wheel/{{ $wheel['id'] }}" class="text-blue-500 hover:underline; width: 300px; height: 300px; padding: 7px; text-align: center; color: black">
                        <image src="{{ $wheel['image'] }}"> 
                        <h2>{{ $steering_wheel['name'] }}:</h2>
                        <p> {{ $steering_wheel['type_of_tire'] }}</p>
                        <p> {{ $steering_wheel['diameter'] }}</p>
                        <p> {{ $steering_wheel['amount'] }}</p>
                        <p> {{ $steering_wheel['compatible_with_chassis'] }}</p>
                        <p> {{ $steering_wheel['assembly_time'] }}</p>
                        <p> € {{ $steering_wheel['costs'] }}</p>
                    </a>
                    <div>
                        <a href="#" class="btn btn-default" role="button" style="border: 1px solid black; border-radius: 5px; padding: 1px;">Add to card</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

</x-layout>
