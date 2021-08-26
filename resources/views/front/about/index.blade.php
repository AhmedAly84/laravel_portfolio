@extends('maseter_home')
@section('contant')

    <div class="container  ">
        <h2  >About Me</h2>
        <div class="row">
            <div class="col-sm-3">
                <img src="{{asset($info->image)}}" alt="man" class="img-responsive section-img">
            </div> <!-- end .col-sm-3 -->
            <div class="col-sm-9">
                <h3 class="small-margin-bottom">{{$info->title}}</h3>
                <h5>{{$info->short_desc}}</h5>
                <p>{{$info->description}} </p>
                <div class="signature"><img src="{{asset($info->sign_img)}}" alt="signature" class="img-responsive"></div>
                <ul class="list-unstyled text-uppercase">
                    <li><b>Date Of Birth:</b> {{$info->birth}}</li>
                    <li><b>Phone:</b> {{$info->phone}}</li>
                    <li><b>Email:</b> {{$info->email}}</li>
                    <li><b>Address:</b> {{$info->adress}}</li>

                </ul> <!-- end .list-unstyled -->

            </div> <!-- end .col-sm-9 -->
        </div> <!-- end .row -->
    </div> <!-- end .container -->



@endsection
