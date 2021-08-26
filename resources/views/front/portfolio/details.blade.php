@extends('maseter_home')
        @section('contant')


        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="portfolio-slider">
                        <div><img src="{{asset($details->image)}}" alt="alt text" class="img-responsive"></div>

                    </div> <!-- end .portfolio-slider -->

                </div> <!-- end .col-sm-8 -->
                <div class="col-sm-4">

                    <div class="portfolio-details">
                        <h4>{{$details->title}}</h4>
                        <p>{{$details->description}}</p>
                        <div class="portfolio-meta">
                            <span>Date:</span>
                          {{$details->date}}
                        </div> <!-- end .portfolio-meta -->
                        <div class="portfolio-meta">
                            <span>Client:</span>
                           {{$details->clinet}}
                        </div> <!-- end .portfolio-meta -->

                        <div class="portfolio-meta">
                            <span>Type:</span>
                          {{$details->category->name}}
                        </div> <!-- end .portfolio-meta -->
                        <p><a href="" class="button solid-button purple">Visit Website</a></p>
                    </div> <!-- end .portfolio-details -->
                </div> <!-- end .col-sm-4 -->
            </div> <!-- end .row -->
        </div> <!-- end .container -->

@endsection
