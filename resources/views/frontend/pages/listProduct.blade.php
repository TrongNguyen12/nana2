@extends('frontend.masterpages')
@section('main')
	<div class="b2">
		<div class="container">
			<ul class="list-unstyled bread">
				<li><a href="{{ asset('/') }}" title="">Trang chủ</a></li>
				<li><a href="{{ asset('/san-pham') }}.html" title="">Sản phẩm</a></li>	
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="propage">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-4 order-sm-1 order-12">
					<aside class="pro-aside">
						@include('frontend.block.categorySidebar')
						<div class="pro-aside-item" style="display: none;">
							<h2 class="pro-aside-item-tit">Hàng mới về</h2>

							<ul class="list-unstyled pb-4 pro-aside-list">
								<li>
									<a href="pdetail.html" title=""><img src="images/10.jpg" alt="" title=""></a>
									<span class="paside-item-info">
										<h3 class="s16 paside-item-info-tit"><a href="pdetail.html" title="">Jumpsuit Vest Tay Dài In Caro</a></h3>
										<span class="sale-item-act-price">
											<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
											<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
										</span>
									</span>
								</li>
								<li>
									<a href="pdetail.html" title=""><img src="images/10.jpg" alt="" title=""></a>
									<span class="paside-item-info">
										<h3 class="s16 paside-item-info-tit"><a href="pdetail.html" title="">Jumpsuit Vest Tay Dài In Caro</a></h3>
										<span class="sale-item-act-price">
											<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
											<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
										</span>
									</span>
								</li>
								<li>
									<a href="pdetail.html" title=""><img src="images/10.jpg" alt="" title=""></a>
									<span class="paside-item-info">
										<h3 class="s16 paside-item-info-tit"><a href="pdetail.html" title="">Jumpsuit Vest Tay Dài In Caro</a></h3>
										<span class="sale-item-act-price">
											<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
											<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
										</span>
									</span>
								</li>
								<li>
									<a href="pdetail.html" title=""><img src="images/10.jpg" alt="" title=""></a>
									<span class="paside-item-info">
										<h3 class="s16 paside-item-info-tit"><a href="pdetail.html" title="">Jumpsuit Vest Tay Dài In Caro</a></h3>
										<span class="sale-item-act-price">
											<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
											<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
										</span>
									</span>
								</li>
								<li>
									<a href="pdetail.html" title=""><img src="images/10.jpg" alt="" title=""></a>
									<span class="paside-item-info">
										<h3 class="s16 paside-item-info-tit"><a href="pdetail.html" title="">Jumpsuit Vest Tay Dài In Caro</a></h3>
										<span class="sale-item-act-price">
											<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
											<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
										</span>
									</span>
								</li>
							</ul>
						</div>
						<div class="pro-aside-item" style="display: none;">
							<h2 class="pro-aside-item-tit">Sản phẩm HOT</h2>

							<ul class="list-unstyled pb-4 pro-aside-list">
								<li>
									<a href="pdetail.html" title=""><img src="images/10.jpg" alt="" title=""></a>
									<span class="paside-item-info">
										<h3 class="s16 paside-item-info-tit"><a href="pdetail.html" title="">Jumpsuit Vest Tay Dài In Caro</a></h3>
										<span class="sale-item-act-price">
											<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
											<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
										</span>
									</span>
								</li>
								<li>
									<a href="pdetail.html" title=""><img src="images/10.jpg" alt="" title=""></a>
									<span class="paside-item-info">
										<h3 class="s16 paside-item-info-tit"><a href="pdetail.html" title="">Jumpsuit Vest Tay Dài In Caro</a></h3>
										<span class="sale-item-act-price">
											<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
											<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
										</span>
									</span>
								</li>
								<li>
									<a href="pdetail.html" title=""><img src="images/10.jpg" alt="" title=""></a>
									<span class="paside-item-info">
										<h3 class="s16 paside-item-info-tit"><a href="pdetail.html" title="">Jumpsuit Vest Tay Dài In Caro</a></h3>
										<span class="sale-item-act-price">
											<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
											<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
										</span>
									</span>
								</li>
								<li>
									<a href="pdetail.html" title=""><img src="images/10.jpg" alt="" title=""></a>
									<span class="paside-item-info">
										<h3 class="s16 paside-item-info-tit"><a href="pdetail.html" title="">Jumpsuit Vest Tay Dài In Caro</a></h3>
										<span class="sale-item-act-price">
											<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
											<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
										</span>
									</span>
								</li>
								<li>
									<a href="pdetail.html" title=""><img src="images/10.jpg" alt="" title=""></a>
									<span class="paside-item-info">
										<h3 class="s16 paside-item-info-tit"><a href="pdetail.html" title="">Jumpsuit Vest Tay Dài In Caro</a></h3>
										<span class="sale-item-act-price">
											<span class="d-block t3 s16 medium sale-price">99.000 đ</span>
											<del class="s14 italic t4 sale-old-price">Giá cũ:  200,000 đ</del>
										</span>
									</span>
								</li>
							</ul>
						</div>
					</aside>
				</div>
				<div class="col-lg-9 col-md-8 col-sm-8 order-sm-12 order-1">
					<div class="ppage-contain">
						<h1 class="s24 pb-4 propage-tit">Sản phẩm trang điểm</h1>

						<form action="" class="d-flex align-items-center flex-wrap mb-4 propage-frm">
							<h3 class="s16">Lọc sản phẩm theo</h3>
							<select name="" id="" class="form-control">
								<option value="">Khoảng giá</option>
								<option value="">Trên 100.000</option>
								<option value="">Trên 200.000</option>
							</select>
							<input type="text" placeholder="Tên sản phẩm" required="">
						</form>
					</div>

					<div class="row ppage-row">
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
							<div class="col-lg-4 col-md-6 col-sm-6">
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
											<a class="sale-add-btn" href="{{ asset('/cart/add/'.$item->id) }}" title=""><i class="fas fa-cart-plus"></i></a>
										</div>
									</figcaption>
								</article>
							</div>

						@endforeach
					</div>
					{{-- <ul class="text-center pt-0 pagi">
						<li class="active"><a href="#" title="">1</a></li>
						<li><a href="#" title="">2</a></li>
						<li><a href="#" title="">3</a></li>
						<li><a href="#" title="">4</a></li>
						<li><a href="#" title="">5</a></li>
					</ul> --}}
					{{ $product->links() }}
				</div>
			</div>
		</div>
	</div>
@endsection