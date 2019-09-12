@extends('frontend.home-master')
@section('title',$seo->title)
@section('keyword',$seo->keyword) 
@section('description', $seo->description)

@section('content')

<div class="container-fluid mayaimage packageimg">
	<img src="{{url('public/images/bhattidandaimages/packages.png')}}" class="img-responsive " alt="Phool Maya">
</div>

<div class="container-fluid abt-pad">
	<div class="col-md-4 span-brdr">
		<span></span>
	</div>
	<div class="col-md-4 text-center">
		<h1 class="capitalize">Our Package</h1> 
	</div>
	<div class="col-md-4 span-brdr">
		<span></span>
	</div>
</div>
@foreach($package as $p)
<div class="container-fluid package-down">
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center package-down-1">
		<div class="thumbnail thumbnail-width">
			<img src="{{asset('public/upload/package/'.$p->image)}}" class="img-responsive" alt="{{$p->altimage}}" style="width:100%">
			<h3 class="text-center">{{$p->name}}</h3>
			<hr>
			{!!$p->description!!}
			<!-- <ul class="room-ul">
				<li>Standard Room</li>
				<li>3 Single Beds</li>
				<li>Common Bathroom</li>
				<li>Attached Bathroom</li>
			</ul>

			<ul class="room-ul">
				<li>Including Breakfast   35$</li>
				<li>Including All Meals   65$</li>
			</ul> -->
		</div>
		<a href="{{url('booking',$p->slug)}}"><button type="button" class="btn btn-warning btn-maya">Book</button></a>
	</div>
	@endforeach
<!-- 	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center package-down-1">
		<div class="thumbnail thumbnail-width">
			<img src="{{url('public/images/package 2.JPG')}}" class="img-responsive" alt="Nature" style="width:100%">
			<h3 class="text-center">Standard Triple Room B</h3>
			<hr>
			<ul class="room-ul">
				<li>Standard Room</li>
				<li>1 Double bed</li>
				<li>1 Single bed</li>
			</ul>
			<ul class="room-ul">
				<li>Including Breakfast   35$</li>
				<li>Including All Meals   65$</li>
			</ul>
		</div>
		<a href="{{url('booking')}}"><button type="button" class="btn btn-warning btn-maya">Book</button></a>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center package-down-1">
		<div class="thumbnail thumbnail-width">

			<img src="{{url('public/images/package 3.JPG')}}" class="img-responsive" alt="Fjords" style="width:100%">
			<h3 class="text-center">Deluxe Double Room A</h3>
			<hr>
			<ul class="room-ul">
				<li>Deluxe Room</li>
				<li>1 Deluxe Double Bed</li>
				<li>Attached Bathroom</li>
				<li>Private Balcony</li>
			</ul>
			<ul class="room-ul">
				<li>Including Breakfast   35$</li>
				<li>Including All Meals   65$</li>
			</ul>
		</div>
		<a href="{{url('booking')}}"><button type="button" class="btn btn-warning btn-maya">Book</button></a>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center package-down-1">
		<div class="thumbnail thumbnail-width">

			<img src="{{url('public/images/room4.jpg')}}" class="img-responsive" alt="Fjords" style="width:100%">
			<h3 class="text-center">Standard Double Room A</h3>
			<hr>
			<ul class="room-ul">
				<li>Standard Room</li>
				<li>1 Double Bed</li>
				<li>Attached Bathroom</li>
			</ul>
			<ul class="room-ul">
				<li>Including Breakfast   35$</li>
				<li>Including All Meals   65$</li>
			</ul>
		</div>
		<a href="{{url('booking')}}"><button type="button" class="btn btn-warning btn-maya">Book</button></a>
	</div> -->
</div>

@endsection