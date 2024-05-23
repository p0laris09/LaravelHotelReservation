@extends('layouts.layout')


@section('content')
<style>
    .buttons-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        button {
            display: block;
            margin-top: 15px;
            padding: 15px;
            border: 0;
            background-color: #cb5f51;
            font-weight: bold;
            color: #fff;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #c15b4d;
        }

        select {
            width: auto;
            max-width: 100%;
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
                    <span class="d-block text-primary">Hotel</span>
                    <span class="d-block text-dark">Reservation Form</span>
                </h1>
            </div>
        </div>
    </div>
</header>

    
<form class="hotel-reservation-form" method="post" action="/billinfo">
@csrf
<div class="fields">
    <div class="wrapper">
        <div>
            <label for="first_name">First Name</label>
            <div class="field">
                <i class="fas fa-user"></i>
                <input id="first_name" type="text" name="first_name" placeholder="First Name">
            </div>
        </div>
        <div class="gap"></div>
        <div>
            <label for="last_name">Last Name</label>
            <div class="field">
                <i class="fas fa-user"></i>
                <input id="last_name" type="text" name="last_name" placeholder="Last Name">
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div>
            <label for="arrival">Arrival</label>
                <div class="field">
                    <input id="arrival" type="date" name="arrival">
                </div>
            </div>
            <div class="gap"></div>
            <div>
                <label for="departure">Departure</label>
                <div class="field">
                    <input id="departure" type="date" name="departure">
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div>
                <label for="email">Email</label>
                <div class="field">
                    <i class="fas fa-user"></i>
                    <input id="email" type="text" name="email" placeholder="Your Email">
                </div>
            </div>
            <div class="gap"></div>
                <div>
                    <label for="phone">Contact Number</label>
                    <div class="field">
                        <i class="fas fa-user"></i>
                        <input id="phone" type="tel" name="phone" placeholder="09">
                    </div>
                </div>
            </div>

            <div class = "wrapper">
                <div>
                    <label for="room_pref">Room Preference</label>
                    <div class="field">
                        <select id="room_pref" name="room_pref">
                            <option disabled selected value="">--</option>
                            <option value="Standard">Standard</option>
                            <option value="Deluxe">Deluxe</option>
                            <option value="Suite">Suite</option>
                        </select>
                    </div>
                </div>
                <div class="gap"></div>
                <div>
                    <label for="room_cap">Room Capacity</label>
                    <div class="field">
                        <select id="room_cap" name="room_cap">
                            <option disabled selected value="">--</option>
                            <option value="Single">Single</option>
                            <option value="Double">Double</option>
                            <option value="Family">Family</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class = "wrapper">
                <div>
                    <label for="top">Type of Payment</label>
                    <div class="field">
                        <select id="top" name="top">
                            <option disabled selected value="">--</option>
                            <option value="Cash">Cash</option>
                            <option value="Check">Check</option>
                            <option value="Credit Card">Credit Card</option>
                        </select>
                    </div>
                </div>
            </div>

            <div id="error-message" style="color: red;"></div>
            <div class="gap"></div>
            <div class="gap"></div>
            <input type="hidden" name="status" value="active">
            <input type="submit" value="Reserve"></input>
            <button type="reset">Clear</button>
        </div>
    </div>
</div>
</form>

<script>
document.addEventListener('DOMContentLoaded', function () {
    function validateInputs() {
        const arrival = document.getElementById('arrival').value;
        const departure = document.getElementById('departure').value;
        const firstName = document.getElementById('first_name').value;
        const lastName = document.getElementById('last_name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const roomPrefs = document.getElementById('room_pref').value;
        const roomCap = document.getElementById('room_cap').value;
        const typeOfPayment = document.getElementById('top').value;

        let missingFields = [];
        const errorMessage = document.getElementById('error-message');

        if (!arrival) {
            missingFields.push("Arrival");
        }
        if (!departure) {
            missingFields.push("Departure");
        }
        if (!firstName) {
            missingFields.push("First Name");
        }
        if (!lastName) {
            missingFields.push("Last Name");
        }
        if (!email) {
            missingFields.push("Email");
        }
        if (!phone) {
            missingFields.push("Phone");
        }
        if (!roomPrefs) {
            missingFields.push("Room Preference");
        }
        if (!roomCap) {
            missingFields.push("Room Capacity");
        }
        if (!typeOfPayment) {
            missingFields.push("Type of Payment");
        }

        if (missingFields.length > 0) {
            errorMessage.textContent = "Please fill in the following required fields: " + missingFields.join(", ");
            return false;
        }

        return true;
    }

    document.querySelector('input[type="submit"]').addEventListener('click', function (event) {
        if (!validateInputs()) {
            event.preventDefault();
        }
    });
});
</script>

@endsection
