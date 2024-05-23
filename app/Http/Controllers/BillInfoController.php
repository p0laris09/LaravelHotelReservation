<?php
namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class BillInfoController extends Controller
{
    public function index()
    {
        // Retrieve reservation data from the database
        $reservation = Reservation::find(session('reservation_id'));

        // Check if reservation exists
        if (!$reservation) {
            return redirect()->route('home')->with('error', 'Reservation not found.');
        }

        // Return the billinfo view with reservation data
        return view('reservation.billinfo', ['reservation' => $reservation]);
    }
}