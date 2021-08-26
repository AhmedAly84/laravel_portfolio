@extends('maseter_home')
        @section('contant')

        <div class="container">
            <h2>Get In Touch With Me</h2>
            <div class="row">
                <div class="col-sm-5">
                    <h5>Contact Address</h5>
                    <ul class="list-icons list-unstyled">
                        <li><i class="ion-ios-location-outline"></i>{{$about->adress}}</li>
                        <li><i class="ion-iphone"></i>Phone : {{$about->phone}}</li>
                        <li><i class="ion-ios-email-outline"></i>Email: <a href="mailto:{{$about->email}}">{{$about->email}}</a></li>

                    </ul>
                    <div class="spacer"></div>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/ahmed.aly.14224" class="social-icon"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/ahmed-aly-33bb5a11b" class="social-icon"><i class="fa fa-linkedin"></i></a>

                        <a href="https://github.com/AhmedAly84" class="social-icon"><i class="fa fa-github"></i></a>

                    </div> <!-- end .social-icons -->
                    <div class="spacer"></div>
                </div>
                <div class="col-sm-7">
                    <h5>Contact Form</h5>
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>{{session('success')}}!</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif

                <form  action="{{route('contact.new')}}" method="post" >
                    @csrf
                <div class="form-group">

                    <label >Name</label>
                    <input type="text" name="name" class="form-control"  >
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">

                    <label >Email</label>
                    <input type="email" name="email" class="form-control"  >
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label >Message</label>
                <textarea name="message"class="form-control" cols="10" rows="3"></textarea>
                @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


                <button type="submit" class="btn btn-primary">Send</button>
                </form>


                </div>
            </div>

        </div> <!-- end .container -->

@endsection
