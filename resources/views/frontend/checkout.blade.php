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
<<<<<<< HEAD
	<meta property="og:image" content="{{ asset('media/'.$gtext['og_image']) }}" />
=======
	<meta property="og:image" content="{{ asset('public/media/'.$gtext['og_image']) }}" />
>>>>>>> da708e9 (updated on ipay)
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
<<<<<<< HEAD
	<meta name="twitter:image" content="{{ asset('media/'.$gtext['og_image']) }}">
=======
	<meta name="twitter:image" content="{{ asset('public/media/'.$gtext['og_image']) }}">
>>>>>>> da708e9 (updated on ipay)
@endsection

@section('header')
@include('frontend.partials.inner-header')
@endsection

@section('content')
	<!-- Page Breadcrumb -->
	<div class="breadcrumb-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="page-title">
						<h1>{{ __('Checkout') }}</h1>
					</div>
				</div>
				<div class="col-lg-6">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ __('Checkout') }}</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- /Page Breadcrumb/ -->
<<<<<<< HEAD


	


=======
>>>>>>> da708e9 (updated on ipay)
	<!-- Checkout -->
	<div class="section bg-white my_card">
		<div class="container">
			<form method="POST" action="/frontend/make_order">
<<<<<<< HEAD
				{{-- @if (count($errors) > 0)
					<div class = "alert alert-danger">
						<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
						</ul>
					</div>
				@endif --}}
		
				@csrf
	
=======
			 <!--   @if (count($errors) > 0)-->
				<!--	<div class = "alert alert-danger">-->
				<!--		<ul>-->
				<!--		@foreach ($errors->all() as $error)-->
				<!--			<li>{{ $error }}</li>-->
				<!--		@endforeach-->
				<!--		</ul>-->
				<!--	</div>-->
				<!--@endif-->
				@csrf
>>>>>>> da708e9 (updated on ipay)
				<div class="row">
					<div class="col-lg-7">
						<h5>{{ __('Shipping Information') }}</h5>
						<p>{{ __('Already have an account?') }} <a href="{{ route('frontend.login') }}">{{ __('login') }}</a></p>
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<input id="name" name="name" type="text" placeholder="{{ __('Name') }}" value="@if(isset(Auth::user()->name)) {{ Auth::user()->name }} @endif" class="form-control parsley-validated" data-required="true">
<<<<<<< HEAD
									<span class="text-danger error-text name_error"></span>
									@error('name')
										<span class="text-danger error-text">{{ $message }}</span>
=======
									<!--<span class="text-danger error-text name_error"></span>-->
									@error('name')
										<span class="alert alert-danger">{{ $message }}</span>
>>>>>>> da708e9 (updated on ipay)
									@enderror
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<input id="email" name="email" type="email" placeholder="{{ __('Email Address') }}" value="@if(isset(Auth::user()->email)) {{ Auth::user()->email }} @endif" class="form-control parsley-validated" data-required="true">
<<<<<<< HEAD
									<span class="text-danger error-text email_error"></span>
=======
									<!--<span class="text-danger error-text email_error"></span>-->
>>>>>>> da708e9 (updated on ipay)
									@error('email')
										<span class="text-danger error-tex">{{ $message }}</span>
									@enderror
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<input id="phone" name="phone" type="text" placeholder="{{ __('Phone') }}" value="@if(isset(Auth::user()->phone)) {{ Auth::user()->phone }} @endif" class="form-control parsley-validated" data-required="true">
<<<<<<< HEAD
									<span class="text-danger error-text phone_error"></span>
=======
									<!--<span class="text-danger error-text phone_error"></span>-->
>>>>>>> da708e9 (updated on ipay)
									@error('phone')
										<span class="text-danger error-text">{{ $message }}</span>
									@enderror
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
<<<<<<< HEAD
									<select id="country" name="country" class="form-select parsley-validated" >
										{{-- <i class="fa fa-chevron-circle-down" aria-hidden="true"></i> --}}
										<i class="bi bi-chevron-down"></i>
									<option value="">{{ __('Country') }}</option>
=======
									<select id="country" name="country" class="form-select parsley-validated">
									<option value="">{{ __('Select Country') }}</option>
