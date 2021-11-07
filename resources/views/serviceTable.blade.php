@extends('layout.layout')
@section('title','car service')


@section('main_content')
@section('page_title', 'service table')

<div class="container"><a href="{{route('serviceTable.create')}}"><button type="submit" class="btn btn-primary mb-2">Create service table</button></a> </div>

    <table class="table table-striped shadow-lg p-3 mb-5 bg-white rounded">
        <tr>
            <th>No </th>
            <th>Service Name </th>
            <th>Service code </th>
            <th>Action </th>
        </tr>

        @foreach ($services as $serv)
            <tr>
                
                <td>{{$loop->index+1}}</td>
                <td>
                    {{$serv['service_name']}}
                </td>
                <td>
                    {{$serv['service_code']}}
                </td>
                <td>
                    <div class="d-grid d-md-flex">
                        <a href="{{route('serviceTable.show', $serv['service_code'] )}}"><button type="button" class="btn btn-info me-md-2">Show</button></a>
                        <a href="{{route('serviceTable.edit', $serv['service_code'] )}}"><button type="button" class="btn btn-warning me-md-2">Edit</button></a>
                        <form action="{{route('serviceTable.destroy', $serv['service_code'] )}}" method="post">
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
    
