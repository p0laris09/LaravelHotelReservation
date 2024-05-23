@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Guest Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Room Type</th>
                    <th>Room Capacity</th>
                    <th>Arrival Date</th>
                    <th>Departure Date</th>
                    <th>Type of Payment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->id }}</td>
                        <td>{{ $reservation->fn }} {{ $reservation->ln }}</td>
                        <td>{{ $reservation->phone }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->rp }}</td>
                        <td>{{ $reservation->rc }}</td>
                        <td>{{ $reservation->at }}</td>
                        <td>{{ $reservation->dt }}</td>
                        <td>{{ $reservation->top }}</td>
                        <td>
                            <button class="myButt four" onclick="openViewModal({{ $reservation->id }})">
                                <div class="icon">&#128065;</div>
                                <span>View</span>
                            </button>


                            <button class="myButt four" onclick="openEditModal({{ $reservation->id }})">
                                <div class="icon">&#9998;</div>
                                <span>Edit</span>
                            </button>

                            <button class="myButt four" onclick="openArchiveModal({{ $reservation->id }})">
                                <div class="icon">&#9938;</div>
                                <span>Archive</span>
                            </button>
                        </td>
                    </tr>
                @endforeach

                @if($reservations->isEmpty())
                    <tr><td colspan="10">No reservations found</td></tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<!-- View Modal -->
<div id="viewModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeViewModal()">&times;</span>
        <p>View modal content goes here...</p>
    </div>
</div>

<!-- Edit Modal -->
<!-- Edit Modal -->
<div id="editModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeEditModal()">&times;</span>
        <form class="hotel-reservation-form" onsubmit="updateReservation()">
            @csrf
            <input type="hidden" id="id" name="id" value="">
            
            <div class="fields">
                <div class="wrapper">
                    <div>
                        <label for="first_name">First Name</label>
                        <div class="field">
                            <input id="first_name" type="text" name="first_name" placeholder="First Name">
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div>
                        <label for="last_name">Last Name</label>
                        <div class="field">
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
                            <input id="email" type="text" name="email" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div>
                        <label for="phone">Contact Number</label>
                        <div class="field">
                            <input id="phone" type="tel" name="phone" placeholder="09">
                        </div>
                    </div>
                </div>

                <div class="wrapper">
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

                <div class="wrapper">
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
            </div>

            <div id="error-message" style="color: red;"></div>
            <div class="gap"></div>
            <div class="gap"></div>
            <button type="submit">Update</button>
            <button type="button" onclick="closeEditModal()">Cancel</button>
        </form>
    </div>
</div>



<!-- Archive Modal -->
<div id="archiveModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeArchiveModal()">&times;</span>
        <p>Are you sure you want to archive this reservation?</p>
        <div style="text-align: center;">
            <button class="myButt four" onclick="archiveReservation({{ $reservation->id }})">Yes</button>
            <button class="myButt four" onclick="closeArchiveModal()">No</button>
        </div>
    </div>
</div>




