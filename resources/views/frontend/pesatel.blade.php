@extends('layouts.frontend')

@section('title', __('Checkout'))
@php 
$gtext = gtext(); 
$gtax = getTax();
$tax_rate = $gtax['percentage'];
config(['cart.tax' => $tax_rate]);
@endphp

@section('meta-content')
	<meta name="keywords" content="{{ $gtext['og_keywords'] }}" />
	<meta name="description" content="{{ $gtext['og_description'] }}" />
	<meta property="og:title" content="{{ $gtext['og_title'] }}" />
	<meta property="og:site_name" content="{{ $gtext['site_name'] }}" />
	<meta property="og:description" content="{{ $gtext['og_description'] }}" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="{{ url()->current() }}" />
	<meta property="og:image" content="{{ asset('media/'.$gtext['og_image']) }}" />
	<meta property="og:image:width" content="600" />
	<meta property="og:image:height" content="315" />
	@if($gtext['fb_publish'] == 1)
	<meta name="fb:app_id" property="fb:app_id" content="{{ $gtext['fb_app_id'] }}" />
	@endif
	<meta name="twitter:card" content="summary_large_image">
	@if($gtext['twitter_publish'] == 1)
	<meta name="twitter:site" content="{{ $gtext['twitter_id'] }}">
	<meta name="twitter:creator" content="{{ $gtext['twitter_id'] }}">
	@endif
	<meta name="twitter:url" content="{{ url()->current() }}">
	<meta name="twitter:title" content="{{ $gtext['og_title'] }}">
	<meta name="twitter:description" content="{{ $gtext['og_description'] }}">
	<meta name="twitter:image" content="{{ asset('media/'.$gtext['og_image']) }}">
@endsection

@section('header')
@include('frontend.partials.inner-header')
@endsection

@section('content')
<div class="tec_page">
<!-- Start Bradcaump area -->
<div class="pr__bradcaump__area pr__bradcaump__home bg-image--home_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center" style="/*margin-top: 170px*/">
                    <h2 class="bradcaump-title">Pesatel</h2>
                    <hr style="background: #ffffff99;margin-left: 520px;margin-right: 520px;margin-bottom: 5px;margin-top: 10px;height: 2px;">
                    <p style="line-height: 40px;"><span style="font-size: 16px;">Payment Processing</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<br><br><br>
<div id="total_price_header" class="text-center"> </div>
<div class="container">
    <div id="pesatel-container">

    </div >
</div>

<br><br><br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){

function pesatel(){
    $(function(){
                new $.Pesatel({
                    env: 'production',
                    customer_data:{
                        msisdn:'',
                        email:data.email
                    },
                    client_id: '640ea34e-16c3-4fa2-a345-caaf234aa097',
                    pass_key: 'pesatel',
                    return_url: '/success',
                    callback: '/post_pesatel_callback',
                    allow_later: false,
                    code: '1110',
                    payment: {
                        amount: data.total,
                        reference: data.order_number,
                        currency: 'KSH'
                    }
                }, "#pesatel-container");
            });
console.log('pesatel function');

};
    // fetchRecord();
});
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://partners.pesatel.com/checkout/lin/pesatel.js"></script>
{{-- <script type="text/javascript" src="{{ asset('js/tecshop.js') }}"></script> --}}
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

@stop