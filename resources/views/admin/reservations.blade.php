@extends('layouts.dashboard')
@section('tabular-form')
<div class="container mt-5">
    <div class="card">
      <h5 class="card-header bg-info">Soul Shine Reservations</h5>
      <div class="card-body table-responsive text-center">
        <table class="table table-striped table-bordered">
          <thead class="bg-info">
            <tr>
              <th class="text-nowrap">Reservation#</th>
              <th class="text-nowrap">Guest Name</th>
              <th class="text-nowrap">House-Type</th>
              <th class="text-nowrap">Check-in</th>
              <th class="text-nowrap">Check-out</th>
              <th class="text-nowrap">Amount</th>
              <th class="text-center text-nowrap">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($reservations as $reservation)
              <tr>
                <td>{{ $reservation->reservation_id }}</td>
                <td>{{ $reservation->first_name }}</td>
                <td>{{ $reservation->room->house_name }}</td>
                <td>{{ $reservation->start_date }}</td>
                <td>{{ $reservation->end_date }}</td>
                <td>{{ $reservation->price }}</td>
                <td>
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <a href="{{route('reservations.edit', $reservation->reservation_id)}}" class="btn btn-warning" aria-describedby="update">Update</a>
                            <div id="update" class="form-text text-wrap">If you need to make any changes please click on update button.
                            </div>
                        </div>
                        <div class="col-6">
                            <form action="{{route('reservations.destroy', $reservation->reservation_id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                              <input type="submit" name="destroy" id="destroy" class="btn btn-danger" value="Cancel" aria-describedby="destroy">
                              <div id="destroy" class="form-text text-wrap">Kindly avoid cancelling as this will confirm your cancellation immediately.
                              </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection