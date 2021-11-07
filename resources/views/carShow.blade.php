@extends('layout.layout')
@section('title','project')

@section('page_title', 'show detail cars')
   
@section('main_content')



    <div class="mt-20 p-5 bg-primary text-white rounded ">

        <h1>car owner : {{$cars['car_owner']}}</h1>
        <p>car plate : {{$cars['car_plate']}}</p>
        <p>car name : {{$cars['car_name']}}</p>
        <p>type of service : {{$cars['car_service']}}</p>
        <p>car description : {{$cars['car_description']}}</p>
        

    </div>
<br>
<br>
    {{-- <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th >no </th>
                    <th >Code </th>
                    <th >mata kuliah </th>
                    <th >Sks </th>
                    <th >description </th>
                </tr>
            </thead>

            <tbody>
                @php
                    $index = 1
                @endphp
                @foreach ($courses->projects as $pro)
                <tr>
                    <td>{{$loop->index+1 }}</td>
                    <td>{{$pro['code']}}</td>
                    <td>{{$pro['mata_kuliah']}}</td>
                    <td>{{$pro['semester']}}</td>
                    <td>{{$pro['description']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
    
@endsection