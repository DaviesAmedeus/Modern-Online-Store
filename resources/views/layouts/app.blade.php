<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Startup2')</title>
    <style>
      /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
body{
  padding: 0;
  margin: 0;
}

body::before{
  background-image: url({{ asset('img/background_img/bg3.jpg') }}); 
  content: "";
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  opacity: 0.8; 
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: -1;
}
.hero {
  overflow-x: hidden;
  padding: 0;
}

.hero .carousel {
  width: 100%;
  min-height: 100vh;
  padding: 80px 0;
  margin: 0;
  position: relative;
}

.hero .carousel-item {
  position: absolute;
  inset: 0;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  overflow: hidden;
  z-index: 1;
  transition-duration: 0.4s;
}

.hero .carousel-item::before {
  content: "";
  background-color: rgba(0, 0, 0, 0.7);
  position: absolute;
  inset: 0;
}

.hero .info {
  position: absolute;
  inset: 0;
  z-index: 2;
}

@media (max-width: 768px) {
  .hero .info {
    padding: 0 50px;
  }
}

.hero .info h2 {
  color: #fff;
  margin-bottom: 30px;
  padding-bottom: 30px;
  font-size: 56px;
  font-weight: 700;
  position: relative;
}

.hero .info h2:after {
  content: "";
  position: absolute;
  display: block;
  width: 80px;
  height: 4px;
  background: var(--color-primary);
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
}

@media (max-width: 768px) {
  .hero .info h2 {
    font-size: 36px;
  }
}

.hero .info p {
  color: rgba(255, 255, 255, 0.8);
  font-size: 18px;
}

.hero .info .btn-get-started {
  font-family: var(--font-primary);
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 40px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 10px;
  color: #fff;
  border: 2px solid var(--color-primary);
}

.hero .info .btn-get-started:hover {
  background: var(--color-primary);
}

.hero .carousel-control-prev {
  justify-content: start;
}

@media (min-width: 640px) {
  .hero .carousel-control-prev {
    padding-left: 15px;
  }
}

.hero .carousel-control-next {
  justify-content: end;
}

@media (min-width: 640px) {
  .hero .carousel-control-next {
    padding-right: 15px;
  }
}

.hero .carousel-control-next-icon,
.hero .carousel-control-prev-icon {
  background: none;
  font-size: 26px;
  line-height: 0;
  background: rgba(255, 255, 255, 0.2);
  color: rgba(255, 255, 255, 0.6);
  border-radius: 50px;
  width: 54px;
  height: 54px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.hero .carousel-control-prev,
.hero .carousel-control-next {
  z-index: 3;
  transition: 0.3s;
}

.hero .carousel-control-prev:focus,
.hero .carousel-control-next:focus {
  opacity: 0.5;
}

.hero .carousel-control-prev:hover,
.hero .carousel-control-next:hover {
  opacity: 0.9;
}

    </style>
  </head>
  <body style=" ">
    

 @include('layouts.partials.navbar')

  <div class="container">
    @yield('content')
  </div>
  
    <script src="{{ asset('/js/distance_calculator.js') }}"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>