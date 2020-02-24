
@extends('layouts.sucess')
@
@section('title','Sucess')
@section('content')
<div class="section-sucess d-flex align-item-center">
        <div class="col text-center">
            <img src="{{url('frontend/images/ic_mail.png')}}" alt="" class="img-success">
            <h1>Yay! Success</h1>
            <p>We’ve sent you email for trip instruction 
                <br>
                please read it as well
            </p>
            <a href="{{url('/')}}" class="btn btn-home-page mt-4 px-5">Home Page</a>
        </div>
    </div>
@endsection

