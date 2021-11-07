@extends('layout.layout')
@section('title','service create')


@section('main_content')

    
<form action="{{route('serviceTable.store')}}" method="post">
@csrf
    <div class="row">

        <div class="col-sm-3"></div>

        <div class="col-sm-6">

        <h1 align="center">tambah Jasa Service</h1>

            <div class="form-group">

                <label for="" class="label-control">service name :</label>

                <input type="text" name="service_name" class="form-control">

            </div>

            <div class="form-group">

                <label for="" class="label-control">service code : </label>

                <input name="service_code" class="form-control">

            </div>

            <div class="form-group">

                <label for="" class="label-control">service description : </label>

                <input name="service_description" class="form-control">

            </div>


            <input type="submit" value="submit" class="btn btn-primary">

        </div>

    </div>

</form>
    
@endsection