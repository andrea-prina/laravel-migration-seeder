<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>
    
    @forelse ($todayTrains as $train)
        
        <ul>
            <li>{{ $train->company . ' N.' . $train->train_code }}</li>
            <li>{{ $train->departure_station . ' (' .  $train->departure_time . ') → ' . $train->arrival_station . ' (' .  $train->arrival_time . ')'}}</li>
            
            @if ($train->cancelled == true)
                
            <li> {{ 'Status: CANCELLED' }}</li>

            @else

                @if ($train->on_time == true)
                    <li> {{ 'Status: ON TIME' }}</li>
                @else
                    <li> {{ 'Status: DELAYED (' . $train->delay_minutes . "')" }}</li>
                @endif

            @endif
        </ul>
        <hr>

    @empty
        
    @endforelse

</body>
</html>