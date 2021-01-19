@extends('styling.master')
<div>
    <h1>Reservation for The DEN Of Kalaha</h1>
    <p>Somerset Grand Citra Apartment Ground Floor (GF)</p>
    <p>Time Reservation : {{$data['times']}}</p>
    <p>Reservation For : {{$data['people']}} People</p>
    <br />
    <p>{{$data['message']}}</p>
    <br />
    <p>Please call me at {{$data['phone']}} To verify my reservation.</p>
    <p>
    <p>From {{$data['email']}}</p>
    <br />
    <p>Thank you,</p>
    <p>{{$data['last_name']}},{{$data['first_name']}}</p>
</div>