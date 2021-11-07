@extends('layout.layout')
@section('title','car create')


@section('main_content')

    
<form action="{{route('carTable.store')}}" method="post">
@csrf
    <div class="row">

        <div class="col-sm-3"></div>

        <div class="col-sm-6">

        <h1 align="center">tambah Mobil Customer</h1>

            <div class="form-group">

                <label for="" class="label-control">car name :</label>

                <input type="text" name="car_name" class="form-control">

            </div>

            <div class="form-group">

                <label for="" class="label-control">car owner : </label>

                <input name="car_owner" class="form-control">

            </div>

            <div class="form-group">

                <label for="" class="label-control">car plate : </label>

                <input name="car_plate" class="form-control">

            </div>

            <div class="form-group">

                <label for="" class="label-control">car description : </label>

                <input name="car_description" class="form-control">

            </div>

            <div class="form-group">

                <label for="" class="label-control">car service : </label>

                {{-- <input name="car_service" class="form-control"> --}}

                <select name="car_service" class="form-control">
                    <option value="" selected disabled hidden>pilih sini gan</option>
                    @foreach ($services as $serv)
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