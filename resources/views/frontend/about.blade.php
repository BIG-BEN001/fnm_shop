@extends('layouts.frontend')

@section('title', __('About Us'))
@php 
$gtext = gtext(); 


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
<!-- Page Breadcrumb -->

<!-- /Page Breadcrumb/ -->
<!-- Details -->
{{-- <div class="inner-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="entry min-height">
				{!! $data['content'] !!}
				</div>
			</div>
		</div>
	</div>
</div> --}}
<!-- /Details/ -->

<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="section-title position-relative pb-3 mb-2">
                    {{-- <h5 class="fw-bold text-primary text-uppercase">About Us</h5> --}}
                    <h3 class="mb-0">Who We Are</h3>
                </div>
                <p class="mb-4">F&M is a fashion house based in Nairobi, Kenya. We want our clients to get a complete transformation mind, body and spirit, through their interaction with us.
                    We believe in every woman becoming everything that God created them to be inside and out.
                <p>As of October 2021 we are a made in Kenya brand. We source our fabrics locally and have our production house in Nairobi where we design and tailor to perfection all our clothes.</p>                    
                    <p>Our clothes stand out for their uniqueness of design, the choice of print, the mix of fabrics, the edgy nature of every design and the JESUS in everything we do.
                    Our items are affordably priced, of unmatched quality and designed with love.
                    Made for the woman who values herself. She is all about self love and self growth.</p>
                    <p>She is kind, She is full of grace, She knows her worth, She knows She is blessedÃ¢â‚¬Â¦<br>
                    <b>SHE IS YOU.</b></p>
                </p>
              
            </div>
            <div class="col-lg-6 page-div">
                <div class="position-relative h-100">
                    <img class="position-relative page-img w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{asset('frontend/images/banner6.jpg')}}">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection

@push('scripts')

@endpush