@extends('layout.layout')
@section('title','service create')


@section('main_content')

    
<form action="{{route('serviceTable.update', $service->service_code)}}" method="POST">
@csrf
<input type="hidden" name="_method" value="PATCH">
    <div class="row">

        <div class="col-sm-3"></div>

        <div class="col-sm-6">

        <h1 align="center">edit Jasa Service</h1>

            <div class="form-group">

                <label for="" class="label-control">service name :</label>

                <input type="text" name="service_name" class="form-control" value="{{$service->service_name}}">

            </div>

            <div class="form-group">

                <label for="" class="label-control">service code : </label>

                <input name="service_code" class="form-control" value="{{$service->service_code}}" >

            </div>

            <div class="form-group">

                <label for="" class="label-control">service description : </label>

                <input name="service_description" class="form-control" value="{{$service->service_description}}">

            </div>


            <input type="submit" value="submit" class="btn btn-primary">

        </div>

    </div>

</form>
    
@endsection