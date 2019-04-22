<div class="d-flex align-items-center justify-content-between tmenu-bwrap">
	<div class="d-flex align-items-center top-menu-btn">
		<!-- hamburger menu -->
		<a id="nav-icon" href="#menu" class="d-xl-none">
		    <span></span>
		    <span></span>
		    <span></span>
		</a>
		<!-- logo -->
		<a class="logo logo-header" href="{{ asset('/') }}" tit ><img src="{{ asset('uploads/config/logo/'.$site_info->site_logo) }}" alt="" title=""></a>	
	</div>
	<div class="top-menu-act">
		<div class="d-flex align-items-center justify-content-end top-contact">
			<ul class="list-unstyled top-contact-l">
				<li class="d-sm-inline-block d-none">
					<a href="tel:{{ $site_info->site_phone }}" title="">
						<i class="fas fa-phone"></i> Tel: {!! $site_info->site_phone !!}
					</a>
				</li>
				<li class="d-sm-inline-block d-none">
					<a href="mailto:{{ $site_info->site_email }}" title="">
						<i class="fas fa-envelope"></i>
						Email: {{ $site_info->site_email }}
					</a>
				</li>
				<li class="d-sm-inline-block d-none">
					<a href="{{ asset('gioi-thieu.html') }}" title="">
						<i class="fas fa-comments"></i>
						Về chúng tôi
					</a>
				</li>
				<li class="t3">
					<a href="{{  $orther->header_recruitment->content }}" title="">
						<i class="fas fa-user"></i>
						Tuyển CTV
					</a>
				</li>
			</ul>
			<div class="d-flex align-items-center tmenu-control-r">
				<!-- <img class="d-md-none d-inline-block p-2 search-open" src="images/search.png" alt="" title=""> -->
				<!-- top-cart -->
				<div class="top-cart">
					<a class="d-flex align-items-center position-relative top-cart-btn" href="#" title="" data-toggle="dropdown">
						<span class="position-relative top-cart-quan">
							<img src="{{ asset($path) }}/images/cart.png" alt="" title="">
							<span class="d-md-inline-block d-none">Giỏ hàng ({{ Cart::count() }})</span>
						</span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						@if (Cart::content()->isEmpty())
							<div class="dropdown-item cart-top-item">
								<h1>Giỏ hàng hiện đang trống</h1>
							{{-- <a href="{{ asset('gio-hang') }}.html" title="" class="text-center btn">Xem giỏ hàng</a> --}}
						</div>
						@else
							@foreach (Cart::content() as $item)
								<div class="dropdown-item d-flex align-items-center cart-top-item">
									<a class="" href="#"><img src="{{ asset('uploads/product/avatar') }}/{{ $item->options->image }}" title="" alt=""></a>
									<div class="cart-top-info">
										<h2 class="cart-top-name text-truncate">
											<a href="#" title="">{{ $item->name }}</a>
											<br>{{ $item->qty }} x <strong>{{ number_format( $item->price , 0, ',', '.').' đ' }}</strong>
										</h2>
										<p class="text-right">
											<a href="{{ asset('/cart/delete/'.$item->rowId) }}"><i class="fa fa-trash top-cart-del"></i></a>
										</p>
									</div>	
								</div>
							@endforeach
							<div class="dropdown-item cart-top-total">
								TỔNG: <strong class="pull-right">{{ Cart::total() }} đ</strong>
							</div>
							<div class="dropdown-item cart-top-item">
								<a href="{{ asset('gio-hang') }}.html" title="" class="text-center btn">Xem giỏ hàng</a>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
		<div class="d-flex align-items-center justify-content-between tmenu-wrap">
			<div class="d-flex align-items-center top-r">
				<!-- menu -->
				<nav id="menu" class="menu-wrap">	
					<ul class="menu">
						<li class="active"><a href="index.html" title="">TRANG CHỦ</a></li>
						<li><a href="about.html" title="" >GIỚI THIỆU</a></li>
						<li><a href="thuonghieu.html" title="" >THƯƠNG HIỆU</a></li>
						<li><a href="pro.html" title="">TRANG ĐIỂM</a>
							<ul>
								<li><a href="javascript:0;" title="">Trang Điểm Mắt - Eye Makeup</a>
									<ul>
										<li><a href="pro.html" title="">Kem Lót Mắt</a></li>
										<li><a href="pro.html" title="">Phấn Mắt</a>
										</li>
										<li><a href="pro.html" title="">Chì Kẻ Mày - Kẻ Mắt</a></li>
										<li><a href="pro.html" title="">Mascara - Fixer</a></li>
										<li><a href="pro.html" title="">Dưỡng Dài Mi</a></li>
									</ul>
								</li>
								<li><a href="javascript:0;" title="">Trang Điểm Mặt - Face Makeup</a>
									<ul>
										<li><a href="pro.html" title="">Phấn Nước - Kem Lót</a></li>
										<li><a href="pro.html" title="">Phấn Phủ - Phấn Nén</a>
										</li>
										<li><a href="pro.html" title="">Kem BB - CC</a></li>
										<li><a href="pro.html" title="">Kem Che Khuyết Điểm Mặt</a></li>
										<li><a href="pro.html" title="">Má Hồng Blusher</a></li>
										<li><a href="pro.html" title="">Phấn Tạo Khối - Highlighter</a></li>
									</ul>
								</li>
								<li><a href="javascript:0;" title="">Trang Điểm Môi - Son Môi</a>
									<ul>
										<li><a href="pro.html" title="">Son Thỏi - Lipstick</a></li>
										<li><a href="pro.html" title="">Son Lì - Son Xăm - Son Bóng</a>
										</li>
										<li><a href="pro.html" title="">Son Kem - Son Tint</a></li>
										<li><a href="pro.html" title="">Son Dưỡng Môi - Tẩy Da Chết</a></li>
										<li><a href="pro.html" title="">Kẻ Viền Môi</a></li>
									</ul>
								</li>
								<li><a href="javascript:0;" title="">Dụng Cụ Trang Điểm</a>
									<ul>
										<li><a href="pro.html" title="">Chống Nhăn - Chống Lão Hóa</a></li>
										<li><a href="pro.html" title="">Dưỡng ẩm sâu</a>
										</li>
										<li><a href="pro.html" title="">Dưỡng Cho Da Nhạy Cảm</a></li>
										<li><a href="pro.html" title="">Dưỡng Cho Da Hỗn Hợp</a></li>
										<li><a href="pro.html" title="">Dưỡng Cho Da Dầu</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="pro.html" title="">DƯỠNG DA</a></li>
						<li><a href="pro.html" title="">NƯỚC HOA</a></li>
						<li><a href="contact.html" title="">LIÊN HỆ</a></li>
					</ul>
				</nav>

				<!-- search  -->
				<div class="d-flex align-items-center ml-md-3 ml-0 tmenu-control-r">
					<div class="">
						<a class="search-btn" href="#" title="" data-toggle="dropdown">
							<img src="{{ asset($path) }}/images/search.png" alt="" title="">
						</a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<!-- <div class="dropdown-item d-flex align-items-center cart-top-item"> -->
								<form action="" class="trans position-relative search-frm">
									<input class="form-control search-ip" type="text" required="required" placeholder="Tìm kiếm">
									<button class="btn search-btn"><img src="{{ asset($path) }}/images/search.png" alt="" title=""></button>
								</form>
							<!-- </div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>