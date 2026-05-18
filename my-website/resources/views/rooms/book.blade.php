@extends('secondarylayout')

@section("title", "Rooms")

@section("content")

@php

@endphp
<link rel="stylesheet" href="/css/book.css">
<!-- <div class="container my-5 room-carousel-panel mx-auto my-5 glass-pane p-4 rounded align-items-stretch row">
    <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="booking-container glass-pane p-4">
        
    </div>
    </div>
    <div class="col-lg-8 col-md-6 col-sm-12">
    <div class="room_details">
        <div class="w-100">
            <img src="{{$room['image']}}" class="d-block w-100 rounded" alt="Deluxe Room" style="object-fit:cover;max-height:50vh;max-width:25vw;">
        </div>
        <h3>{{$room['title']}}</h3>
    </div>
</div>
</div> -->

<div class="container my-5">
    <div class="row align-items-stretch"> <div class="col-lg-6 mb-4">
            <div class="glass-pane p-4 rounded text-white h-100 d-flex flex-column">
                <img src="/images/rooms/{{ $room['image'] }}.jpg" class="img-fluid rounded mb-3 shadow" alt="{{ $room['title'] }}">
                <h2 class="text-upgrades" style="font-size: 2rem;">{{ $room['title'] }}</h2>
                <small class="text-upgrades">{{$room['long_description']}}</small>
                <div class="mt-auto"> <hr>
                    <h4 class="mb-0 text-upgrades" style="font-size: 2rem;">${{ $room['price_pn'] }}<small>/night</small></h4>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="glass-pane p-4 rounded h-100 d-flex flex-column">
                <h3 class="mb-2 text-white text-upgrades" style="font-size: 2rem;">Select Your Dates</h3>
                <h5 class="mb-4 text-white text-upgrades" style="font-size: 1.5rem;">{{$monthName}} {{$year}}</h5>
                
                <div id="calendarContainer">
                    <div class="calendar-grid">
                        @for($i = 1; $i <= $daysInMonth; $i++)
                            @php
                                $currentDate = sprintf('%04d-%02d-%02d', $year, $monthNum, $i);
                                $isBooked = false;
                                foreach($bookings as $booking){
                                    if($currentDate >= $booking['booking_start'] && $currentDate <= $booking['booking_end']){
                                        $isBooked = true;
                                        break;
                                    }
                                }
                            @endphp
                            <button type="button" 
                                class="booking-date-btn btn {{$isBooked ? 'booking-btn-booked' : 'booking-btn-free'}}"
                                data-date="{{$currentDate}}"
                                {{$isBooked ? 'disabled' : ''}}
                                onclick="selectDate('{{$currentDate}}')">
                                {{$i}}
                            </button>
                        @endfor
                    </div>
                </div>

                <div id="selection-summary" class="mt-auto p-3 rounded border bg-white shadow-sm d-none">
                    <div class="row text-center mb-3">
                        <div class="col-6 border-end">
                            <small class="text-muted d-block">First Name</small>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-6">
                            <small class="text-muted d-block">Last Name</small>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <div class="col-6 border-end">
                            <small class="text-muted d-block">Mobile</small>
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-6">
                            <small class="text-muted d-block">Email</small>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <div class="col-6 border-end">
                            <small class="text-muted d-block">CHECK-IN</small>
                            <span id="start_display" class="fw-bold">-</span>
                        </div>
                        <div class="col-6">
                            <small class="text-muted d-block">CHECK-OUT</small>
                            <span id="end_display" class="fw-bold">-</span>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mb-3 px-2">
                        <span>Total (<span id="night-count">0</span> nights)</span>
                        <span class="h4 mb-0 text-success fw-bold" id="total-cost-display">$0</span>
                    </div>

                    <form action="{{ url('/confirm-booking') }}" method="POST">
                        @csrf
                        <input type="hidden" id="nightly_price" value="{{ $room['price_pn'] }}">
                        <input type="hidden" name="room_id" value="{{ $room['id'] }}">
                        <input type="hidden" name="start_date" id="start_date_input">
                        <input type="hidden" name="end_date" id="end_date_input">
                        <input type="hidden" name="total_price" id="total_price_input">
                        <button type="submit" class="btn btn-lg w-100 text-white" style="background-color:#d08b19;border-color:#d3aa66;">Confirm & Pay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">


    function updateUI(start, end) {
    const summary = document.getElementById('selection-summary');
    const nightCountDisplay = document.getElementById('night-count');
    const costDisplay = document.getElementById('total-cost-display');
    const pricePerNight = parseInt(document.getElementById('nightly_price').value);

    if (start && end) {
        summary.classList.remove('d-none');
        const d1 = new Date(start);
        const d2 = new Date(end);
        const diffInMs = Math.abs(d2 - d1);
        const diffInDays = Math.ceil(diffInMs / (1000 * 60 * 60 * 24));
        const total = (diffInDays + 1) * pricePerNight;
        nightCountDisplay.innerText = diffInDays;
        costDisplay.innerText = `$${total.toLocaleString()}`;
        document.getElementById('total_price_input').value = total;
    }
}
// Date Handling
let startDate = null;
let endDate = null;

function selectDate(date) {
    if (!startDate || (startDate && endDate)) {
        startDate = date;
        endDate = null; 
        updateUI(startDate, null);
    }
    else if (date > startDate) {
        endDate = date;
        updateUI(startDate, endDate);
    }
    else {
        startDate = date;
        endDate = null;
        updateUI(startDate, null);
    }
    highlightRange();
}

function highlightRange() {
    const buttons = document.querySelectorAll('.booking-date-btn');

    buttons.forEach(btn => {
        if (btn.hasAttribute('disabled')) return;
        const btnDate = btn.getAttribute('data-date');
        btn.classList.remove('booking-btn-pressed','booking-btn-pressed-start-end');
        btn.classList.add('booking-btn-free');
        if (btnDate === startDate || btnDate === endDate) {
            btn.classList.remove('booking-btn-free');
            btn.classList.add('booking-btn-pressed-start-end', 'text-white');
        }
        else if (startDate && endDate && btnDate > startDate && btnDate < endDate) {
            btn.classList.remove('booking-btn-free');
            btn.classList.add('booking-btn-pressed');
        }
    });
    document.getElementById('start_display').innerHTML = startDate;
    let date_milliseconds= new Date(endDate).getTime();
    let one_day_millisec=1000*60*60*24;
    let checkout_date= new Date(date_milliseconds+one_day_millisec);
    let formattedcheckout_date = checkout_date.toISOString().split('T')[0];
    document.getElementById('end_display').innerHTML = formattedcheckout_date;
}
</script>


@endsection