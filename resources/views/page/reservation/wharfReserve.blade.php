@extends('styling.master')
<div>
    <p>From {{$data['email']}}</p>
    <h1>Wharf At The Kalaha</h1>
    <h2>Hello My Name is {{$data['first_name']}}</h2>
    <h2>Hello My last Name is {{$data['last_name']}}</h2>
    <p>My message Is {{$data['message']}}</p>
</div>