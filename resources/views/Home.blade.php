<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- {!! $Newvaluekey !!}
    {{$Newvaluekey}} -->

    <!-- @for ($i=0; $i<100; $i++)

    <img style="width:30px height:40px" src="https://laravel.rabbil.com/images/class1.svg">
    @endfor -->
    <!-- foreach loop -->
    <select name="" id="">
    @foreach($Datakey as $country)
    <option value="">{{$country}}</option>
    @endforeach 
    </select>

    <!-- forelse loop  -->

    @forelse($Datakey as $country)
        <li>{{$country}}</li>
    @empty
        <li>No data found</li>
    @endforelse
    
    <!-- if else  -->
    @if($statuskey == true)
        <p>status true</p>
    @elseif($statuskey == false)
        <p>status false</p>
    @else
        <p>status not found</p>
    @endif

    <!-- loop vaiables  -->

    @foreach($Datakey as $countryName)
    @if($loop->even)
    <li>{{$countryName}}</li>
    @endif
    @endforeach

    <!-- php codes -->

    @php
        $num1 = 30;
        $num2 = 20;
        $sum = $num1 + $num2;
        echo $sum;
        
    @endphp
</body>
</html>