{{-- @if( Auth::user()->name ) --}}
{{-- @extends('layouts.member_app') --}}
{{-- @else --}}
@extends('layouts.app1')
{{-- @endif --}}
@section('content')
<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                {{-- <h2>Order Tracking</h2> --}}
                {{-- <div class="page_link">
                    <a href="index.html">Home</a>
                    <a href="tracking.html">Order Tracking</a>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Tracking Box Area =================-->
<section class="tracking_box_area p_120">
    <div class="container">
        <div class="tracking_box_inner">
            <h3>سفارش شما ...</h3>
            {{-- <p> This was given
                to you on your receipt and in the confirmation email you should have received.</p> --}}
            {{-- <form class="row tracking_form" action="tracking" method="post" novalidate="novalidate">
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="order" name="order" placeholder="Order ID">
                </div>
                {{-- <div class="col-md-12 form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Billing Email Address">
                </div> --}}
                {{-- <div class="col-md-12 form-group"> --}}
                    {{-- <button type="submit" value="submit" class="btn submit_btn">Track Order</button> --}}
                {{-- </div> --}}
                {{-- </form> --}}
        </div>
    </div>
</section>
<!--================End Tracking Box Area =================-->
@endsection
