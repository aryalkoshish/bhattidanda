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
		<h1 class="capitalize">Our Services</h1> 
	</div>
	<div class="col-md-4 span-brdr">
		<span></span>
	</div>
</div>

<div class="container-fluid margin-bottom-all">
	<div class="container">
		@foreach($service as $s)
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<div class="thumbnail text-center thumbnail-height">
				<img src="{{asset('imageuploadforservice/'.$s->image)}}" class="img-responsive" alt="{{$s->altimage}}" style="width:100%">
				<h2>{{$s->name}}</h2>
				<p>{!!$s->description!!}</p>
			</div>
		</div>
		@endforeach
		<!-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<div class="thumbnail text-center thumbnail-height">
				<img src="{{url('public/images/service2.JPG')}}" class="img-responsive" alt="service2.JPG" style="width:100%">
				<h2>Restaurant</h2>
				<p>We serve locally produced, tasty and healthy food. The menu ranges from light snacks to heavy meals, which is served in our indoor restaurant and on the terrace. We specialize in local Nepali cuisine, but we also offer a lot of other options to choose from.</p>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<div class="thumbnail text-center thumbnail-height">

				<img src="{{url('public/images/service3.JPG')}}" class="img-responsive" alt="service3.JPG" style="width:100%">
				<h2>Local Community</h2>
				<p>We help you engage with the local community, explore the old town, and discover the temples of Dhulikhel. There are also a lot of community based projects to be involved in.</p>

			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<div class="thumbnail text-center thumbnail-height">

				<img src="{{url('public/images/service4.JPG')}}" class="img-responsive" alt="service4.JPG" style="width:100%">
				<h2>Treks and Tours</h2>
				<p>We can organize a tour guide for a hike to Namo Buddha, a famous Buddhist Monastery. It is known for its scenic beauty and importance to Tibetan Buddhism. You can also choose from a range of hikes, lasting an hour or a full day.</p>
			</div>
		</div> -->
	</div>
</div>

@endsection