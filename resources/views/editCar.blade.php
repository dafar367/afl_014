@extends('layout.layout')
@section('title','car edit')


@section('main_content')

    
<form action="{{route('carTable.update', $car->id)}}" method="POST">
@csrf
<input type="hidden" name="_method" value="PATCH">
    <div class="row">

        <div class="col-sm-3"></div>

        <div class="col-sm-6">

        <h1 align="center">Edit Mobil Customer</h1>

            <div class="form-group">

                <label for="" class="label-control">car name :</label>

                <input type="text" name="car_name" class="form-control" value="{{$car->car_name}}">

            </div>

            <div class="form-group">

                <label for="" class="label-control">car owner : </label>

                <input name="car_owner" class="form-control" value="{{$car->car_owner}}">

            </div>

            <div class="form-group">

                <label for="" class="label-control">car plate : </label>

                <input name="car_plate" class="form-control" value="{{$car->car_plate}}">

            </div>

            <div class="form-group">

                <label for="" class="label-control">car description : </label>

                <input name="car_description" class="form-control" value="{{$car->car_description}}">

            </div>

            <div class="form-group">

                <label for="" class="label-control">car service : </label>

                {{-- <input name="car_service" class="form-control" value="{{$car->car_service}}"> --}}

                <select name="car_service" class="form-control">
                    @foreach ($services as $serv)
                    <option value="" selected disabled hidden>{{$serv['service_name']}}</option>
                    
                        <option value="{{$serv['service_code']}}">{{$serv['service_name']}}</option>
                        
                    @endforeach
                </select>
            </div>
            <br>
            <input type="submit" value="submit" class="btn btn-primary">

        </div>

    </div>

</form>
    
@endsection