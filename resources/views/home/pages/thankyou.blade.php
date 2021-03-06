@extends('home.layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 alert alert-success">
            <h3><i class="fa fa-check"></i> <strong>Thank You!</strong></h3>
            <p>
                <b>You are just one step away to Redeem Your Voucher.</b>
                <big>Check your email</big><br> <p>We just sent you a verification email to <strong> <em>{{$email}}</em></strong> Please read
                the email and follow the instructions. </p><br>
            <small>Note: If you didn’t get your email into your inbox, please see “spam” folder and mark it as “not spam”</small>
            </p>
        </div>
    </div>

</div>
@section('footer')
    @parent
@endsection
@stop
