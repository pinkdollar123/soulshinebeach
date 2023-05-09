<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Reservations;
use Illuminate\Http\Request;
Use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $reservartions = Reservations::all();
        // return view('admin.reservations', compact('reservations'));
        $reservations = Reservations::where('user_id', Auth::user()->id)->get();
        return view('reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    $user = Auth::user();
    $bookings = $user->reservations;
  
    $bookedDates = [];

    $bookings = Reservations::all();

    foreach ($bookings as $booking) {
        $startDate = Carbon::createFromFormat('Y-m-d', $booking->start_date);
        $endDate = Carbon::createFromFormat('Y-m-d', $booking->end_date);
        $bookedDates = array_merge($bookedDates, $startDate->daysUntil($endDate)->toArray());
    }

    $bookingsInRange = Reservations::whereBetween('start_date', [$startDate, $endDate])->orWhereBetween('end_date', [$startDate, $endDate])->get();

    $availableDates = [];
    $startDate = Carbon::today();
    $endDate = Carbon::today()->addMonths(6);
    for ($date = $startDate; $date->lessThanOrEqualTo($endDate); $date->addDay()) {
        $isBooked = false;
        foreach ($bookingsInRange as $booking) {
            $startDate = Carbon::createFromFormat('Y-m-d', $booking->start_date);
            $endDate = Carbon::createFromFormat('Y-m-d', $booking->end_date);
            for ($bookedDate = $startDate; $bookedDate->lessThanOrEqualTo($endDate); $bookedDate->addDay()) {
                if ($bookedDate->isSameDay($date)) {
                    $isBooked = true;
                    break;
                }
            }
            if ($isBooked) {
                break;
            }
        }
        if (!$isBooked) {
            $availableDates[] = $date;
        }
    }

    return view('authguest.reservation', [
        'availableDates' => $availableDates,
    ]);
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //converts the input data to variables below
        $start_date = Carbon::createFromFormat('Y-m-d', $request->input('start_date'))->startOfDay();
        $end_date = Carbon::createFromFormat('Y-m-d', $request->input('end_date'))->endOfDay();
        
        // check if the selected dates are available
        $reservations = Reservations::where('start_date', '<=', $end_date)->where('end_date','>=',$start_date)->get();

        if ($reservations->count()>0 )
            {
                return back()->withInput()->withErrors(['message' => 'The selected dates are not available']);
            };
        
        // Calculate the price of the selected dates

        // Set the price per day for each room
        $room1Price = 4500;
        $room2Price = 6500;

        // Calculate the number of days between the start and end dates
        $days = $end_date->diffInDays($start_date) + 1;

        // Determine which room the user selected
        if ($request->input('room_number') == 1) {
            $pricePerday = $room1Price;
        } else if ($request->input('room_number') == 2) {
            $pricePerday = $room2Price;
        }

        // Calculate the total price
        $totalPrice = $days * $pricePerday;
        
        // store data to db

        $reservation = new Reservations();
        $reservation->first_name = $request->input('first_name');
        $reservation->last_name = $request->input('last_name');
        $reservation->email = $request->input('email');
        $reservation->phone_number = $request->input('phone_number');
        $reservation->room_number = $request->input('room_number');
        $reservation->guest_number = $request->input('guest_number');
        $reservation->start_date = $start_date;
        $reservation->end_date = $end_date;
        $reservation->price = $totalPrice;
        $reservation->user_id = Auth::id();
        $reservation->save();

        return redirect('reserved')->with('success','Reservation has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       
        $reservations = Reservations::with('room')->where('user_id', Auth::user()->id)->get();
        return view('authguest.reserved', compact('reservations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $user = Auth::user();
        $bookings = $user->reservations;
        
        // Trial and error
        $bookedDates = [];
    
        $bookings = Reservations::all();
    
        foreach ($bookings as $booking) {
            $startDate = Carbon::createFromFormat('Y-m-d', $booking->start_date);
            $endDate = Carbon::createFromFormat('Y-m-d', $booking->end_date);
            $bookedDates = array_merge($bookedDates, $startDate->daysUntil($endDate)->toArray());
        }
    
        $bookingsInRange = Reservations::whereBetween('start_date', [$startDate, $endDate])->orWhereBetween('end_date', [$startDate, $endDate])->get();
    
        $availableDates = [];
        $startDate = Carbon::today();
        $endDate = Carbon::today()->addMonths(6);
        for ($date = $startDate; $date->lessThanOrEqualTo($endDate); $date->addDay()) {
            $isBooked = false;
            foreach ($bookingsInRange as $booking) {
                $startDate = Carbon::createFromFormat('Y-m-d', $booking->start_date);
                $endDate = Carbon::createFromFormat('Y-m-d', $booking->end_date);
                for ($bookedDate = $startDate; $bookedDate->lessThanOrEqualTo($endDate); $bookedDate->addDay()) {
                    if ($bookedDate->isSameDay($date)) {
                        $isBooked = true;
                        break;
                    }
                }
                if ($isBooked) {
                    break;
                }
            }
            if (!$isBooked) {
                $availableDates[] = $date;
            }
        }
        $reservation = Reservations::findOrFail($id);
        // return view('authguest.reserved-edit', compact('reservation'));
        return view('authguest.reserved-edit', [
            'availableDates' => $availableDates,], compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $storedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'phone_number' => 'required|max:25',
            'room_number' => 'required|max:10',
            'guest_number' => 'required|max:50',
            'email' => 'required|email|max:255'
    ]);
    Reservations::where('reservation_id', $id)->update($storedData);
    return redirect('reservation')->with('success', 'Reservation has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reservation = Reservations::findOrFail($id);
        $reservation->delete();
        return redirect('reserved')->with('success', 'The reservation has been cancelled!');
    }
}