>>>>>>> da708e9 (updated on ipay)
									@foreach($country_list as $row)
									<option value="{{ $row->country_name }}">
										{{ $row->country_name }}
									</option>
									@endforeach
									</select>
									<span class="text-danger error-text country_error"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
<<<<<<< HEAD
									<input id="state" name="state" type="text" placeholder="{{ __('State') }}" class="form-control parsley-validated" >
									<span class="text-danger error-text state_error"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<input id="zip_code" name="zip_code" type="text" placeholder="{{ __('Zip Code') }}" class="form-control parsley-validated" >
									<span class="text-danger error-text zip_code_error"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<input id="city" name="city" type="text" placeholder="{{ __('City') }}" class="form-control parsley-validated" data-required="true">
									<span class="text-danger error-text city_error"></span>
=======
									<input id="city" name="city" type="text" placeholder="{{ __('City') }}" class="form-control parsley-validated" data-required="true">
									<!--<span class="text-danger error-text city_error"></span>-->
>>>>>>> da708e9 (updated on ipay)
									@error('city')
										<span class="text-danger error-text">{{ $message }}</span>
									@enderror
								</div>
							</div>
<<<<<<< HEAD
=======
							<!--<div class="col-md-6">-->
							<!--	<div class="mb-3">-->
							<!--		<input id="state" name="state" type="text" placeholder="{{ __('State') }}" class="form-control parsley-validated">-->
							<!--		<span class="text-danger error-text state_error"></span>-->
							<!--	</div>-->
							<!--</div>-->
						</div>
						<div class="row">
							<!--<div class="col-md-6">-->
							<!--	<div class="mb-3">-->
							<!--		<input id="zip_code" name="zip_code" type="text" placeholder="{{ __('Zip Code') }}" class="form-control parsley-validated">-->
							<!--		<span class="text-danger error-text zip_code_error"></span>-->
							<!--	</div>-->
							<!--</div>-->
							<!--<div class="col-md-6">-->
							<!--	<div class="mb-3">-->
							<!--		<input id="city" name="city" type="text" placeholder="{{ __('City') }}" class="form-control parsley-validated" data-required="true">-->
							<!--		<span class="text-danger error-text city_error"></span>-->
							<!--	</div>-->
							<!--</div>-->
>>>>>>> da708e9 (updated on ipay)
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
<<<<<<< HEAD
									<textarea id="address" name="address" placeholder="{{ __('Shipping Address') }}" rows="2" class="form-control parsley-validated" >@if(isset(Auth::user()->address)) {{ Auth::user()->address }} @endif</textarea>
=======
									<textarea id="address" name="address" placeholder="{{ __('Shipping Address') }}" rows="2" class="form-control parsley-validated">@if(isset(Auth::user()->address)) {{ Auth::user()->address }} @endif</textarea>
>>>>>>> da708e9 (updated on ipay)
									<span class="text-danger error-text address_error"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="checkboxlist">
									<label class="checkbox-title">
										<input id="new_account" name="new_account" type="checkbox">{{ __('Register an account with above information?') }} 
									</label>
								</div>
								@if ($errors->has('password'))
								<span class="text-danger">{{ $errors->first('password') }}</span>
								@endif
							</div>
						</div>
						
						<div class="row hideclass" id="new_account_pass">
							<div class="col-md-6">
								<div class="mb-3">
									<input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password') }}">
									<span class="text-danger error-text password_error"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirm password') }}">
								</div>
							</div>
						</div>
						
<<<<<<< HEAD
						<h5 class="mt10">{{ __('Leave Us a Message') }}</h5>
=======
						<h5 class="mt10">{{ __('Leave a comment') }}</h5>
>>>>>>> da708e9 (updated on ipay)
						<div class="row">
							<div class="col-md-12">
								<span class="text-danger error-text payment_method_error"></span>
								@if($gtext['stripe_isenable'] == 1)
								<div class="checkboxlist">
									<label class="checkbox-title">
<<<<<<< HEAD
										<input id="payment_method_stripe" name="payment_method" type="radio" value="3"><img src="{{ asset('frontend/images/stripe.png') }}" alt="Stripe" />
