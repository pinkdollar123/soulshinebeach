@extends('layouts.dashboard')
@section('tabular-form')
<div class="card mt-5">
  <h5 class="card-header bg-info">Soul Shine Guests</h5>
  <div class="card-body table-responsive text-center">
    <table class="table table-striped table-bordered">
      <thead class="bg-info">
        <tr>
            <th>Guest ID</th>
            <th>Guest Name</th>
            <th>Room Number</th>
            <th>Check-in Date</th>
            <th>Check-out Date</th>
        </tr>
       </thead>
            <tbody>
                @foreach ($guests as $guest)
                <tr>
                  <td>{{ $guest->user_id}}</td>
                  <td>{{ $guest->first_name }}</td>
                  <td>{{ $guest->room_number }}</td>
                  <td>{{ $guest->start_date }}</td>
                  <td>{{ $guest->end_date }}</td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
