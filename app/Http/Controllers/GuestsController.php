<?php

namespace App\Http\Controllers;

use App\Models\Guests;
use Illuminate\Http\Request;

class GuestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $guests = Guests:: all();
        return view('admin.guestlists', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.create_guest');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $storedData = $request ->validate(
            [
                'first_name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'email' => 'required|email|max:255',
                'address' => 'required|max:255',
                'phone_number' => 'required'
            ]
            );
            Guests::create($storedData);
            // return redirect('students')->with('success','Student has been added');
            return redirect('guests')->with('success','Guests has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $guests = Guests::findOrFail($id);
        return view('edit', compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $storedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|max:255',
            'phone_number' => 'required'
    ]);
    Guests::whereId($id)->update($storedData);
    return redirect('guestslist')->with('success', 'Guest has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $guests = Guests::findOrFail($id);
        $guests->delete();
        return redirect('guestslist')->with('success', 'The guest has been deleted!');
    }
}
