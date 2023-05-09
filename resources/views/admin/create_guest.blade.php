@extends('layouts.dashboard')
@section('tabular-form')
  <div class="row">
    <div class="col-lg-6">
      <h2>Add Resources</h2>
    </div>
  </div>
  @if ($errors->any())
    <div class="alert alert-danger">
      <strong>Errors encountered!</strong>
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
 @endif
  <form action="{{route('beachhouse.storeBeach')}}" method="post" class="bg-info p-2 border rounded-2 w-50 fs-4">
    @csrf
    <div class="form-group">
      <label for="house_name">House Name</label>
      <input type="text" name="house_name" id="house_name" class="form-control p-2 fs-6" placeholder="Record a house name ">
    </div>

    <div class="form-group">
      <label for="Description">Description</label>
      <textarea cols="5" rows="5" type="text" name="description" id="description" class="form-control p-2 fs-6" placeholder="Enter description"></textarea>
    </div>
  
    <div class="form-group">
      <label for="room_price">House Price</label>
      <input type="number" step="0.01" name="room_price" id="room_price" class="form-control p-2 fs-6" placeholder="Enter House Price">
    </div>

    <div class="form-group">
      <label for="image">Image</label>
      <input type="text" name="image" id="image" class="form-control p-2 fs-6" placeholder="Enter image">
    </div>

    <div class="row">
      <div class="col-6">
        <input type="reset" class="btn btn-danger w-100 m-2" value="Reset" name="reset">
      </div>

      <div class="col-6">
        <input type="submit" class="btn btn-success w-100 m-2" value="Submit" name="submit">
      </div>
    </div>
  </form>
  @endsection

  