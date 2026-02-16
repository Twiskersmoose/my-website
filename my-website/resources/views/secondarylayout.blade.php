<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-pvBshWk2BC7r2xNUGIjRql3KMZ9IeTMG8OV9FkWUr5aGQYRpKKLewVHbph+It+48" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant&display=swap" rel="stylesheet">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity=""
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-AHP9+OV3Z6kNQeHX8K3A+PFuWVKcKvh/LH5Q/R5C2YiLd2Xq6Wl2iSpvjMSyyGkS" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <title>@yield("title")</title>
     
</head>
<body>
    <link rel="stylesheet" href="/css/secondarylayout.css">
    
    <style>

    </style>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top glass-nav w-100">
  <div class="container d-flex justify-content-between align-items-center">

    <!-- Left links -->
    <ul class="navbar-nav d-flex flex-row">
      <li class="nav-item mx-2">
        <a class="nav-link text-white" href="{{route('home')}}">Home</a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link text-white" href="{{route('rooms')}}">Rooms</a>
      </li>
    </ul>

    <!-- Brand in center -->
    <a class="navbar-brand mx-3 text-center" href="{{route('home')}}">BERGHUUS</a>

    <!-- Right links -->
    <ul class="navbar-nav d-flex flex-row">
      <li class="nav-item mx-2">
        <a class="nav-link text-white" href="#about">About</a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link text-white" href="#contact">Contact</a>
      </li>
    </ul>

    <!-- Toggler (optional for small screens) -->
    <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
      <span class="navbar-toggler-icon"></span>
    </button>
    
  </div>
</nav>


<div class="contentcontainer">@yield("content")</div>
<footer class="glass-footer py-5">
  <div class="container-fluid px-4">
    <div class="row align-items-center justify-content-center">

      <!-- Contact Info -->
      <div class="col-12 col-md-3 text-center text-md-start mb-4 mb-md-0">
        <p class="mb-1 fw-bold">Contact Us:</p>
        <p class="mb-1">+41 81 659 10 10 | berghuusemail@radons.ch</p>
        <p class="mb-0">Berghuus Radons, 7460 Savognin, Switzerland</p>
      </div>

      <!-- Button Links -->
      <div class="col-12 col-md-4 d-flex justify-content-center mb-4 mb-md-0 gap-3 flex-wrap">
        <a href="/faqs" class="btn btn-outline-light btn-sm">FAQs</a>
        <a href="/privacy-policy" class="btn btn-outline-light btn-sm">Privacy Policy</a>
        <a href="/terms" class="btn btn-outline-light btn-sm">Terms of Service</a>
        <a href="/contact" class="btn btn-outline-light btn-sm">Contact</a>
      </div>

      <!-- Map -->
      <div class="col-12 col-md-4 d-flex justify-content-center">
        <img src="{{ asset('images/map2.jpg') }}" alt="Our Location" class="img-fluid rounded shadow-sm" style="max-height: 200px; width: auto;">
      </div>

    </div>
  </div>
</footer>




</body>
</html>