@extends('layout.layout')
@section('title','project')

@section('page_title', 'show detail cars')
   
@section('main_content')

    <div class="mt-9 p-5 bg-primary text-white rounded">
        <h1><strong>service name :</strong> {{$services['service_name']}}</h1>
        <p><strong> code :</strong> {{$services['service_code']}}</p>
        <p><strong> service description: </strong> {{$services['service_description']}}</p>
    </div>
<br>
<br>

<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No </th>
                <th>Car Name </th>
                <th>Car owner </th>
                <th>Car description </th>
            </tr>
        </thead>
        @php
            $index = 1
        @endphp
        @foreach ($services->cars as $car)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$car['car_name']}}</td>
                <td>{{$car['car_owner']}}</td>
                <td>{{$car['car_description']}}</td>
            </tr>
            
        @endforeach
    </table>
</div>
    

@endsection