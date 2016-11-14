@extends('home.layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-2">
            <h3>Please enter your email so we can send you a link to redeem your voucher:</h3>
              <ul class="featureList">
                  <li class="tick">We will only use your email to communicate to you about the Downstreams platform & the projects on it.</li>
                  <li class="tick">We promise that we won't sell or pass on your address to others.</li>
              </ul>
        </div>
    </div>
    <div class="row">
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="col-sm-3 col-sm-offset-5">
            <form class="form-horizontal" method="post" action="email-sent">

                {{ csrf_field() }}
                <div class="form-group">
                    <input type="email" required class="form-control" name="email" placeholder="Enter Your Email Address"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" value="Redeem Your Voucher Now"/>
                </div>

            </form>
        </div>
    </div>
</div>
@section('footer')
    @parent
@endsection
@stop
