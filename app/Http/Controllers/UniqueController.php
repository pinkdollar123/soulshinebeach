<?php

namespace App\Http\Controllers;

use App\Models\BeachHouse;
use App\Models\Reservations;
use App\Models\User;
use Illuminate\Http\Request;

class UniqueController extends Controller
{
    //
    public function guests(){
        $guests = Reservations::all();
        return view('admin.guestlist', compact('guests'));
    }
    public function beachouse()
    {
        $beachhouses = BeachHouse::all();
        return view('admin.beach-house', compact('beachhouses'));
    }

    public function reservations()
    {
        $reservations = Reservations::with('room')->get();
        return view('admin.reservations', compact('reservations'));
    }

    public function create()
    {   
        return view('admin.create_guest');
    }

    public function storeBeach(Request $request)
    {
        $storedData = $request ->validate(
            [
                'house_name' => 'required|max:255',
                'description' => 'required',
                'image' => 'required|max:255',
                'room_price' => 'required|max:255',
            ]
            );

            BeachHouse::create($storedData);
            return redirect('/admin-create')->with('success','Beach House has been added');
    }
}
