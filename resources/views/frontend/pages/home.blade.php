@extends('frontend.masterpages')
@section('main')
	<section class="slider-wrap">
		<div class="container">
			<div class="index-slider">
				@foreach ($slider as $item)
					<a href="{{ $item->link }}" title=""><img data-lazy="{{ asset('uploads/slider/'.$item->image) }}" alt="" title=""></a>
				@endforeach
			</div>
		</div>
	</section>

	<section class="">
		<div class="container">
			<div class="b1 text-white intro">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<article class="d-flex intro-item-center intro-item">
							<img src="{{ asset('public/frontend/') }}/images/icon1.png" alt="" title="">
							<div class="t2 s12 intro-item-content">
								<h2 class="s17 medium text-white intro-tit">TÍCH LŨY ĐIỂM & VIP</h2>
								<p>Tích lũy điểm & kích hoạt VIP thêm các ưu đãi</p>
							</div>
						</article>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<article class="d-flex intro-item">
							<img src="{{ asset('public/frontend/') }}/images/icon2.png" alt="" title="">
							<div class="t2 s12 intro-item-content">
								<h2 class="s17 medium text-white intro-tit">CHÍNH SÁCH CTV</h2>
								<p>Nhiều ưu đãi & phần thưởng hấp dẫn</p>
							</div>
						</article>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<article class="d-flex intro-item">
							<img src="{{ asset('public/frontend/') }}/images/icon3.png" alt="" title="">
							<div class="t2 s12 intro-item-content">
								<h2 class="s17 medium text-white intro-tit">NHIỀU QUÀ TẶNG</h2>
								<p>Tặng kèm quà tặng cho đơn hàng trên 500.000 đ</p>
							</div>							
						</article>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<article class="d-flex intro-item">
							<img src="{{ asset('public/frontend/') }}/images/icon4.png" alt="" title="">
							<div class="t2 s12 intro-item-content">
								<h2 class="s17 medium text-white intro-tit">HÀNG CHÍNH HÃNG</h2>
								<p>Đảm bảo hàng 100% chính hãng nhập khẩu</p>
							</div>
						</article>
					</div>
				</div>
			</div>
			
		</div>
	</section>

	<section class="cate">
		<div class="container">
			<h1 class="text-center s24 cate-tit">SẢN PHẨM CỦA CHÚNG TÔI</h1>
			<div class="cate-slider">
				@foreach ($category as $item)
					@php
						$lisImage = json_decode($item->image);
					@endphp
					<article class="cate-item text-center">
						<a href="#" title="" class="position-relative cate-img">
							@if (isset($lisImage))
								<img src="{{ asset('uploads/category/'.$lisImage->image) }}" alt="" title="">
								<img src="{{ asset('uploads/category/'.$lisImage->imageHV) }}" alt="" title="">
							@endif
						</a>
						<h3 class="medium s16 py-3 cate-item-tit"><a href="#" title="">{{ $item->name }}</a></h3>
					</article>
				@endforeach
			</div>
		</div>
	</section>
	<section class="ssale">
		<div class="container">
			<h2 class="bold s18 t3 sale-tit">[HOT 2019] - TIỆC ĐỒNG GIÁ 99 K</h2>
			<div class="sale-slider">
				<article class="sale-item">
					<figure class="position-relative sale-img">
						<a href="pdetail.html" title=""><img src="{{ asset('public/frontend/') }}/images/1.png" alt="" title=""></a>
						<span class="s12 text-white text-center position-absolute sale">-20%</span>
						<ul class="list-unstyled d-flex flex-wrap align-items-center text-uppercase text-white slider-count">
							<li class="d-inline-block b2 count-date"><strong class="s48">05</strong></li>
							<li class="d-inline-block b2 count-hours"><strong class="s48">23</strong></li>
							<li class="d-inline-block b2 count-minute"><strong class="s48">05</strong></li>
							<li class="d-inline-block b2 count-second"><strong class="s48">35</strong></li>
						</ul>
					</figure>
					<figcaption class="sale-info">
						<h3 class="sale-info-tit"><a href="pdetail.html" title="">Xịt Khoáng Lô Hội White Organia Good Nature Aloe...</a></h3>
						<ul data-rate="4" class="list-unstyled star">
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
						</ul>
						<div class="d-flex align-items-center justify-content-between sale-item-act">
							<div class="sale-item-act-price">
								<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
								<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
							</div>
							<a class="sale-add-btn" href="#" title=""><i class="fas fa-cart-plus"></i></a>
						</div>
					</figcaption>
				</article>
				<article class="sale-item">
					<figure class="position-relative sale-img">
						<a href="pdetail.html" title=""><img src="{{ asset('public/frontend/') }}/images/2.jpg" alt="" title=""></a>
						<span class="s12 text-white text-center position-absolute sale">-20%</span>
						<ul class="f3 t4  list-unstyled d-flex flex-wrap align-items-center text-uppercase bold text-white slider-count">
							<li class="d-inline-block b2 count-date"><strong class="s48">05</strong></li>
							<li class="d-inline-block b2 count-hours"><strong class="s48">23</strong></li>
							<li class="d-inline-block b2 count-minute"><strong class="s48">05</strong></li>
							<li class="d-inline-block b2 count-second"><strong class="s48">35</strong></li>
						</ul>
					</figure>
					<figcaption class="sale-info">
						<h3 class="sale-info-tit"><a href="pdetail.html" title="">Xịt Khoáng Lô Hội White Organia Good Nature Aloe...</a></h3>
						<ul data-rate="4" class="list-unstyled star">
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
						</ul>
						<div class="d-flex align-items-center justify-content-between sale-item-act">
							<div class="sale-item-act-price">
								<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
								<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
							</div>
							<a class="sale-add-btn" href="#" title=""><i class="fas fa-cart-plus"></i></a>
						</div>
					</figcaption>
				</article>
				<article class="sale-item">
					<figure class="position-relative sale-img">
						<a href="pdetail.html" title=""><img src="{{ asset('public/frontend/') }}/images/5.jpg" alt="" title=""></a>
						<span class="s12 text-white text-center position-absolute sale">-20%</span>
						<ul class="f3 t4  list-unstyled d-flex flex-wrap align-items-center text-uppercase bold text-white slider-count">
							<li class="d-inline-block b2 count-date"><strong class="s48">05</strong></li>
							<li class="d-inline-block b2 count-hours"><strong class="s48">23</strong></li>
							<li class="d-inline-block b2 count-minute"><strong class="s48">05</strong></li>
							<li class="d-inline-block b2 count-second"><strong class="s48">35</strong></li>
						</ul>
					</figure>
					<figcaption class="sale-info">
						<h3 class="sale-info-tit"><a href="pdetail.html" title="">Xịt Khoáng Lô Hội White Organia Good Nature Aloe...</a></h3>
						<ul data-rate="4" class="list-unstyled star">
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
						</ul>
						<div class="d-flex align-items-center justify-content-between sale-item-act">
							<div class="sale-item-act-price">
								<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
								<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
							</div>
							<a class="sale-add-btn" href="#" title=""><i class="fas fa-cart-plus"></i></a>
						</div>
					</figcaption>
				</article>
				<article class="sale-item">
					<figure class="position-relative sale-img">
						<a href="pdetail.html" title=""><img src="{{ asset('public/frontend/') }}/images/4.jpg" alt="" title=""></a>
						<span class="s12 text-white text-center position-absolute sale">-20%</span>
						<ul class="f3 t4  list-unstyled d-flex flex-wrap align-items-center text-uppercase bold text-white slider-count">
							<li class="d-inline-block b2 count-date"><strong class="s48">05</strong></li>
							<li class="d-inline-block b2 count-hours"><strong class="s48">23</strong></li>
							<li class="d-inline-block b2 count-minute"><strong class="s48">05</strong></li>
							<li class="d-inline-block b2 count-second"><strong class="s48">35</strong></li>
						</ul>
					</figure>
					<figcaption class="sale-info">
						<h3 class="sale-info-tit"><a href="pdetail.html" title="">Xịt Khoáng Lô Hội White Organia Good Nature Aloe...</a></h3>
						<ul data-rate="4" class="list-unstyled star">
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
						</ul>
						<div class="d-flex align-items-center justify-content-between sale-item-act">
							<div class="sale-item-act-price">
								<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
								<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
							</div>
							<a class="sale-add-btn" href="#" title=""><i class="fas fa-cart-plus"></i></a>
						</div>
					</figcaption>
				</article>
				<article class="sale-item">
					<figure class="position-relative sale-img">
						<a href="pdetail.html" title=""><img src="{{ asset('public/frontend/') }}/images/3.jpg" alt="" title=""></a>
						<span class="s12 text-white text-center position-absolute sale">-20%</span>
						<ul class="f3 t4  list-unstyled d-flex flex-wrap align-items-center text-uppercase bold text-white slider-count">
							<li class="d-inline-block b2 count-date"><strong class="s48">05</strong></li>
							<li class="d-inline-block b2 count-hours"><strong class="s48">23</strong></li>
							<li class="d-inline-block b2 count-minute"><strong class="s48">05</strong></li>
							<li class="d-inline-block b2 count-second"><strong class="s48">35</strong></li>
						</ul>
					</figure>
					<figcaption class="sale-info">
						<h3 class="sale-info-tit"><a href="pdetail.html" title="">Xịt Khoáng Lô Hội White Organia Good Nature Aloe...</a></h3>
						<ul data-rate="4" class="list-unstyled star">
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
						</ul>
						<div class="d-flex align-items-center justify-content-between sale-item-act">
							<div class="sale-item-act-price">
								<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
								<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
							</div>
							<a class="sale-add-btn" href="#" title=""><i class="fas fa-cart-plus"></i></a>
						</div>
					</figcaption>
				</article>
				<article class="sale-item">
					<figure class="position-relative sale-img">
						<a href="pdetail.html" title=""><img src="{{ asset('public/frontend/') }}/images/2.jpg" alt="" title=""></a>
						<span class="s12 text-white text-center position-absolute sale">-20%</span>
						<ul class="f3 t4  list-unstyled d-flex flex-wrap align-items-center text-uppercase bold text-white slider-count">
							<li class="d-inline-block b2 count-date"><strong class="s48">05</strong></li>
							<li class="d-inline-block b2 count-hours"><strong class="s48">23</strong></li>
							<li class="d-inline-block b2 count-minute"><strong class="s48">05</strong></li>
							<li class="d-inline-block b2 count-second"><strong class="s48">35</strong></li>
						</ul>
					</figure>
					<figcaption class="sale-info">
						<h3 class="sale-info-tit"><a href="pdetail.html" title="">Xịt Khoáng Lô Hội White Organia Good Nature Aloe...</a></h3>
						<ul data-rate="4" class="list-unstyled star">
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
						</ul>
						<div class="d-flex align-items-center justify-content-between sale-item-act">
							<div class="sale-item-act-price">
								<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
								<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
							</div>
							<a class="sale-add-btn" href="#" title=""><i class="fas fa-cart-plus"></i></a>
						</div>
					</figcaption>
				</article>
				<article class="sale-item">
					<figure class="position-relative sale-img">
						<a href="pdetail.html" title=""><img src="{{ asset('public/frontend/') }}/images/1.png" alt="" title=""></a>
						<span class="s12 text-white text-center position-absolute sale">-20%</span>
						<ul class="f3 t4  list-unstyled d-flex flex-wrap align-items-center text-uppercase bold text-white slider-count">
							<li class="d-inline-block b2 count-date"><strong class="s48">05</strong></li>
							<li class="d-inline-block b2 count-hours"><strong class="s48">23</strong></li>
							<li class="d-inline-block b2 count-minute"><strong class="s48">05</strong></li>
							<li class="d-inline-block b2 count-second"><strong class="s48">35</strong></li>
						</ul>
					</figure>
					<figcaption class="sale-info">
						<h3 class="sale-info-tit"><a href="pdetail.html" title="">Xịt Khoáng Lô Hội White Organia Good Nature Aloe...</a></h3>
						<ul data-rate="4" class="list-unstyled star">
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
						</ul>
						<div class="d-flex align-items-center justify-content-between sale-item-act">
							<div class="sale-item-act-price">
								<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
								<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
							</div>
							<a class="sale-add-btn" href="#" title=""><i class="fas fa-cart-plus"></i></a>
						</div>
					</figcaption>
				</article>
			</div>
		</div>
	</section>

	<section class="spro" >
		<div class="container">
			<h2 class="s16 t5 b2 mb-4 spro-tit"><span class="b1"><img src="{{ asset('public/frontend/') }}/images/11.png" alt="" title=""> THỜI TRANG NỮ - TEST - SHOW</span></h2>
			<div class="row spro-row">
				@foreach ($product as $item)
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
					<div class="col-lg-3 col-sm-6">
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
					</div>
				@endforeach
			</div>

			<div class="text-center"><a href="pro.html" title="" class="btn more-btn">Xem thêm</a></div>
		</div>
	</section>

	<section class="spro">
		<div class="container">
			<h2 class="s16 t5 b2 mb-4 spro-tit"><span class="b1"><img src="{{ asset('public/frontend/') }}/images/11.png" alt="" title=""> TRANG ĐIỂM - MAKE UP</span></h2>
			<div class="row spro-row">
				<div class="col-lg-3 col-sm-6">
					<article class="sale-item">
						<figure class="position-relative sale-img">
							<a href="pdetail.html" title=""><img src="{{ asset('public/frontend/') }}/images/2.jpg" alt="" title=""></a>
							
						</figure>
						<figcaption class="sale-info">
							<h3 class="sale-info-tit"><a href="pdetail.html" title="">Xịt Khoáng Lô Hội White Organia Good Nature Aloe...</a></h3>
							<ul data-rate="4" class="list-unstyled star">
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
							</ul>
							<div class="d-flex align-items-center justify-content-between sale-item-act">
								<div class="sale-item-act-price">
									<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
									<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
								</div>
								<a class="sale-add-btn" href="#" title=""><i class="fas fa-cart-plus"></i></a>
							</div>
						</figcaption>
					</article>
				</div>
				<div class="col-lg-3 col-sm-6">
					<article class="sale-item">
						<figure class="position-relative sale-img">
							<a href="pdetail.html" title=""><img src="{{ asset('public/frontend/') }}/images/1.png" alt="" title=""></a>
							
						</figure>
						<figcaption class="sale-info">
							<h3 class="sale-info-tit"><a href="pdetail.html" title="">Xịt Khoáng Lô Hội White Organia Good Nature Aloe...</a></h3>
							<ul data-rate="4" class="list-unstyled star">
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
							</ul>
							<div class="d-flex align-items-center justify-content-between sale-item-act">
								<div class="sale-item-act-price">
									<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
									<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
								</div>
								<a class="sale-add-btn" href="#" title=""><i class="fas fa-cart-plus"></i></a>
							</div>
						</figcaption>
					</article>
				</div>
				<div class="col-lg-3 col-sm-6">
					<article class="sale-item">
						<figure class="position-relative sale-img">
							<a href="pdetail.html" title=""><img src="{{ asset('public/frontend/') }}/images/5.jpg" alt="" title=""></a>
							
						</figure>
						<figcaption class="sale-info">
							<h3 class="sale-info-tit"><a href="pdetail.html" title="">Xịt Khoáng Lô Hội White Organia Good Nature Aloe...</a></h3>
							<ul data-rate="4" class="list-unstyled star">
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
							</ul>
							<div class="d-flex align-items-center justify-content-between sale-item-act">
								<div class="sale-item-act-price">
									<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
									<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
								</div>
								<a class="sale-add-btn" href="#" title=""><i class="fas fa-cart-plus"></i></a>
							</div>
						</figcaption>
					</article>
				</div>
				<div class="col-lg-3 col-sm-6">
					<article class="sale-item">
						<figure class="position-relative sale-img">
							<a href="pdetail.html" title=""><img src="{{ asset('public/frontend/') }}/images/4.jpg" alt="" title=""></a>
							
						</figure>
						<figcaption class="sale-info">
							<h3 class="sale-info-tit"><a href="pdetail.html" title="">Xịt Khoáng Lô Hội White Organia Good Nature Aloe...</a></h3>
							<ul data-rate="4" class="list-unstyled star">
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
							</ul>
							<div class="d-flex align-items-center justify-content-between sale-item-act">
								<div class="sale-item-act-price">
									<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
									<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
								</div>
								<a class="sale-add-btn" href="#" title=""><i class="fas fa-cart-plus"></i></a>
							</div>
						</figcaption>
					</article>
				</div>
				<div class="col-lg-3 col-sm-6">
					<article class="sale-item">
						<figure class="position-relative sale-img">
							<a href="pdetail.html" title=""><img src="{{ asset('public/frontend/') }}/images/3.jpg" alt="" title=""></a>
							
						</figure>
						<figcaption class="sale-info">
							<h3 class="sale-info-tit"><a href="pdetail.html" title="">Xịt Khoáng Lô Hội White Organia Good Nature Aloe...</a></h3>
							<ul data-rate="4" class="list-unstyled star">
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
							</ul>
							<div class="d-flex align-items-center justify-content-between sale-item-act">
								<div class="sale-item-act-price">
									<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
									<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
								</div>
								<a class="sale-add-btn" href="#" title=""><i class="fas fa-cart-plus"></i></a>
							</div>
						</figcaption>
					</article>
				</div>
				<div class="col-lg-3 col-sm-6">
					<article class="sale-item">
						<figure class="position-relative sale-img">
							<a href="pdetail.html" title=""><img src="{{ asset('public/frontend/') }}/images/2.jpg" alt="" title=""></a>
							
						</figure>
						<figcaption class="sale-info">
							<h3 class="sale-info-tit"><a href="pdetail.html" title="">Xịt Khoáng Lô Hội White Organia Good Nature Aloe...</a></h3>
							<ul data-rate="4" class="list-unstyled star">
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
							</ul>
							<div class="d-flex align-items-center justify-content-between sale-item-act">
								<div class="sale-item-act-price">
									<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
									<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
								</div>
								<a class="sale-add-btn" href="#" title=""><i class="fas fa-cart-plus"></i></a>
							</div>
						</figcaption>
					</article>
				</div>
				<div class="col-lg-3 col-sm-6">
					<article class="sale-item">
						<figure class="position-relative sale-img">
							<a href="pdetail.html" title=""><img src="{{ asset('public/frontend/') }}/images/1.png" alt="" title=""></a>
							
						</figure>
						<figcaption class="sale-info">
							<h3 class="sale-info-tit"><a href="pdetail.html" title="">Xịt Khoáng Lô Hội White Organia Good Nature Aloe...</a></h3>
							<ul data-rate="4" class="list-unstyled star">
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
							</ul>
							<div class="d-flex align-items-center justify-content-between sale-item-act">
								<div class="sale-item-act-price">
									<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
									<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
								</div>
								<a class="sale-add-btn" href="#" title=""><i class="fas fa-cart-plus"></i></a>
							</div>
						</figcaption>
					</article>
				</div>
				<div class="col-lg-3 col-sm-6">
					<article class="sale-item">
						<figure class="position-relative sale-img">
							<a href="pdetail.html" title=""><img src="{{ asset('public/frontend/') }}/images/1.png" alt="" title=""></a>
							
						</figure>
						<figcaption class="sale-info">
							<h3 class="sale-info-tit"><a href="pdetail.html" title="">Xịt Khoáng Lô Hội White Organia Good Nature Aloe...</a></h3>
							<ul data-rate="4" class="list-unstyled star">
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li class="rated"><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
							</ul>
							<div class="d-flex align-items-center justify-content-between sale-item-act">
								<div class="sale-item-act-price">
									<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
									<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
								</div>
								<a class="sale-add-btn" href="#" title=""><i class="fas fa-cart-plus"></i></a>
							</div>
						</figcaption>
					</article>
				</div>
			</div>

			<div class="text-center"><a href="pro.html" title="" class="btn more-btn">Xem thêm</a></div>
		</div>
	</section>
	<section class="b5 info">
		<div class="container" style="background: url({{ asset('public/frontend/') }}/images/logobig.png) no-repeat center center;background-size: 35%">
			<div class="row info-row justify-content-between">
				<div class="col-sm-6">
					<div class="d-flex align-items-center s12 t4 info-item">
						<img src="{{ asset('public/frontend/') }}/images/icon11.png" alt="" title="">
						<div class="info-content">
							<h3 class="bold s18 t3 info-item-tit">Hàng chính hãng</h3>
							<p>Nana cam kết các sản phẩm 100% chính hãng</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="d-flex align-items-center s12 t4 info-item">
						<img src="{{ asset('public/frontend/') }}/images/icon13.png" alt="" title="">
						<div class="info-content">
							<h3 class="bold s18 t3 info-item-tit">Hàng chính hãng</h3>
							<p>Nana cam kết các sản phẩm 100% chính hãng</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="d-flex align-items-center s12 t4 info-item">
						<img src="{{ asset('public/frontend/') }}/images/icon10.png" alt="" title="">
						<div class="info-content">
							<h3 class="bold s18 t3 info-item-tit">Hàng chính hãng</h3>
							<p>Nana cam kết các sản phẩm 100% chính hãng</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="d-flex align-items-center s12 t4 info-item">
						<img src="{{ asset('public/frontend/') }}/images/icon14.png" alt="" title="">
						<div class="info-content">
							<h3 class="bold s18 t3 info-item-tit">Hàng chính hãng</h3>
							<p>Nana cam kết các sản phẩm 100% chính hãng</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="d-flex align-items-center s12 t4 info-item">
						<img src="{{ asset('public/frontend/') }}/images/icon12.png" alt="" title="">
						<div class="info-content">
							<h3 class="bold s18 t3 info-item-tit">Hàng chính hãng</h3>
							<p>Nana cam kết các sản phẩm 100% chính hãng</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="d-flex align-items-center s12 t4 info-item">
						<img src="{{ asset('public/frontend/') }}/images/icon15.png" alt="" title="">
						<div class="info-content">
							<h3 class="bold s18 t3 info-item-tit">100% nguyên liệu tự nhiên</h3>
							<p>Nana cam kết các sản phẩm 100% chính hãng</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="tes" style="background: url({{ asset('public/frontend/') }}/images/tesbg.jpg) no-repeat center bottom 110px;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-8">
					<h2 class="s24 text-center tes-tit"><span class="bg-white">Cảm nhận của khách hàng</span></h2>
					
					<div class="tes-slider">
						@foreach ($custommer as $item)
							<article class="text-center tes-slider-item">
								<ul class="list-unstyled text-center star">
									<li><i class="far fa-star"></i></li>
									<li><i class="far fa-star"></i></li>
									<li><i class="far fa-star"></i></li>
									<li><i class="far fa-star"></i></li>
								</ul>
								<div class="f2 italic s24 tes-slider-item-content">
									{!! $item->content !!}
								</div>
								<div class="tes-slider-item-info">
									<img src="{{ asset('uploads/custommer/'.$item->image) }}" alt="" title="">
									<h3 class="medium s18">{{ $item->name }}</h3>
								</div>
							</article>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('script')

@endsection
