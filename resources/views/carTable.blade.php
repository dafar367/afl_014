@extends('layout.layout')
@section('title','car table')


@section('main_content')
@section('page_title', 'car table')
    
<div class="container"><a href="{{route('carTable.create')}}"><button type="submit" class="btn btn-primary mb-2">Create car table</button></a> </div>


    <table class="table table-striped shadow-lg p-3 mb-5 bg-white rounded">
        
        <tr>
            <th>No </th>
            <th>Car Name </th>
            <th>Car owner </th>
            <th>Car Service </th>
            <th>Action </th>
        </tr>

        @foreach ($cars as $car)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>
                    {{$car['car_name']}}
                </td>
                <td>
                    {{$car['car_owner']}}
                </td>
                <td>
                    <a href="{{route('serviceTable.show', $car->service->service_code)}}">
                        {{$car->service->service_name}}
                    </a>
                </td>
                <td>
                    <div class="d-grid d-md-flex">
                        <a href="{{route('carTable.show', $car['id'] )}}"><button type="button" class="btn btn-info me-md-2">Show</button></a>
                        <a href="{{route('carTable.edit', $car['id'] )}}"><button type="button" class="btn btn-warning me-md-2">Edit</button></a>
                        <form action="{{route('carTable.destroy', $car['id'] )}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        
    </table>
@endsection
    
