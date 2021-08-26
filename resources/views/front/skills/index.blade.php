@extends('maseter_home')
@section('contant')
<div class="container">
    <h2>My Skills Values</h2>
    <div class="row justify-content-between">
        <div class="col-sm-6">
            <h4>Technical Skills</h4>
            @foreach ($skills as $skill)
            <label class="progress-bar-label">{{$skill->name}}</label>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->presantage}}" aria-valuemin="0" aria-valuemax="100">
                    <span>{{$skill->presantage}}%</span>
                </div> <!-- end .progress-bar -->
            </div> <!-- end .progress -->
            @endforeach

        </div> <!-- end .col-sm-6 -->

        <div class="col-sm-6 ">
            <h4>Knowledge</h4>
            <div class="row justify-content-between">
                <div class="col-sm-6 ">
                    <ul class="list-icons purple bold-list ">
                        @foreach ($knows as $know)
                        <li class=""><i class="md-arrow-forward " ></i>{{$know->name}}</li>

                        @endforeach

                    </ul>
                </div> <!-- end .col-sm-6 -->

            </div> <!-- end .row -->
        </div> <!-- end .col-sm-6 -->
    </div> <!-- end .row -->
    <div class="spacer"></div>
    <h4>Language Skills</h4>
    <div class="row">
        @foreach ($langs as $lang)
        <div class="col-sm-4">
            <div class="circle-progress-wrapper clearfix">
                <div class="circle-progress">
                    <input type="text" class="dial" value="{{$lang->presantage}}" data-color="#7c4dff" data-from="0" data-to="{{$lang->presantage}}" />
                </div> <!-- end .circle-progress -->
                <div class="circle-progress-label-wrapper"><label class="circle-progress-label">{{$lang->name}}</label></div>
            </div> <!-- end .circle-progress-wrapper -->
        </div> <!-- end .col-sm-4 -->

        @endforeach

    </div> <!-- end .row -->
</div> <!-- end .container -->

@endsection
