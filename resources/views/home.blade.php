@extends('layouts.main')
@section('content')
<div class=''>
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
            Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. 
            Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. </p>
        </div><br>
        @foreach($array as $showArray)
            <div class="bg-white border rounded-lg shadow-md p-4">
                <img src="{{ asset($showArray['path']) }}" alt="{{ $showArray['title'] }}" class="w-320 h-32 object-cover mb-2">
                <h3 class="font-bold text-lg">{{ $showArray['title'] }}</h2>
                <p class="text-gray-700">{{ $showArray['price'] }}₽</p>
            </div>
</div>
        @endforeach
        @endsection