@extends('layouts.layout')

@section('content')
<style>
    table {
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        border-collapse: collapse;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    .buttons-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .centered-button {
        margin: 0 10px;
    }
    button {
        background-color: #333;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }
    button:hover {
        background-color: #555;
    }
</style>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a href="/" class="navbar-brand">
            <strong><span>Basta</span> Kape</strong>
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/profile">Company's Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="/reserve">Reservation</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="site-header section-padding d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-12">
                <h1>
                    <span class="d-block text-primary">Bill</span>
                    <span class="d-block text-dark">Information</span>
                </h1>
            </div>
        </div>
    </div>
</header>

<table>
    <tr><th>Field</th><th>Value</th></tr>
    <tr><td>First Name:</td><td>{{ $reservation->fn }}</td></tr>
    <tr><td>Last Name:</td><td>{{ $reservation->ln }}</td></tr>
    <tr><td>Email:</td><td>{{ $reservation->email }}</td></tr>
    <tr><td>Phone:</td><td>{{ $reservation->phone }}</td></tr>
    <tr><td>Room Preference:</td><td>{{ $reservation->rp }}</td></tr>
    <tr><td>Room Capacity:</td><td>{{ $reservation->rc }}</td></tr>
    <tr><td>Type of Payment:</td><td>{{ $reservation->top }}</td></tr>
    <tr><td>Arrival Date:</td><td>{{ $reservation->at }}</td></tr>
    <tr><td>Departure Date:</td><td>{{ $reservation->dt }}</td></tr>
    <tr><td>Duration:</td><td>{{ $reservation->duration }} days</td></tr>
    <tr><td>Price per Day:</td><td>₱{{ $reservation->price }}</td></tr>
    
    @if ($reservation->discount > 0)
        <tr><td>Discount:</td><td>₱{{ $reservation->discount }}</td></tr>
    @endif
    
    @if ($reservation->add_charge > 0)
        <tr><td>Additional Charge:</td><td>₱{{ $reservation->add_charge }}</td></tr>
    @endif

    <tr><td>Total Cost:</td><td>₱{{ $reservation->total_cost }}</td></tr>
</table>

<div class="buttons-container">
    <button onclick="goHome()" class="centered-button">Home</button>
</div>

<br>
<script>
    function goHome() {
        window.location.href = "index.php";
    }
</script>


@endsection
