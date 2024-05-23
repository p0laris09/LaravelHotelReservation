<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class AdminController extends Controller
{

    public function index()
    {
        // Retrieve only active reservations from the database
        $reservations = Reservation::where('status', 'active')->get();
        
        // Pass the $reservations data to the view
        return view('admin.admin', ['reservations' => $reservations]);
    }

    public function edit(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        return response()->json($reservation);
    }

    public function update(Request $request)
    {
        $reservation = Reservation::findOrFail($request->id);

        // Retrieve input data
        $room_pref = $request->rp;
        $room_cap = $request->rc;
        $arrival = $request->at;
        $departure = $request->dt;
        $type_of_payment = $request->top;

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

        // Update reservation attributes
        $reservation->fn = $request->fn;
        $reservation->ln = $request->ln;
        $reservation->at = $request->at;
        $reservation->dt = $request->dt;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->rp = $request->rp;
        $reservation->rc = $request->rc;
        $reservation->top = $request->top;
        $reservation->price = $price;
        $reservation->duration = $duration;
        $reservation->discount = $discount;
        $reservation->add_charge = $additional_charge;
        $reservation->total_cost = $total_cost;
        
        // Save the changes
        $reservation->save();
        
        return response()->json(['message' => 'Reservation updated successfully.']);
    }



    // Archive the reservation
    public function archive(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        // Check if the current status is not already 'archived'
        if ($reservation->status != 'archived') {
            // If the status is not already 'archived', update it to 'archived'
            $reservation->status = 'archived';
            // Save the changes
            $reservation->save();
            return response()->json(['message' => 'Reservation archived successfully.']);
        }

        return response()->json(['message' => 'Reservation is already archived.']);
    }

    public function getReservationDetails($id)
    {
        $reservation = Reservation::findOrFail($id);
        return response()->json($reservation);
    }

}
