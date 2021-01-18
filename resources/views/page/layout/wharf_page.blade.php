@extends('component.footer')
@extends('page.layout.contactus')
@extends('page.layout.reservation')
@extends('page.layout.gallery')
@extends('component.event')
@extends('page.layout.welcome')
@extends('page.layout.navbar')
{{-- welcome --}}
@section('welcomeimg')
<section class="ftco-cover" style="background-image: url(images/icons/bg_wharff.jpg)" id="section-home">
@endsection
@section('title')
<img src="images/icons/logo-wharf.png" alt="IMG-OUR" class="ftco-animate">
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
<p><a href="https://free-template.co/" target="_blank" class="btn btn-outline-white btn-lg ftco-animate" data-toggle="modal" data-target="#reservationModal">Reservation</a></p>   
@endsection

{{-- navbar --}}
@section('navbar')
<li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
<li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
<li class="nav-item"><a href="#section-offer" class="nav-link">Location</a></li>
<li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
<li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
@endsection

@section('formcontact')
<form action="/wharf/store" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name" class="sr-only">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" required="required" name="names">
    </div>
    <div class="form-group">
      <label for="email" class="sr-only">Email</label>
      <input type="text" class="form-control" id="email" placeholder="Enter your email" required="required" name="email">
    </div>
    <div class="form-group">
      <label for="message" class="sr-only">Message</label>
      <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message" required="required" name="message"></textarea>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
    </div>
  </form>
@endsection

{{-- Contact Reservation --}}
@section('mail_reservation')
<form action="/wharf/reservation" method="post">
  {{ csrf_field() }}
  <div class="row">
    <div class="col-md-6 form-group">
      <label for="m_fname">First Name</label>
      <input type="text" class="form-control" id="m_fname" name="first_name">
    </div>
    <div class="col-md-6 form-group">
      <label for="m_lname">Last Name</label>
      <input type="text" class="form-control" id="m_lname" name="last_name">
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 form-group">
      <label for="m_email">Email</label>
      <input type="email" class="form-control" id="m_email" name="email">
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 form-group">
      <label for="m_people">How Many People</label>
      <select name="" id="m_people" class="form-control">
        <option value="1">1 People</option>
        <option value="2">2 People</option>
        <option value="3">3 People</option>
        <option value="4+">4+ People And More</option>
      </select>
    </div>
    <div class="col-md-6 form-group">
      <label for="m_phone">Phone</label>
      <input type="text" class="form-control" id="m_phone" name="phone">
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 form-group">
      <label for="m_date">Date</label>
      <input type="text" class="form-control" id="m_date" name="dates">
    </div>
    <div class="col-md-6 form-group">
      <label for="m_time">Time</label>
      <input type="text" class="form-control" id="m_time" name="times">
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 form-group">
      <label for="m_message">Message</label>
      <textarea class="form-control" id="m_message" cols="30" rows="7" name="message"></textarea>
    </div>
  </div>                
  <div class="row">
    <div class="col-md-12 form-group">
      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
    </div>
  </div>
</form>
@endsection