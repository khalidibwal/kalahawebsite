@extends('component.footer')
@extends('page.layout.contactus')
@extends('page.layout.reservation')
@extends('page.layout.gallery')
@extends('component.event')
@extends('page.layout.welcome')
@extends('page.layout.navbar')
{{-- welcome --}}
@section('welcomeimg')
<section class="ftco-cover" style="background-image: url(images/icons/bg_pier.jpg)" id="section-home">
@endsection
@section('title')
<img src="images/icons/logo-pier.png" alt="IMG-OUR" class="ftco-animate">
@endsection

{{-- gallery --}}
@section('gal1')
<a href="images/gallery/gallery-photo30.jpg" class="ftco-thumbnail image-popup">
<img src="images/gallery/gallery-photo30.jpg" alt="Free Template by Free-Template.co" class="img-fluid">  
@endsection
@section('gal2')
<a href="images/gallery/gallery-photo31.jpg" class="ftco-thumbnail image-popup">
<img src="images/gallery/gallery-photo31.jpg" alt="Free Template by Free-Template.co" class="img-fluid">  
@endsection
@section('gal3')
<a href="images/gallery/gallery-photo32.jpg" class="ftco-thumbnail image-popup">
<img src="images/gallery/gallery-photo32.jpg" alt="Free Template by Free-Template.co" class="img-fluid">  
@endsection
@section('gal4')
<a href="images/gallery/gallery-photo33.jpg" class="ftco-thumbnail image-popup">
<img src="images/gallery/gallery-photo33.jpg" alt="Free Template by Free-Template.co" class="img-fluid">  
@endsection
@section('gal5')
<a href="images/gallery/gallery-photo34.jpg" class="ftco-thumbnail image-popup">
<img src="images/gallery/gallery-photo34.jpg" alt="Free Template by Free-Template.co" class="img-fluid">  
@endsection
@section('gal6')
<a href="images/gallery/gallery-photo35.jpg" class="ftco-thumbnail image-popup">
<img src="images/gallery/gallery-photo35.jpg" alt="Free Template by Free-Template.co" class="img-fluid">  
@endsection

{{-- Reservation --}}
@section('reservasi')
<p><a href="https://free-template.co/" target="_blank" class="btn btn-outline-black btn-lg ftco-animate" data-toggle="modal" data-target="#reservationModal">Reservation</a></p>
@endsection

{{-- navbar --}}
@section('navbar')
<li class="nav-item active"><a href="#section-home" class="nav-link-pier">Home</a></li>
<li class="nav-item"><a href="#section-about" class="nav-link-pier">About</a></li>
<li class="nav-item"><a href="#section-offer" class="nav-link-pier">Location</a></li>
<li class="nav-item"><a href="#section-gallery" class="nav-link-pier">Gallery</a></li>
<li class="nav-item"><a href="#section-contact" class="nav-link-pier">Contact</a></li>
@endsection