=======
										<input id="payment_method_stripe" name="payment_method" type="radio" value="3"><img src="{{ asset('public/frontend/images/stripe.png') }}" alt="Stripe" />
>>>>>>> da708e9 (updated on ipay)
									</label>
								</div>
								<div id="pay_stripe" class="row hideclass">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-12">
												<div class="mb-3">
													<div class="form-control" id="card-element"></div>
													<span class="card-errors" id="card-errors"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endif
								
								@if($gtext['isenable_paypal'] == 1)
								<div class="checkboxlist">
									<label class="checkbox-title">
<<<<<<< HEAD
										<input id="payment_method_paypal" name="payment_method" type="radio" value="4"><img src="{{ asset('frontend/images/paypal.png') }}" alt="Paypal" />
=======
										<input id="payment_method_paypal" name="payment_method" type="radio" value="4"><img src="{{ asset('public/frontend/images/paypal.png') }}" alt="Paypal" />
>>>>>>> da708e9 (updated on ipay)
									</label>
								</div>
								<p id="pay_paypal" class="hideclass">{{ __('Pay online via Paypal') }}</p>
								@endif
								
								@if($gtext['isenable_razorpay'] == 1)
								<div class="checkboxlist">
									<label class="checkbox-title">
<<<<<<< HEAD
										<input id="payment_method_razorpay" name="payment_method" type="radio" value="5"><img src="{{ asset('frontend/images/razorpay.png') }}" alt="Razorpay" />
=======
										<input id="payment_method_razorpay" name="payment_method" type="radio" value="5"><img src="{{ asset('public/frontend/images/razorpay.png') }}" alt="Razorpay" />
>>>>>>> da708e9 (updated on ipay)
									</label>
								</div>
								<p id="pay_razorpay" class="hideclass">{{ __('Pay online via Razorpay') }}</p>
								@endif
								
								@if($gtext['isenable_mollie'] == 1)
								<div class="checkboxlist">
									<label class="checkbox-title">
<<<<<<< HEAD
										<input id="payment_method_mollie" name="payment_method" type="radio" value="6"><img src="{{ asset('frontend/images/mollie.png') }}" alt="Mollie" />
=======
										<input id="payment_method_mollie" name="payment_method" type="radio" value="6"><img src="{{ asset('public/frontend/images/mollie.png') }}" alt="Mollie" />
>>>>>>> da708e9 (updated on ipay)
									</label>
								</div>
								<p id="pay_mollie" class="hideclass">{{ __('Pay online via Mollie') }}</p>
								@endif
								
								@if($gtext['cod_isenable'] == 1)
								<div class="checkboxlist">
									<label class="checkbox-title">
<<<<<<< HEAD
										<input id="payment_method_cod" name="payment_method" type="radio" value="1"><img src="{{ asset('frontend/images/cash_on_delivery.png') }}" alt="Cash on Delivery" />
=======
										<input id="payment_method_cod" name="payment_method" type="radio" value="1"><img src="{{ asset('public/frontend/images/cash_on_delivery.png') }}" alt="Cash on Delivery" />
>>>>>>> da708e9 (updated on ipay)
									</label>
								</div>
								<p id="pay_cod" class="hideclass">{{ $gtext['cod_description'] }}</p>
								@endif
								
								@if($gtext['bank_isenable'] == 1)
								<div class="checkboxlist">
									<label class="checkbox-title">
<<<<<<< HEAD
										<input id="payment_method_bank" name="payment_method" type="radio" value="2"><img src="{{ asset('frontend/images/bank_transfer.png') }}" alt="Bank Transfer" />
=======
										<input id="payment_method_bank" name="payment_method" type="radio" value="2"><img src="{{ asset('public/frontend/images/bank_transfer.png') }}" alt="Bank Transfer" />
