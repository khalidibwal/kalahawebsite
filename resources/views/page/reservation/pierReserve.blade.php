@extends('styling.master')
<div>
    <h1>Reservation for Pier By The Kalaha</h1>
    <p>Ancol Lake Monument Promenade</p>
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