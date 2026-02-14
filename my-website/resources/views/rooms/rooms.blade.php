@extends('secondarylayout')

@section("title", "Rooms")

@section("content")

@php

@endphp
<link rel="stylesheet" href="/css/rooms.css">
<div>
    <div class="hero-text text-center">
    <h2>Discover our beautifully designed rooms, where alpine charm meets modern comfort.<br>Each space is crafted to offer warmth and tranquility for a truly unforgettable stay.</h2>
    <!-- <p></p> -->
</div>
    <style>

    </style>
    <div class="room-carousel-panel mx-auto my-5 glass-pane p-4 rounded align-items-stretch" style="max-width: 1200px; display: flex; flex-wrap: wrap; align-items: center; gap: 2rem;min-height:500px;">

  <!-- Carousel -->
  <div id="roomCarousel" class="carousel slide flex-shrink-0" style="flex: 1 1 400px; max-width: 700px;" data-bs-ride="carousel" data-bs-interval="false">
    <div class="carousel-inner rounded">
      <div class="carousel-item active"
            data-room-title="Deluxe Room"
            data-room-description="Spacious room with mountain views and queen-size bed. Includes ensuite and kitchenette."
            data-room-price="$250/night"
            data-room-link="/book/deluxe-room"
            data-room-guests="6 Guests"
            data-room-bed="2 Queen Beds & 1 King Single"
            data-room-view="Mountain View"
            data-room-wifi="Free Wi-Fi"
            data-room-bathroom="En-suite bathroom">
            <img src="{{ asset('images/rooms/room1.jpg') }}" class="d-block w-100 rounded" alt="Deluxe Room">
        </div>
      <div class="carousel-item" 
           data-room-title="Suite" 
           data-room-description="Luxury suite with separate living area and jacuzzi." 
           data-room-price="$400/night"
           data-room-link="/book/suite"
           data-room-guests="4 Guests"
            data-room-bed="2 Queen Beds"
            data-room-view="Mountain View"
            data-room-wifi="Free Wi-Fi"
            data-room-bathroom="En-suite bathroom">
        <img src="{{ asset('images/rooms/room2.jpg') }}" class="d-block w-100 rounded" alt="Suite" />
      </div>
      <div class="carousel-item" 
           data-room-title="Standard Room" 
           data-room-description="Cozy room with all essentials and garden view." 
           data-room-price="$180/night"
           data-room-link="/book/standard-room"
           data-room-guests="2 Guests"
            data-room-bed="1 Queen Bed"
            data-room-view="Mountain View"
            data-room-wifi="Free Wi-Fi"
            data-room-bathroom="En-suite bathroom">
        <img src="{{ asset('images/rooms/room3.jpg') }}" class="d-block w-100 rounded" alt="Standard Room" />
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#roomCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Info Panel -->
  <div class="room-info flex-grow-1 d-flex flex-column">

  <div class="room-text">
    <h3 id="roomTitle" style="margin-top:35px;">Deluxe Room</h3>
    <img src="http://127.0.0.1:8000/images/whiteline.png" alt="divider" id="nav-line" class="navbar-divider" style="width: 220px;margin-left: -15px;margin-top: -12px;">
    <p id="roomDescription">Spacious room with mountain views.</p>
    

    <ul class="room-amenities list-unstyled mt-3" id="roomAmenities">
      <!-- JS will populate this -->
    </ul>
    <p id="roomPrice">$250/night</p>
  </div>

  <button id="bookButton" class="glass-btn w-100 mt-auto">
    Book Now
  </button>

</div>


</div>



</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
const carouselElement = document.getElementById('roomCarousel');
const carousel = new bootstrap.Carousel(carouselElement, {
  interval: false,
  ride: false
});
document.addEventListener('DOMContentLoaded', function () {
  const carousel = document.getElementById('roomCarousel');
  const roomTitle = document.getElementById('roomTitle');
  const roomDescription = document.getElementById('roomDescription');
  const roomPrice = document.getElementById('roomPrice');
  const bookButton = document.getElementById('bookButton');

  function updateRoomInfo() {
  const activeItem = carousel.querySelector('.carousel-item.active');

  roomTitle.textContent = activeItem.getAttribute('data-room-title');
  roomDescription.textContent = activeItem.getAttribute('data-room-description');
  roomPrice.textContent = activeItem.getAttribute('data-room-price');

  const link = activeItem.getAttribute('data-room-link');
  bookButton.onclick = () => {
    if (link) window.location.href = link;
  };

  // Amenities
  const guests = activeItem.getAttribute('data-room-guests');
  const bed = activeItem.getAttribute('data-room-bed');
  const view = activeItem.getAttribute('data-room-view');
  const wifi = activeItem.getAttribute('data-room-wifi');
  const bathroom = activeItem.getAttribute('data-room-bathroom');

  const amenitiesList = document.getElementById('roomAmenities');
  amenitiesList.innerHTML = `
    <li><i class="fa-solid fa-user-group me-2"></i>${guests}</li>
    <li><i class="fa-solid fa-bed me-2"></i>${bed}</li>
    <li><i class="fa-solid fa-mountain-sun me-2"></i>${view}</li>
    <li><i class="fa-solid fa-wifi me-2"></i>${wifi}</li>
    <li><i class="fa-solid fa-shower me-2"></i>${bathroom}</li>
  `;
}



  // Initial load
  updateRoomInfo();

  // On slide change
  carousel.addEventListener('slid.bs.carousel', updateRoomInfo);
});

</script>


@endsection