>>>>>>> da708e9 (updated on ipay)
									</label>
								</div>
								<p id="pay_bank" class="hideclass">{{ $gtext['bank_description'] }}</p>
								@endif
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<textarea name="comments" class="form-control" placeholder="Note" rows="2"></textarea>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-5">
						<div class="carttotals-card">
							<div class="carttotals-head">{{ __('Order Summary') }}</div>
							<div class="carttotals-body">
								<table class="table">
									<tbody>
										@php 
										$CartDataList = Cart::instance('shopping')->content();
										$CartDataArr = array();
										@endphp
										
										@foreach($CartDataList as $row)
											@php
											$row->setTaxRate($tax_rate);
											Cart::instance('shopping')->update($row->rowId, $row->qty);
											
											$data = array(
												'rowId' => $row->rowId, 
												'id' => $row->id, 
												'qty' => $row->qty, 
												'name' => $row->name, 
												'price' => $row->price, 
												'weight' => $row->weight, 
												'thumbnail' => $row->options->thumbnail, 
												'color' => $row->options->color,
												'size' => $row->options->size,
												'seller_id' => $row->options->seller_id,
												'seller_name' => $row->options->seller_name,
												'store_name' => $row->options->store_name,
												'store_logo' => $row->options->store_logo,
												'store_url' => $row->options->store_url,
												'seller_email' => $row->options->seller_email,
												'seller_phone' => $row->options->seller_phone,
												'seller_address' => $row->options->seller_address
											);
											
											$CartDataArr[$row->options->seller_id][] = $data;
											@endphp
										@endforeach
										
										@php $CartData_Arr = array(); @endphp
										@foreach($CartDataArr as $aRows)
											@foreach($aRows as $row)
												@php $CartData_Arr[] = $row; @endphp
											@endforeach
										@endforeach
										
										@php 
										$tempSellerId = ''; 
										$SellerCount = 0; 
										@endphp
		
										@foreach($CartData_Arr as $row)
											@php

											if($row['color'] == '0'){
												$color = '&nbsp;';
											}else{
												$color = 'Color: '.$row['color'].'&nbsp;';
											}
					
											if($row['size'] == '0'){
												$size = '&nbsp;';
											}else{
												$size = 'Size: '.$row['size'];
											}
											
											@endphp
											
											@if($tempSellerId != $row['seller_id'])
<<<<<<< HEAD
											<tr>
=======
											{{-- <tr>
>>>>>>> da708e9 (updated on ipay)
												<td colspan="2" class="tp_group">
													<div class="store_logo">
														<a href="{{ route('frontend.stores', [$row['seller_id'], str_slug($row['store_name'])]) }}">
															<img src="{{ asset('media/'.$row['store_logo']) }}" alt="{{ $row['store_name'] }}" />
														</a>
													</div>
													<div class="store_name">
														<p><strong>{{ __('Sold By') }}</strong></p>
														<p><a href="{{ route('frontend.stores', [$row['seller_id'], str_slug($row['store_url'])]) }}">{{ $row['store_name'] }}</a></p>
													</div>
												</td>
<<<<<<< HEAD
											</tr>
=======
											</tr> --}}
>>>>>>> da708e9 (updated on ipay)
											
											@php 
											$tempSellerId=$row['seller_id']; 
											$SellerCount++;
											@endphp
											
											@endif
											
											@if($gtext['currency_position'] == 'left')
											<tr>
												<td>
													<p class="title">{{ $row['name'] }}</p>
													<p class="sub-title">@php echo $color.$size; @endphp</p>
												</td>
												<td>
<<<<<<< HEAD
													<p class="price">{{ $gtext['currency_icon'] }}{{ number_format($row['price']*$row['qty']) }}</p>
													<p class="sub-price">{{ $gtext['currency_icon'] }}{{ $row['price'] }} x {{ $row['qty'] }}</p>
=======
													<p class="price">{{ $gtext['currency_icon'] }} {{ number_format($row['price']*$row['qty']) }}</p>
													<p class="sub-price">{{ $gtext['currency_icon'] }} {{ $row['price'] }} x {{ $row['qty'] }}</p>
>>>>>>> da708e9 (updated on ipay)
												</td>
											</tr>
											@else
											<tr>
												<td>
													<p class="title">{{ $row['name'] }}</p>
													<p class="sub-title">@php echo $color.$size; @endphp</p>
												</td>
												<td>
<<<<<<< HEAD
													<p class="price">{{ number_format($row['price']*$row['qty']) }}{{ $gtext['currency_icon'] }}</p>
													<p class="sub-price">{{ $row['price'] }}{{ $gtext['currency_icon'] }} x {{ $row['qty'] }}</p>
