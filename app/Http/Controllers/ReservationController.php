<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;


class ReservationController extends Controller
{
    public function profile(){
        return view('reservation.profile');
    }

    public function contact(){
        return view('reservation.contact');
    }

    public function reserve(){
        return view('reservation.reserve');
    }

    public function show($id){

        $reservation = Reservation::findorFail($id);
        // $reservation = Reservation::where('status','active')->get();

        return view('billinfo.show', ['reservation' => $reservation]);
    }
    
    
    public function store(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'arrival' => 'required|date',
            'departure' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required|string',
            'room_pref' => 'required|string',
            'room_cap' => 'required|string',
            'top' => 'required|string',
            'status' => 'required|string',
        ]);

        // Retrieve input data
        $room_pref = $validatedData['room_pref'];
        $room_cap = $validatedData['room_cap'];
        $arrival = $validatedData['arrival'];
        $departure = $validatedData['departure'];
        $type_of_payment = $validatedData['top'];

        // Calculate price based on room preference and capacity
        $price = 0;
        if ($room_pref == 'Standard') {
            if ($room_cap == 'Single') {
                $price = 100;
            } elseif ($room_cap == 'Double') {
                $price = 200;
            } elseif ($room_cap == 'Family') {
                $price = 300;
            }
        } elseif ($room_pref == 'Deluxe') {
            if ($room_cap == 'Single') {
                $price = 300;
            } elseif ($room_cap == 'Double') {
                $price = 500;
            } elseif ($room_cap == 'Family') {
                $price = 700;
            }
        } elseif ($room_pref == 'Suite') {
            if ($room_cap == 'Single') {
                $price = 500;
            } elseif ($room_cap == 'Double') {
                $price = 800;
            } elseif ($room_cap == 'Family') {
                $price = 1000;
            }
        }

        // Calculate duration
        $duration = (strtotime($departure) - strtotime($arrival)) / 86400 + 1; // Add 1 day to include the departure day

        // Total cost calculation
        $total_cost = $price * $duration;

        // Initialize discount and additional charge to 0
        $discount = 0;
        $additional_charge = 0;

        // Discount calculation
        if ($type_of_payment == 'Cash') {
            if ($duration >= 3 && $duration <= 5) {
                $discount = $total_cost * 0.10;
                $total_cost -= $discount;
            } elseif ($duration >= 6) {
                $discount = $total_cost * 0.15;
                $total_cost -= $discount;
            }
        }

        // Additional charges calculation
        if ($type_of_payment == 'Check') {
            $additional_charge = $total_cost * 0.05;
            $total_cost += $additional_charge;
        } elseif ($type_of_payment == 'Credit Card') {
            $additional_charge = $total_cost * 0.10;
            $total_cost += $additional_charge;
        }

        // Create a new instance of the Reservation model
        $reservation = new Reservation();

        // Assign input values to model attributes
        $reservation->fn = $validatedData['first_name'];
        $reservation->ln = $validatedData['last_name'];
        $reservation->at = $arrival;
        $reservation->dt = $departure;
        $reservation->email = $validatedData['email'];
        $reservation->phone = $validatedData['phone'];
        $reservation->rp = $room_pref;
        $reservation->rc = $room_cap;
        $reservation->top = $type_of_payment;
        $reservation->price = $price;
        $reservation->duration = $duration;
        $reservation->discount = $discount;
        $reservation->add_charge = $additional_charge;
        $reservation->total_cost = $total_cost;
        $reservation->status = $validatedData['status'];

        // Save the reservation to the database
        $reservation->save();

    // Set the reservation_id in the session so it can be retrieved in the BillInfoController
    session(['reservation_id' => $reservation->id]);

    // Redirect to the billinfo page
    return redirect()->route('billinfo');

}

    

}
