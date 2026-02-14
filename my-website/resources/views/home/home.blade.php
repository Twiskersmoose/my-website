@extends('layout')

@section("title", "Home")

@section("content")

@php

@endphp
 <link rel="stylesheet" href="/css/home.css">
 <div class="hero-text text-center">
    <h2>Your premium escape with luxurious rooms, amenities, and unforgettable experiences.</h2>
    <!-- <p></p> -->
</div>
<div class="d-flex justify-content-center align-items-center flex-wrap gap-5 my-5 main-panes">

    <!-- Pane 1 -->
    <div class="glass-pane square-pane text-center">
        <img src="http://127.0.0.1:8000/images/smallimg1.jpg" class="img-fluid rounded mb-3" alt="Example Image">

        <h3 class="mb-2">
            <!-- <i class="fa-solid fa-chart-line me-2"></i> -->
            Deluxe Rooms
        </h3>

        <p>
            Enjoy our spacious deluxe rooms with king-size beds, en-suite bathrooms, and stunning views of the frozen landscape.
        </p>
    </div>

    <!-- Pane 2 -->
    <div class="glass-pane square-pane text-center">
        <img src="http://127.0.0.1:8000/images/smallimg3.jpg" class="img-fluid rounded mb-3" alt="Example Image">

        <h3 class="mb-2">
            <!-- <i class="fa-solid fa-user me-2"></i> -->
            Functions
        </h3>

        <p>
            Host memorable events in our versatile function spaces. Fully equipped for conferences, weddings, and private celebrations.
        </p>
    </div>

    <!-- Pane 3 -->
    <div class="glass-pane square-pane text-center">
        <img src="http://127.0.0.1:8000/images/smallimg2.jpg" class="img-fluid rounded mb-3" alt="Example Image">

        <h3 class="mb-2">
            <!-- <i class="fa-solid fa-gear me-2"></i> -->
            Amenities
        </h3>

        <p>
            Relax and enjoy top-notch amenities like a spa, pool, and fitness center. Every detail is designed for your comfort and convenience.
        </p>
    </div>

</div>




<script type="text/javascript">

</script>


@endsection