=======
													<p class="price">{{ number_format($row['price']*$row['qty']) }} {{ $gtext['currency_icon'] }}</p>
													<p class="sub-price">{{ $row['price'] }} {{ $gtext['currency_icon'] }} x {{ $row['qty'] }}</p>
>>>>>>> da708e9 (updated on ipay)
												</td>
											</tr>
											@endif
										@endforeach
										
										@php
											if($gtext['currency_position'] == 'left'){
<<<<<<< HEAD
												$ShippingFee = $gtext['currency_icon'].'<span class="shipping_fee">0</span>'; 
												$tax = $gtext['currency_icon'].Cart::instance('shopping')->tax();
												$total = $gtext['currency_icon'].'<span class="total_amount">'.Cart::instance('shopping')->total().'</span>';
=======
												$ShippingFee = $gtext['currency_icon'].' <span class="shipping_fee">0</span>'; 
												$tax = $gtext['currency_icon'].' '.Cart::instance('shopping')->tax();
												$total = $gtext['currency_icon'].' <span class="total_amount">'.Cart::instance('shopping')->total().'</span>';
>>>>>>> da708e9 (updated on ipay)
											}else{
												$ShippingFee = '<span class="shipping_fee">0</span>'.$gtext['currency_icon'];
												$tax = Cart::instance('shopping')->tax().$gtext['currency_icon'];
												$total = '<span class="total_amount">'.Cart::instance('shopping')->total().'</span>'.$gtext['currency_icon'];
											}
										@endphp
										
										<tr><td colspan="2"><span class="title">{{ __('Shipping Fee') }} </span><span class="price">@php echo $ShippingFee; @endphp</span></td></tr>
										<tr><td colspan="2"><span class="title">{{ __('Tax') }}</span><span class="price">{{ $tax }}</span></td></tr>
										<tr><td colspan="2"><span class="total">{{ __('Total') }}</span><span class="total-price">@php echo $total; @endphp</span></td></tr>
<<<<<<< HEAD
									
									</tbody>
								</table>
								@if(count($shipping_list)>0)
								<h5>{{ __('Shipping Charges') }}</h5>
								<div class="row">
									<div class="col-md-12">
										<span class="text-danger error-text shipping_method_error"></span>
												@error('shipping_method')
=======
									    
									</tbody>
								</table>
								@if(count($shipping_list)>0)
								<h5>{{ __('Delivery Charges') }}</h5>
								<div class="row">
									<div class="col-md-12">
										<span class="text-danger error-text shipping_method_error"></span>
											    @error('shipping_method')
>>>>>>> da708e9 (updated on ipay)
													<span class="text-danger error-text">{{ $message }}</span>
												@enderror
										@foreach($shipping_list as $row)
											@php
												if($gtext['currency_position'] == 'left'){
<<<<<<< HEAD
													$shipping_fee = $gtext['currency_icon'].$row->shipping_fee;
												}else{
													$shipping_fee = $row->shipping_fee.$gtext['currency_icon'];
=======
													$shipping_fee = $gtext['currency_icon'].' '.$row->shipping_fee;
												}else{
													$shipping_fee = $row->shipping_fee.' '.$gtext['currency_icon'];
>>>>>>> da708e9 (updated on ipay)
												}
											@endphp
											<div class="checkboxlist">
												<label class="checkbox-title">
													<input data-seller_count="{{ $SellerCount }}" data-shippingfee="{{ $row->shipping_fee }}" data-total="{{ Cart::instance('shopping')->total() }}" class="shipping_method" name="shipping_method" type="radio" value="{{ $row->id }}">{{ $row->title }} : {{ $shipping_fee }}
												</label>
											</div>
<<<<<<< HEAD
											
=======
>>>>>>> da708e9 (updated on ipay)
										@endforeach
									</div>
								</div>
								@endif
