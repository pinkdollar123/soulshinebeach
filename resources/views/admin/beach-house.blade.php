@extends('layouts.dashboard')
@section('tabular-form')
<div class="card mt-5">
    <h5 class="card-header bg-info">Soul Shine Beach Houses</h5>
    <div class="card-body table-responsive text-center">
      <table class="table table-striped table-bordered">
        <thead class="bg-info">
                <tr>
                    <th>Room ID</th>
                    <th>House Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Room Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beachhouses as $beachhouse)
                    <tr>
                        <td>{{$beachhouse->room_id}}</td>
                        <td>{{$beachhouse->house_name}}</td>
                        <td>{{$beachhouse->description}}</td>
                        <td>{{$beachhouse->image}}</td>
                        <td>{{$beachhouse->room_price}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection