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
            <h2>Cars Update</h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            @if(Session::has("status"))
        <br>
        <div class="alert alert-success">
          {{Session::get('status')}}

        </div>
      @endif
            <form action="{{ route('admin.edit', $car->id) }}" method="POST" id="demo-form2"
              enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Make
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="make" value="{{$car->make}}"
                    class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Model
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="model" value="{{$car->model}}"
                    class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Price_per_day
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="price_per_day" value="{{$car->price_per_day}}"
                    class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Year
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="year" value="{{$car->year}}"
                    class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mileage
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="mileage" value="{{$car->mileage}}"
                    class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Transmission
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="transmission" value="{{$car->transmission}}"
                    class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Seats
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="seats" value="{{$car->seats}}"
                    class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Luggage
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="luggage" value="{{$car->luggage}}"
                    class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fuel
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="fuel" value="{{$car->fuel}}"
                    class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="description" name="description" class=" form-control">{{$car->description}}</textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">
                  Status
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="status" name="status" class="form-control col-md-7 col-xs-12">
                    <option value="active" {{ $car->status == 'active' ? 'selected' : '' }}>Aktiv</option>
                    <option value="inactive" {{ $car->status == 'inactive' ? 'selected' : '' }}>Deaktiv</option>
                    <option value="pending" {{ $car->status == 'pending' ? 'selected' : '' }}>Gözləmə</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="first-name" name="image" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              @if($car->image)
          <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="{{ Storage::url($car->image) }}" alt="Car Image" style="max-width: 100%; height: auto;">
          </div>
        @endif

              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="" class="btn btn-success">Update</button>
                </div>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- /page content -->
@endsection