
		@extends('maseter_home')
        @section('contant')
           		<!-- Home -->

					<div class="container">
						<div class="row">
							<div class="col-sm-7 vertical-center padding-fix">
								<h1>{{$info->title}}</h1>
								<p>{{$info->description}}.</p>
								<p class="button-row"><a href="{{route('home.contact')}}" class="button solid-button purple">Hire Me Now</a></p>
							</div> <!-- end .col-sm-7 -->
							<div class="col-sm-5 vertical-center">
								<img src="{{asset($info->image)}}" alt="{{$info->title}}" class="img-responsive section-img">
							</div> <!-- end .col-sm-5 -->
						</div> <!-- end .row -->
					</div> <!-- end .container -->


        @endsection
