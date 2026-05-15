@extends('secondarylayout')

@section("title", "Rooms")

@section("content")

@php

@endphp
<link rel="stylesheet" href="/css/rooms.css">
  <div>
      <div class="hero-text text-center">
      <h2 style="font-family:math !important;">Discover our beautifully designed rooms, where alpine charm meets modern comfort.<br>Each space is crafted to offer warmth and tranquility for a truly unforgettable stay.</h2>
      <!-- <p></p> -->
  </div>
  <div class="room-carousel-panel mx-auto my-5 glass-pane p-4 rounded align-items-stretch">
    <div id="roomCarousel" class="carousel slide flex-shrink-0" data-bs-ride="carousel" data-bs-interval="false">
      <div class="carousel-inner rounded">
          @foreach($room_array as $room)
              <div class="carousel-item {{$loop->first ? 'active' : ''}}"
                  data-room-title="{{$room['title']}}"
                  data-room-description="{{$room['description']}}"
                  data-room-price="{{$room['display_price']}}"
                  data-room-guests="{{$room['guests']}}"
                  data-room-bed="{{$room['bed']}}"
                  data-room-view="{{$room['view']}}"
                  data-room-wifi="{{$room['wifi']}}"
                  data-room-bathroom="{{$room['bathroom']}}"
                  data-room-kitchenette="{{$room['kitchenette']}}"
                  data-room-link="{{$room['link']}}"
                  data-room-id="{{$room['id']}}">
                  <img src="{{$room['image']}}" class="d-block w-100 rounded" alt="Deluxe Room">
              </div>
          @endforeach
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
    <div class="room-info flex-grow-1 d-flex flex-column">
    <div class="room-text">
        <h3 id="roomTitle">Deluxe Room</h3>
        <img src="/images/whiteline.png" alt="divider" id="nav-line" class="navbar-divider">
        <p id="roomDescription">Spacious room with mountain views.</p>
        <ul class="room-amenities list-unstyled mt-3" id="roomAmenities">
        
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
  roomId = activeItem.getAttribute('data-room-id');
  const link = activeItem.getAttribute('data-room-link');
  bookButton.onclick = () => {
    if (link) window.location.href = link+`?room_id=${roomId}`;
  };

  // Amenities
  const guests = activeItem.getAttribute('data-room-guests');
  const bed = activeItem.getAttribute('data-room-bed');
  const view = activeItem.getAttribute('data-room-view');
  const wifi = activeItem.getAttribute('data-room-wifi');
  const bathroom = activeItem.getAttribute('data-room-bathroom');
  const kitchenette = activeItem.getAttribute('data-room-kitchenette');

  const amenitiesList = document.getElementById('roomAmenities');

  const createList = (value, faClass) => {
    if(value){
      return `<li><i class="fa-solid amenities ${faClass} me-2"></i>${value}</li>`;
    }
    return '';
  }
 
  amenitiesList.innerHTML = 
    createList(guests, 'fa-user-group') +
    createList(bed, 'fa-bed') +
    createList(view, 'fa-mountain-sun') +
    createList(wifi, 'fa-wifi') +
    createList(bathroom, 'fa-shower') +
    createList(kitchenette, 'fa-kitchen-set')
  ;

}
  updateRoomInfo();
  carousel.addEventListener('slid.bs.carousel', updateRoomInfo);
});

</script>


@endsection