@extends('styling.bootstrap')
<div class="text-center alignlogos">
  <img src="{{URL::asset('images/360/fnb.jpg')}}" class="rounded logos" alt="...">
</div>

<div class="text-center alignlogos">
  <a href="{{url('/fnb')}}" ><img src="{{URL::asset('images/icons/logo-fnb.png')}}" class="rounded logos zoom" alt="..." ></a>
  <a href="{{url('/thepierbykalaha')}}" ><img src="{{URL::asset('images/360/logo-pier.jpg')}}" class="rounded logos zoom" alt="..."></a>
  <a href="{{url('/Denofkalaha')}}" ><img src="{{URL::asset('images/360/logo-den.jpg')}}" class="rounded logos zoom" alt="..."></a>
</div>

<div class="text-center">
  <a href="{{url('/wharf')}}" ><img src="{{URL::asset('images/360/logo-wharf.jpg')}}" class="rounded logos zoom" alt="..." ></a>
  <a href="{{url('/kalatham')}}" ><img src="{{URL::asset('images/360/kalatham.jpg')}}" class="rounded logos zoom" alt="..." ></a>
</div>