<<<<<<< HEAD
								
								<input type="hidden" name="total_charge" class="total_charge" value="">
								<input name="customer_id" type="hidden" value="@if(isset(Auth::user()->id)) {{ Auth::user()->id }} @endif" />
								<input name="razorpay_payment_id" id="razorpay_payment_id" type="hidden" />
								{{-- <a id="checkout_submit_form" href="javascript:void(0);" class="btn theme-btn mt10 checkout_btn">{{ __('Checkout') }}</a> --}}

								@if(Session::has('pt_payment_error'))
								<div class="alert alert-danger">
									{{Session::get('pt_payment_error')}}
								</div>
								@endif
								<div class="checkboxlist">
									<label class="checkbox-title">
										<input id="payment_method_paypal" name="payment_method" type="radio" value="4"><img src="{{ asset('frontend/images/paypal.png') }}" alt="Paypal" />
									</label>
									<br>
									<label class="checkbox-title">
										<input id="payment_method_ipay" name="payment_method" type="radio" value="7"><img src="{{ asset('frontend/images/ipay.png') }}" alt="ipay" style="width: 100px;"/>
									</label>
								</div>
								<button	name="pay_btn" class="btn theme-btn mt10 checkout_btn" id="pay_btn" type="submit">  Lipa  </button> 
=======

                                <input type="hidden" name="total_charge" class="total_charge" value="">
								<input name="customer_id" type="hidden" value="@if(isset(Auth::user()->id)) {{ Auth::user()->id }} @endif" />
								<input name="razorpay_payment_id" id="razorpay_payment_id" type="hidden" />
								
								<div class="checkboxlist">
									<!--<label class="checkbox-title">-->
									<!--	<input id="payment_method_paypal" name="payment_method" type="radio" value="4"><img src="{{ asset('frontend/images/paypal.png') }}" alt="Paypal" />-->
									<!--</label>-->
									<!--<br>-->
									<label class="checkbox-title">
										<input id="payment_method_ipay" name="payment_method" type="radio" value="7"><img src="{{ asset('public/frontend/images/ipay.png') }}" alt="ipay" style="width: 100px;"/>
									</label>
								</div>
								<button name="pay_btn" class="btn theme-btn mt10 checkout_btn" type="submit">  Make Payment  </button>
								<!--<a id="checkout_submit_form" href="javascript:void(0);" class="btn theme-btn mt10 checkout_btn">{{ __('Checkout') }}</a>-->

								<!--@if(Session::has('pt_payment_error'))-->
								<!--<div class="alert alert-danger">-->
								<!--	{{Session::get('pt_payment_error')}}-->
								<!--</div>-->
								<!--@endif-->
								
>>>>>>> da708e9 (updated on ipay)
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- /Checkout/ -->

@endsection

<<<<<<< HEAD



@push('scripts')
<script src="{{asset('frontend/js/parsley.min.js')}}"></script>
=======
@push('scripts')
<script src="{{asset('public/frontend/js/parsley.min.js')}}"></script>
>>>>>>> da708e9 (updated on ipay)
<script type="text/javascript">
var theme_color = "{{ $gtext['theme_color'] }}";
var site_name = "{{ $gtext['site_name'] }}";
var validCardNumer = 0;
var TEXT = [];
	TEXT['Please type valid card number'] = "{{ __('Please type valid card number') }}";
</script>
@if($gtext['stripe_isenable'] == 1)
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
	var isenable_stripe = "{{ $gtext['stripe_isenable'] }}";
	var stripe_key = "{{ $gtext['stripe_key'] }}";
</script>
<<<<<<< HEAD
<script src="{{asset('frontend/pages/payment_method.js')}}"></script>
=======
<script src="{{asset('public/frontend/pages/payment_method.js')}}"></script>
>>>>>>> da708e9 (updated on ipay)
@endif

@if($gtext['isenable_razorpay'] == 1)
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript">
	var isenable_razorpay = "{{ $gtext['isenable_razorpay'] }}";
	var razorpay_key_id = "{{ $gtext['razorpay_key_id'] }}";
	var razorpay_currency = "{{ $gtext['razorpay_currency'] }}";
</script>
@endif
<<<<<<< HEAD
<script src="{{asset('frontend/pages/checkout.js')}}"></script>
{{-- <script src="{{asset('frontend/pages/ipay.js')}}"></script> --}}
=======
<script src="{{asset('public/frontend/pages/checkout.js')}}"></script>
>>>>>>> da708e9 (updated on ipay)
@endpush
