@extends('frontend.home-master')

@section('content')

<div class="container-fluid">
	<div class="container">
		@foreach($review as $r)
		<div class="col-md-3" style="margin-top: 20px;">
			<div class="thumbnail text-center">
				<h2>{{$r->name}}</h2>
				<h4><em style="padding-bottom: 10px;border-bottom: 1px solid #ddd;">{{$r->address}}</em></h4>
				<p style="text-align: justify;padding: 10px;">{!!strip_tags(str_limit($r->summary,$limit='500'))!!}</p>
				<div>

				</div>
			</div>
		</div>
		<!-- <div class="col-md-3" style="margin-top: 20px;">
			<div class="thumbnail text-center">
				<h2>Jessica</h2>
				<h4><em style="padding-bottom: 10px;border-bottom: 1px solid #ddd;">London, United Kingdom</em></h4>
				<p style="text-align: justify;padding: 10px;">"We were staying elsewhere (although after reading other reviews and eating here I wish we had been staying here!). The food was really tasty and of a good price. The family running it were very friendly. There was drinking water provided. We sat next to the window and got pretty views. I highly recommend the aloo sadeko, a really tasty potato dish. We ate it with dinner AND breakfast as we loved it so much!"</p>
				<div>

				</div>
			</div>
		</div> -->
		@endforeach
	</div>
</div>

@endsection