@extends('layouts.reservation-app')
@section('content')

<div class="row">
    <div class="col-lg text-center" style="margin-top: 5%;">
      <h2 class="display-2 text-white">Update Your Reservation</h2>
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

 <div class="row d-flex justify-content-center align-items-center">

    <div class="col-lg">
        <form action="{{route('reservations.update', $reservation->reservation_id)}}" method="post" class="bg-transparent p-2 border rounded-2 fs-4 text-white"
        style="margin-left: 30%;">
        @csrf
        {{-- @method('PUT') --}}
            <div class="form-group">
              <label for="firstname">First Name</label>
              <input type="text" name="first_name" id="first_name" class="form-control p-2 fs-6" placeholder="Enter first name" required value="{{$reservation->first_name}}">
            </div>

            <div class="form-group">
              <label for="last_name">Last Name</label>
              <input type="text" name="last_name" id="last_name" class="form-control p-2 fs-6" placeholder="Enter last name"required value="{{$reservation->last_name}}">
            </div>
            
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="email" name="email" id="email" class="form-control p-2 fs-6" placeholder="Enter  email"required value="{{$reservation->email}}">
            </div>

            <div class="form-group">
              <label for="Phone">Phone Number</label>
              <input type="string" name="phone_number" id="phone_number" class="form-control p-2 fs-6" placeholder="Enter Phone Number"required value="{{$reservation->phone_number}}">
            </div>

            <div class="form-group d-flex justify-content-between">

              <div class="col p-2">
                <label for="start_date">From</label>
                <input type="date" name="start_date" id="start_date" class="form-control p-2 fs-6" placeholder="Choose Date From"required value="{{$reservation->start_date}}" 
                @foreach($availableDates as $date)
                min="{{ $date->format('Y-m-d') }}"
                @endforeach>
              </div>

              <div class="col p-2">
                <label for="start_date">To</label>
                <input type="date" name="end_date" id="end_date" class="form-control p-2 fs-6 datepicker" placeholder="Choose Date To"required value="{{$reservation->end_date}}" 
                @foreach($availableDates as $date)
                min="{{ $date->format('Y-m-d') }}"
                @endforeach>
              </div>

            </div>

            <div class="form-group">
              <label for="room_number">Room</label>
              <select name="room_number" id="room_number" class="form-control p-2 fs-6" required>
                <option value="" selected disabled>Select your room</option>
                <option value='1' {{$reservation->room_number == '1' ? 'selected' : ''}}>Sea Gulls</option>
                <option value='2'{{$reservation->room_number == '2' ? 'selected' : ''}}>Sea Haven</option>
              </select>
            </div>

            <div class="form-group">
                <label for="guest_number">Guests count</label>
                <input type="text" name="guest_number" id="guest_number" class="form-control p-2 fs-6" placeholder="Enter your guests count" required value="{{$reservation->guest_number}}">
              </div>

           <div class="col d-flex justify-content-between p-2">
            <div class="col">
              <input type="reset"  class="btn btn-danger"  value="Reset"  name="reset">
              <input type="submit" class="btn btn-primary float-right" value="Submit" name="submit">
            </div>
            <div class="col ">
              <a href="/" class="btn btn-info">Cancel</a>
            </div>
           </div>
          </form>
    </div>

    <div class="col-lg">
        <div class="card p-3 border-0 bg-transparent text-light fw-semibold" style="margin-right: 30%;">
            <div class="card-title">
                <h2 class="card-text display-3">
                    Paradise Awaits You at Soul Shine Beach!
                </h2>
            </div>
            <div class="card-body">
                <p class="card-text fs-5">
                    Embrace a once in a lifetime getaway experience with Soul Shine Beach. Escape from the city and relax in this beach-house in Palawan. Book now and discover the beauty of nature, clear skies, and aquamarine waters. Come to Soul Shine Beach for the ultimate seaside escape.
                </p>
            </div>
        </div>
    </div>
 </div>
 
@endsection

