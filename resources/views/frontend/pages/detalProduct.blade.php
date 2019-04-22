@extends('frontend.masterpages')
@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('public/frontend/') }}/css/magiczoomplus.css">
	<link rel="stylesheet" href="{{ asset('public/frontend/') }}/css/magicscroll.css">
@endsection
@section('main')
	@php
		$sale = false;
		if($product->sale != 0){
			$now = date("Y-m-d");
			$begin = date("Y-m-d", strtotime($product->begin_datetime_sale));
			$end = date("Y-m-d", strtotime($product->end_datetime_sale));
			if(strtotime($begin) <= strtotime($now) &&  strtotime($now) <= strtotime($end) ){
				$sale = true;
			}
		}
	@endphp
	<section class="propage">
		<div class="b4">
			<div class="container">
				<ul class="bread justify-content-start list-unstyled">
					<li><a href="{{ asset('/') }}" title="">Trang chủ</a></li>
					<li><a href="{{ asset('san-pham') }}.html" title="">Sản phẩm</a></li>
					<li><a href="#" title="">{{ $product->name }}</a></li>
				</ul>
			</div>
		</div>
		<div class="s16 container pdetail-page">
			<form action="{{ asset('cart/add/'.$product->id) }}" method="POST">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<div class="row">
					<div class="col-md-6">
						<div class="pdetail-l">
							<a class="position-relative MagicZoom" id="allstar" href="#" data-options="selectorTrigger: hover;"  onclick="return false;">
								<img src="{{ asset('uploads/product/avatar/'.$product->image) }}" alt=""/>
								@if ($sale == true)
									<span class="position-absolute sale s14 text-white">-{{ $product->sale }}%</span>
								@endif
								
							</a>
							<div class="MagicScroll" id="ZoomScroll" data-options="height:460px;width:75px; orientation:vertical;items: 5;autoplay: true;" data-mobile-options="orientation:horizontal;items:3;width:100%;height: 80px;arrows:inside">
								
		                        <a data-zoom-id="allstar" href="#" data-zoom-image="../{{ 'uploads/product/avatar/'.$product->image }}">
		                        	<img src="{{ asset('uploads/product/avatar/'.$product->image) }}" alt="Hướng dẫn đổi trả">
		                        </a>
								@if ($product->more_image != null)
									@php
										$list_image = json_decode($product->more_image);
									@endphp
									@foreach ($list_image as $imageItem)
										<a data-zoom-id="allstar" href="#" data-image="{{ asset('uploads/product/prod/'.$imageItem) }}" onclick="return false;">
		                        			<img src="{{ asset('uploads/product/prod/'.$imageItem) }}" alt=""/>
			                        	</a>
									@endforeach   
								@endif
		                    </div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="pdetail-r">
							<h1 class="s24 pt-2 pb-1 pdetail-tit">{{ $product->name }}</h1>
							<ul data-rate="4" class="pb-2 list-unstyled star">
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
							</ul>
							<div class="pdetail-price">
								@if ($sale == true)
									<span class="d-block medium s30 t3 pr-4">Giá bán:  {!! number_format($product['price_promotion'],0,',','.') !!}  đ</span>
									<del class="d-block s20 italic t4">Giá cũ: {!! number_format($product['price'],0,',','.') !!} đ</del>
								@else
									<span class="d-block medium s30 t3 pr-4">Giá bán:  {!! number_format($product['price'],0,',','.') !!} đ</span>
								@endif
								<input type="hidden" value="{{ $sale == true ? $product['price_promotion'] : $product['price']  }}" name="price">
							</div>
							@if ($sale == true)
								<div class="b1 medium s18 text-white pdetail-sale-tit">Thời gian khuyến mãi còn</div>
								<ul class="position-static b2 list-unstyled d-flex flex-wrap align-items-center text-uppercas slider-count">
									<input type="hidden" value="{{ date("Y/m/d", strtotime($product->end_datetime_sale)) }}" id="demnguoc">
									<li class="d-inline-block b2 count-date"><strong class="s48">05</strong></li>
									<li class="d-inline-block b2 count-hours"><strong class="s48">23</strong></li>
									<li class="d-inline-block b2 count-minute"><strong class="s48">05</strong></li>
									<li class="d-inline-block b2 count-second"><strong class="s48">35</strong></li>
								</ul>
							@endif

							<div class="py-3 d-flex align-items-center flex-wrap">
						        <h3 class="s17">Màu sắc:</h3>
						        <input type="hidden" value="0" name="option">
						        <ul class="vk-list__color" data-list="active">
						            @if ($product->option != null)
							            @php
							            	$options = explode(",", $product->option);
							            	$stt = 0;
							            @endphp
						            	@foreach ( $options as $option)
						            		<?php $stt++ ?>
						            		<li class="@if ($stt == 1) active @endif" data-value="{{ $option }}"># {{  $option }}</li>
						            	@endforeach
						            @endif 
						        </ul>
						    </div>
							<div class="d-flex align-items-center pt-4 pdetail-act">
								<div class="d-flex align-items-center position-relative pdetail-quan">
									<div class="dec count button">+</div>
							        <input class="qty" type="number" min="1" value="1">
							        <div class="inc count button">-</div>
							    </div>
								<button type="submit" title="" class="btn mx-2 buy-btn"><img class="mr-2" src="{{ asset('public/frontend') }}/images/cart.png" alt="" title=""> Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<div class="pdetail-content">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<ul class="list-unstyled d-flex align-items-center pdetail-nav scroll-link">
							<li><a href="#mota" title="">Mô tả</a></li>
							<li><a href="#danhgia" title="">Đánh giá</a></li>
						</ul>

						<div id="mota" class="pdetail-content-wrap scrollspy">
							<div class="pdetail-scontent">
								{!! $product->content_main !!}
							</div>
							<ul class="list-unstyled d-flex align-items-center pdetail-share">
								<li>Chia sẻ:</li>
								<li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
								<li><a href="#" title=""><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
						<div id="danhgia" class="pt-5 scrollspy">
							<h2 class="s24 pb-4 rate-tit">Đánh giá</h2>
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<h3>Chọn số sao đánh giá</h3>
									<div class="pdetail-cm-wrap">
										<select id="example" style="display: none;">
		                                    <option value="1">1</option>
		                                    <option value="2">2</option>
		                                    <option value="3">3</option>
		                                    <option value="4">4</option>
		                                    <option value="5">5</option>
		                                </select>
									</div>
								</div>
								<div class="col-md-9 col-sm-6">
									<div class="pdetail-cm">
										<img src="{{ asset('public/frontend') }}/images/fb.jpg" alt="" title=""> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="pdetail-re">
		<div class="container">
			<h2 class="s24 pdetail-retit"><span>SẢN PHẨM LIÊN QUAN</span></h2>
			<div class="hpro-slider">
				@foreach ($product_relation as $item)
					@php
						$sale = false;
						if($item->sale != 0){
							$now = date("Y-m-d");
							$begin = date("Y-m-d", strtotime($item->begin_datetime_sale));
	        				$end = date("Y-m-d", strtotime($item->end_datetime_sale));
	        				if( strtotime($begin) <= strtotime($now) &&  strtotime($now) <= strtotime($end) ){
	        					$sale = true;
	        				}
						}
					@endphp
					<article class="sale-item">
						<figure class="position-relative sale-img">
							<a href="{{ asset('san-pham/'.$item->slug.'-p'.$item->id) }}.html" title=""><img src="{{ asset('uploads/product/avatar/'.$item->image) }}" alt="" title=""></a>
							@if ($sale == true)
								<span class="s12 text-white text-center position-absolute sale">-{{ $item->sale }}%</span>
							@endif
						</figure>
						<figcaption class="sale-info">
							<h3 class="sale-info-tit"><a href="{{ asset('san-pham/'.$item->slug.'-p'.$item->id) }}.html" title="">{{ $item->name }}</a></h3>
							<ul data-rate="4" class="list-unstyled star">
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
							</ul>
							<div class="d-flex align-items-center justify-content-between sale-item-act">
								<div class="sale-item-act-price">
									@if ($sale == true)
										<span class="d-block t3 s16 medium sale-price">{!! number_format($item['price_promotion'],0,',','.') !!} đ</span>
										<del class="s14 italic t4 sale-old-price">Giá cũ:  {!! number_format($item['price'],0,',','.') !!} đ</del>
									@else
										<span class="d-block t3 s16 medium sale-price">{!! number_format($item['price'],0,',','.') !!} đ</span>
									@endif
								</div>
								<a class="sale-add-btn" href="#" title=""><i class="fas fa-cart-plus"></i></a>
							</div>
						</figcaption>
					</article>
				@endforeach
			</div>
		</div>
	</section>
@endsection
@section('script')
	<script src="{{ asset('public/frontend/') }}/js/jquery.barrating.min.js"></script>
	<script src="{{ asset('public/frontend/') }}/js/magiczoomplus.js"></script>
	<script src="{{ asset('public/frontend/') }}/js/magicscroll.js"></script>
@endsection


