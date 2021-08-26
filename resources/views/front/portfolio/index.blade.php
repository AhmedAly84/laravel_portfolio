@extends('maseter_home')
        @section('contant')

            <div class="container mb-5">
                <h2>Portfolio</h2>
                <div class="portfolio-wrapper " style="direction: rtl;">

                      @foreach ($categories as $cat)
                      <button class="button solid-button white-purple small" >{{$cat->name}}</button>

                      @endforeach
                      <button class="button solid-button white-purple small" >Show All</button>

            </div>

            </div>
            <div class="container " style="margin-top: 20px;">
                <div class="row">
                    @foreach ($portfolio as $p)
                    <div class="col-md-4 " style="margin-bottom: 20px;">
                        <div class="card" >
                            <img src="{{asset($p->image)}}" class="card-img-top" style="width: 300px; height: 300px;" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{$p->category->name}}</h5>
                              <p class="card-text">{{$p->title}}.</p>
                              <a href="{{url('portfolio/details/'.$p->id)}}" class="btn btn-primary">Details</a>
                            </div>
                          </div>
                    </div>
                    @endforeach




                </div>
            </div>


@endsection
