
@php
    $about = DB::table('abouts')->get()->first();
@endphp
<!-- Footer -->
    <footer class="footer " style="margin-top: 50px;">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h4>Address</h4>
                        <p>{{$about->adress}}</p>
                    </div> <!-- end .col-sm-4 -->
                    <div class="col-sm-4">
                        <h4>Connect</h4>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/ahmed.aly.14224" class="social-icon"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.linkedin.com/in/ahmed-aly-33bb5a11b" class="social-icon"><i class="fa fa-linkedin"></i></a>

                            <a href="https://github.com/AhmedAly84" class="social-icon"><i class="fa fa-github"></i></a>

                        </div> <!-- end .social-icons -->
                    </div> <!-- end .col-sm-4 -->
                    <div class="col-sm-4">
                        <h4>Contact</h4>
                        <p>Tel : {{$about->phone}}<br />Mail : {{$about->email}}</p>
                    </div> <!-- end .col-sm-4 -->
                </div> <!-- end .row -->
            </div> <!-- end .container -->
        </div> <!-- end .footer -->
        <div class="bottom">Copyright &copy; 2021. All Rights Reserved.</div> <!-- end .bottom -->
    </footer> <!-- end .footer -->