<!-- Include the CSRF token in the meta tag -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- JavaScript -->
<script>
// public/js/admin.js

    // Function to open the view modal
    function openViewModal(id) {
        // Show the view modal
        document.getElementById('viewModal').style.display = 'block';
        
        // Fetch reservation details using Axios
        axios.get(`/admin/reservation/${id}/details`)
            .then(response => {
                const reservation = response.data;
                populateViewModal(reservation);
            })
            .catch(error => {
                console.error('Failed to fetch reservation details:', error);
            });
    }

    // Function to populate the view modal with reservation details
    function populateViewModal(reservation) {
        const modalContent = document.querySelector("#viewModal .modal-content");
        modalContent.innerHTML = `
            <span class="close" onclick="closeViewModal()">&times;</span>
            <table>
                <tr><th>Field</th><th>Value</th></tr>
                <tr><td>First Name:</td><td>${reservation.fn}</td></tr>
                <tr><td>Last Name:</td><td>${reservation.ln}</td></tr>
                <tr><td>Email:</td><td>${reservation.email}</td></tr>
                <tr><td>Phone:</td><td>${reservation.phone}</td></tr>
                <tr><td>Room Preference:</td><td>${reservation.rp}</td></tr>
                <tr><td>Room Capacity:</td><td>${reservation.rc}</td></tr>
                <tr><td>Type of Payment:</td><td>${reservation.top}</td></tr>
                <tr><td>Arrival Date:</td><td>${reservation.at}</td></tr>
                <tr><td>Departure Date:</td><td>${reservation.dt}</td></tr>
                <tr><td>Duration:</td><td>${reservation.duration} days</td></tr>
                <tr><td>Price per Day:</td><td>₱${reservation.price}</td></tr>
                ${reservation.discount ? `<tr><td>Discount:</td><td>₱${reservation.discount}</td></tr>` : ''}
                ${reservation.add_charge ? `<tr><td>Additional Charge:</td><td>₱${reservation.add_charge}</td></tr>` : ''}
                <tr><td>Total Cost:</td><td>₱${reservation.total_cost}</td></tr>
            </table>
        `;
    }


    // Function to open the archive modal
    function openArchiveModal(id) {
        // Show the archive modal
        document.getElementById('archiveModal').style.display = 'block';
        
        // Store the reservation ID in a variable accessible to archiveReservation() function
        window.archiveReservationId = id;
    }

    function openEditModal(id) {
        // Show the edit modal
        document.getElementById('editModal').style.display = 'block';

        // Fetch reservation details from the database using Axios
        axios.get(`/admin/reservation/${id}/edit`)
            .then(response => {
                const reservation = response.data;

                // Populate form fields with reservation details
                document.getElementById('id').value = reservation.id;
                document.getElementById('first_name').value = reservation.fn;
                document.getElementById('last_name').value = reservation.ln;
                document.getElementById('arrival').value = reservation.at;
                document.getElementById('departure').value = reservation.dt;
                document.getElementById('email').value = reservation.email;
                document.getElementById('phone').value = reservation.phone;
                document.getElementById('room_pref').value = reservation.rp;
                document.getElementById('room_cap').value = reservation.rc;
                document.getElementById('top').value = reservation.top;
            })
            .catch(error => {
                console.error('Failed to fetch reservation details:', error);
            });
    }


    function updateReservation() {
        // Get form data
        var id = document.getElementById('id').value;
        var firstName = document.getElementById('first_name').value;
        var lastName = document.getElementById('last_name').value;
        var arrival = document.getElementById('arrival').value;
        var departure = document.getElementById('departure').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var roomPref = document.getElementById('room_pref').value;
        var roomCap = document.getElementById('room_cap').value;
        var top = document.getElementById('top').value;

        // Construct the data to be sent to the server
        var data = {
            id: id,
            fn: firstName,
            ln: lastName,
            at: arrival,
            dt: departure,
            email: email,
            phone: phone,
            rp: roomPref,
            rc: roomCap,
            top: top
        };

        // Send the updated data to the server using Axios
        axios.put('/admin/reservation/update', data)
            .then(response => {
                console.log(response.data.message);
                // Optionally, you can close the edit modal here
                closeEditModal();
            })
            .catch(error => {
                console.error('Failed to update reservation:', error);
            });
    }


    function archiveReservation() {
        // Use the stored reservation ID
        var id = window.archiveReservationId;

        axios.patch(`/admin/reservation/${id}/archive`)
            .then(response => {
                console.log(response.data.message);
                closeArchiveModal();
            })
            .catch(error => {
                console.error('Failed to archive reservation:', error);
            });
    }




    // Function to close the view modal
    function closeViewModal() {
        document.getElementById('viewModal').style.display = 'none';
    }

    // Function to close the edit modal
    function closeEditModal() {
        document.getElementById('editModal').style.display = 'none';
    }

    // Function to close the archive modal
    function closeArchiveModal() {
        document.getElementById('archiveModal').style.display = 'none';
    }

    // Close the modal when clicking outside of it
    window.onclick = function(event) {
        if (event.target == viewModal) {
            closeViewModal();
        }
        if (event.target == editModal) {
            closeEditModal();
        }
        if (event.target == archiveModal) {
            closeArchiveModal();
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


@endsection
