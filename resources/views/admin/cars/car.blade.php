@extends('admin_layout.master')

@section('contect')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <br>
            <br>
            <h2>Cars</h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="{{route('admin.car_create')}}"><button class="btn btn-success btn-xs">Add New</button></a>

            </div>
          </div>
          <div class="x_content">


            @if(Session::has("status"))
        <br>
        <div class="alert alert-success">
          {{Session::get('status')}}

        </div>
      @endif


            <!-- Div İçerik Başlangıç -->
            <input type="hidden" {{$say = '1'}}>

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
              cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Nomber</th>
                  <th>Make</th>
                  <th>Model</th>
                  <th>Price_per_day</th>
                  <th>Year</th>
                  <th>Mileage</th>
                  <th>Transmission</th>
                  <th>Seats</th>
                  <th>Luggage</th>
                  <th>Fuel</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Image</th>

                  <th>
                    <center>Update</center>
                  </th>
                  <th>
                    <center>Delete</center>
                  </th>
                </tr>
              </thead>

              <tbody>

                @foreach($cars as $car)
          <tr>
            <td width="20">{{$say}}</td>
            <td>{{$car->make}}</td>
            <td>{{$car->model}}</td>
            <td>{{$car->price_per_day}}</td>
            <td>{{$car->year}}</td>
            <td>{{$car->mileage}}</td>
            <td>{{$car->transmission}}</td>
            <td>{{$car->seats}}</td>
            <td>{{$car->luggage}}</td>
            <td>{{$car->fuel}}</td>
            <td>{{$car->description}}</td>
            <td>{{$car->status}}</td>
            <td><img src="{{ Storage::url($car->image) }}" alt="Car Image"> </td>
            <td>
            <center><a href="{{route('admin.car-update', ['id' => $car->id])}}"><button
                class="btn btn-primary btn-xs"><i></i></button></a></center>
            </td>
            <td>
            <center><a href="{{ route('admin.car_delete', $car->id) }}"><button
                class="btn btn-danger btn-xs"><i></i></button></a>
            </center>
            </td>
          </tr>
          <input type="hidden" {{$say++}}>
        @endforeach
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- /page content -->
@endsection