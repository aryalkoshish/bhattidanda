@extends('frontend.home-master')
@section('content')


<div class="container" style="text-align: center;">
		<div class="room-inline room-pad">
			@foreach($album as $i)
			<a href="{{url('public/images/gallery/restaurant/1.jpg')}}" class="flipLightBox ">
				<img src="{{asset('public/upload/image/'.$i->image)}}" class="room-img img-responsive" width="300" height="300" alt="flipLightBox Image 1" />
				<!-- <span><b>LightBox</b> Text to accompany first lightbox image</span> -->
			</a>
		</div>
		@endforeach

		<!-- <div class="room-inline room-pad">
			<a href="{{url('public/images/gallery/restaurant/2.jpg')}}" class="flipLightBox ">
				<img src="{{url('public/images/gallery/restaurant/2.jpg')}}" class="room-img img-responsive" width="300" height="300" alt="flipLightBox Image 1" />

				 <span><b>LightBox</b> Text to accompany first lightbox image</span> 
			</a>
		</div>
		<div class="room-inline room-pad">
			<a href="{{url('public/images/gallery/restaurant/3.jpg')}}" class="flipLightBox ">
				<img src="{{url('public/images/gallery/restaurant/3.jpg')}}" class="room-img img-responsive"  width="300" height="300" alt="flipLightBox Image 2" />
				
			</a>
		</div>
		<div class="room-inline room-pad">
			<a href="{{url('public/images/gallery/restaurant/4.jpg')}}" class="flipLightBox ">
				<img src="{{url('public/images/gallery/restaurant/4.jpg')}}" class="room-img img-responsive" width="300" height="300" alt="flipLightBox Image 3" />
				
			</a>
		</div>
		<div class="room-inline room-pad">
			<a href="{{url('public/images/gallery/restaurant/5.jpg')}}" class="flipLightBox ">
				<img src="{{url('public/images/gallery/restaurant/5.jpg')}}" class="room-img img-responsive" width="300" height="300" alt="flipLightBox Image 4" />
				
			</a>
		</div> -->
</div>



<!-- <div class="container margin-all margin-bottom-all">
	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall1.jpg')}}" class="img-responsive">
	</div>

	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall2.jpg')}}" class="img-responsive">
	</div>

	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall2.jpg')}}" class="img-responsive">
	</div>

	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall3.jpg')}}" class="img-responsive">
	</div>

	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall1.jpg')}}" class="img-responsive">
	</div>
	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall2.jpg')}}" class="img-responsive">
	</div>
	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall3.jpg')}}" class="img-responsive">
	</div>
	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall1.jpg')}}" class="img-responsive">
	</div>
	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall2.jpg')}}" class="img-responsive">
	</div>
	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall3.jpg')}}" class="img-responsive">
	</div>

</div>
 -->

@endsection