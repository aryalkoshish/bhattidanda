@extends('frontend.home-master')
@section('title',$seo->title)
@section('keyword',$seo->keyword) 
@section('description', $seo->description)
@section('content')

<div class="container-fluid abt-pad">
	<div class="col-md-4 span-brdr">
		<span></span>
	</div>
	<div class="col-md-4 text-center">
		<h1 class="capitalize">Gallery</h1> 
	</div>
	<div class="col-md-4 span-brdr">
		<span></span>
	</div>
</div>

 <div class="container margin-bottom-all">
 	
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 product_item">
	@foreach($gallery as $g)
 		<div class="zoom-out-effect left">
 			<div class="img-box center-block gallery-cov">
 				<a href="{{url('album',$g->id)}}"><img src="{{asset('public/upload/album/'.$g->albumimage)}}" class="img-responsive" alt="{{$g->albumname}}"></a>
 			</div>
 		</div>
 		<h3 class="why-bhattidanda text-center">Restaurant</h3>
 	</div>
 	@endforeach
 	<!-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 product_item">
 		<div class="zoom-out-effect left">
 			<div class="img-box center-block gallery-cov">
 				<a href="{{url('album2')}}"><img src="{{url('public/images/room2.JPG')}}" class="img-responsive" alt="..."></a>
 			</div>
 		</div>
 		<h3 class="why-bhattidanda text-center">Rooms</h3>
 	</div>


 	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 product_item">
 		<div class="zoom-out-effect left">
 			<div class="img-box center-block gallery-cov">
 				<a href="{{url('album3')}}"><img src="{{url('public/images/bhattidandaimages/Instagram1.png')}}" class="img-responsive" alt="..."></a>
 			</div>
 		</div>
 		<h3 class="why-bhattidanda text-center">Bhattidanda</h3>
 	</div>

 	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 product_item">
 		<div class="zoom-out-effect left">
 			<div class="img-box center-block gallery-cov">
 				<a href="{{url('album4')}}"><img src="{{url('public/images/bhattidandaimages/3.jpg')}}" class="img-responsive" alt="..."></a>
 			</div>
 		</div>
 		<h3 class="why-bhattidanda text-center">Farm</h3>
 	</div> -->

 	<!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 room-pad product_item">
 		<div class="zoom-out-effect left">
 			<div class="img-box">
 				<a href="{{url('album4')}}"><img src="{{url('public/images/gall4.jpg')}}" class="img-responsive" alt="..."></a>
 				<h3 class="why-bhattidanda text-center">Album 4</h3>
 			</div>
 		</div>
 	</div> -->
 </div>

@endsection