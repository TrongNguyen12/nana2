<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{ asset('public/frontend/') }}/">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Mỹ phẩm nana</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css">
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome/fontawesome-all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="css/magiczoomplus.css">
	<link rel="stylesheet" href="css/magicscroll.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script>
		function base_url() {
			return "{{ asset('public/frontend/') }}/";
		}
	</script>
</head>
<body>
	<div class="wrapper index">
		<header class="fixed-top top">
			<div class="container">
				<div class="d-flex align-items-center justify-content-between tmenu-bwrap">
					<div class="d-flex align-items-center top-menu-btn">
						<!-- hamburger menu -->
						<a id="nav-icon" href="#menu" class="d-xl-none">
						    <span></span>
						    <span></span>
						    <span></span>
						</a>

						<!-- logo -->
						<a class="logo logo-header" href="index.html" tit ><img src="images/logo.png" alt="" title=""></a>	
					</div>
					<div class="top-menu-act">
						<div class="d-flex align-items-center justify-content-end top-contact">
							<ul class="list-unstyled top-contact-l">
								<li class="d-sm-inline-block d-none">
									<a href="tel:0923444555" title="">
										<i class="fas fa-phone"></i> Tel: 0849 558 558
									</a>
								</li>
								<li class="d-sm-inline-block d-none">
									<a href="mailto:info@gmail.com" title="">
										<i class="fas fa-envelope"></i>
										E: info@gmail.com
									</a>
								</li>
								<li class="d-sm-inline-block d-none">
									<a href="about.html" title="">
										<i class="fas fa-comments"></i>
										Về chúng tôi
									</a>
								</li>
								<li class="t3">
									<a href="#" title="">
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
											<img src="images/cart.png" alt="" title="">
											<span class="d-md-inline-block d-none">Giỏ hàng (0)</span>
										</span>
									</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<div class="dropdown-item d-flex align-items-center cart-top-item">
											<a class="" href="pro-detail.html"><img src="images/17.jpg" title="" alt=""></a>
											<div class="cart-top-info">
												<h2 class="cart-top-name text-truncate">
													<a href="pro-detail.html" title="">Tasmanian Salmon Fillets</a>
													<br>1 x <strong>1.500.000 đ</strong>
												</h2>
												
												<p class="text-right">
													<i class="fa fa-trash top-cart-del"></i>
												</p>
											</div>	
										</div>
									    
									    <div class="dropdown-item d-flex align-items-center cart-top-item">
											<a class="" href="pro-detail.html"><img src="images/18.jpg" title="" alt=""></a>
											<div class="cart-top-info">
												<h2 class="cart-top-name text-truncate">
													<a href="pro-detail.html" title="">Ling Fillets</a>
													<br>1 x <strong>2.500.000 đ</strong>
												</h2>
												
												<p class="text-right">
													<i class="fa fa-trash top-cart-del"></i>
												</p>
											</div>
										</div>
										<div class="dropdown-item cart-top-total">
											TỔNG <strong class="pull-right">8.000.000 đ</strong>
										</div>
										<div class="dropdown-item cart-top-item">
											<a href="cart.html" title="" class="text-center btn">Xem giỏ hàng</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex align-items-center justify-content-between tmenu-wrap">
							<div class="d-flex align-items-center top-r">
								<!-- menu -->
								<nav id="menu" class="menu-wrap">	
									<ul class="menu">
										<li><a href="index.html" title="">TRANG CHỦ</a></li>
										<li><a href="about.html" title="" >GIỚI THIỆU</a></li>
										<li><a href="thuonghieu.html" title="" >THƯƠNG HIỆU</a></li>
										<li class="active"><a href="pro.html" title="">TRANG ĐIỂM</a>
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
											<img src="images/search.png" alt="" title="">
										</a>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<!-- <div class="dropdown-item d-flex align-items-center cart-top-item"> -->
												<form action="" class="trans position-relative search-frm">
													<input class="form-control search-ip" type="text" required="required" placeholder="Tìm kiếm">
													<button class="btn search-btn"><img src="images/search.png" alt="" title=""></button>
												</form>
											<!-- </div> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</header>

		<main class="">
			<section class="propage">
				<div class="b4">
					<div class="container">
						<ul class="bread justify-content-start list-unstyled">
							<li><a href="index.html" title="">Trang chủ</a></li>
							<li><a href="pro.html" title="">Sản phẩm</a></li>
							<li><a href="pro.html" title="">Thời trang nữ</a></li>
							<li><a href="pro.html" title="">Đầm Xòe Tay Dài Phối Ren Bèo</a></li>
						</ul>
					</div>
				</div>
				<div class="s16 container pdetail-page">
					<div class="row">
						<div class="col-md-6">
							<div class="pdetail-l">
								<a class="position-relative MagicZoom" id="allstar" href="images/p1.jpg" data-options="selectorTrigger: hover;"  onclick="return false;">
									<img src="images/p1.jpg" alt=""/>
									<span class="position-absolute sale s14 text-white">-20%</span>
								</a>
								<div class="MagicScroll" id="ZoomScroll" data-options="height:460px;width:75px; orientation:vertical;items: 5;autoplay: true;" data-mobile-options="orientation:horizontal;items:3;width:100%;height: 80px;arrows:inside">
			                        <a data-zoom-id="allstar" href="images/p1.jpg" data-zoom-image="images/p1.jpg">
			                        	<img src="images/p1.jpg" alt="Hướng dẫn đổi trả">
			                        </a>
			                        <a data-zoom-id="allstar" href="images/chinhsach.jpg" data-image="images/chinhsach.jpg" onclick="return false;">
			                        	<img src="images/p2.jpg" alt=""/>
			                        </a>
			                        <a data-zoom-id="allstar" href="images/p9.jpg" data-image="images/p9.jpg" onclick="return false;">
			                        	<img src="images/p3.jpg" alt=""/>
			                        </a>
			                        <a data-zoom-id="allstar" href="images/p404.png" data-image="images/p404.png">
			                        	<img src="images/p4.jpg" alt=""/>
			                        </a>
			                        <a data-zoom-id="allstar" href="images/logobig.jpg" data-image="images/logobig.jpg">
			                        	<img src="images/p5.jpg" alt=""/>
			                        </a>
			                        <a data-zoom-id="allstar" href="images/13.jpg" data-image="images/13.jpg">
			                        	<img src="images/13.jpg" alt=""/>
			                        </a>
			                    </div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="pdetail-r">
								<h1 class="s24 pt-2 pb-1 pdetail-tit">Đầm Xòe Tay Dài Phối Ren Bèo</h1>
								<ul data-rate="4" class="pb-2 list-unstyled star">
									<li class="rated"><i class="fas fa-star"></i></li>
									<li class="rated"><i class="fas fa-star"></i></li>
									<li class="rated"><i class="fas fa-star"></i></li>
									<li class="rated"><i class="fas fa-star"></i></li>
									<li class="rated"><i class="fas fa-star"></i></li>
								</ul>

								<!-- <ul class="list-unstyled pdetail-list">
									<li>Thương hiệu:  Lysedia</li>
									<li>Trọng lượng: 300 gr</li>
									<li>Xuất xứ: Hàn Quốc</li>
									<li>Thể tích: 150ml</li>
								</ul> -->

								<div class="pdetail-price">
									<span class="d-block medium s30 t3 pr-4">Giá bán:  99,000 đ</span>
									<del class="d-block s20 italic t4">Giá cũ:  200,000 đ</del>
								</div>
								<div class="b1 medium s18 text-white pdetail-sale-tit">Thời gian khuyến mãi còn</div>
								<ul class="position-static b2 list-unstyled d-flex flex-wrap align-items-center text-uppercas slider-count">
									<li class="d-inline-block b2 count-date"><strong class="s48">05</strong></li>
									<li class="d-inline-block b2 count-hours"><strong class="s48">23</strong></li>
									<li class="d-inline-block b2 count-minute"><strong class="s48">05</strong></li>
									<li class="d-inline-block b2 count-second"><strong class="s48">35</strong></li>
								</ul>
								<div class="py-3 d-flex align-items-center flex-wrap">
							        <h3 class="s17">Màu sắc:</h3>
							        <input type="hidden" value="0">
							        <ul class="vk-list__color" data-list="active">
							            <li class="active" data-value="màu 1"># Kem</li>
							            <li data-value="màu 2"># Hồng</li>
							        </ul>
							    </div>
								<div class="d-flex align-items-center pt-4 pdetail-act">
									<div class="d-flex align-items-center position-relative pdetail-quan">
										<div class="dec count button">+</div>
								        <input class="qty" type="number" min="1" value="3">
								        <div class="inc count button">-</div>
								    </div>
									<a href="#" title="" class="btn mx-2 buy-btn"><img class="mr-2" src="images/cart.png" alt="" title=""> Mua ngay</a>
								</div>
							</div>
						</div>
					</div>
					<div class="pdetail-content">
						<div class="row justify-content-center">
							<div class="col-lg-10">
								<ul class="list-unstyled d-flex align-items-center pdetail-nav scroll-link">
									<li><a href="#mota" title="">Mô tả</a></li>
									<li><a href="#danhgia" title="">Đánh giá</a></li>
								</ul>

								<div id="mota" class="pdetail-content-wrap scrollspy">
									<div class="pdetail-scontent">
										<p>Những chiếc jumpsuit luôn tạo sự thoải mái mỗi khi đi chơi hay đi dạo cùng người yêu hay đám bạn bè thân quen. Jumpsuit Ngắn Đan Dây Romper F21 có kiểu dáng trẻ trung, màu sắc tươi sáng sẽ giúp bạn luôn thoải mái trong mọi cuộc vui chơi.</p>
										<ul>
											<li>- Thiết kế quai áo 2 dây trẻ trung, năng động, mát mẻ với màu hồng san hô tươi sáng, nhẹ nhàng làm tôn lên vẻ đẹp nữ tính của người sở hữu em nó.</li>

											<li>- Sản phẩm có chất liệu thun rayon không co giãn, có độ rủ, độ giũ mềm mại, thấm hút mồ hôi rất tốt.</li>

											<li>- Ngoài ra phần đặc biệt của chiếc jumpsuit ngắn romper này là phần giữa ngực được đan dây chéo nhau tạo điểm nhấn cho sản phẩm thêm phần nổi bật và phóng khoáng nhưng không làm hở lộ liễu đi phần ngực.

											<li>- Phía sau sản phẩm có kéo khóa dễ dàng cho việc mặc vào và cởi ra.</li>
										</ul>
										<div class="text-center"><img src="images/p9.jpg" alt="" title=""></div>
										<p>Jumpsuit là một mẫu không thể thiếu trong tủ đồ của chị em trong mùa hè, với phong cách nhẹ nhàng sang trọng và đầy quyến rũ. Jumpsuit Ngắn Vạt Xéo Ánh Kim Tay Dài F21 là một mẫu siêu hot được nhiều chị em săn lùng và tìm kiếm với kiểu dáng sang chảnh kết hợp với màu vàng mới lạ quyến rũ mặc lên rất tone da và bắt mắt chị em đừng nên bỏ lỡ siêu phẩm này nhé.</p>
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
												<img src="images/fb.jpg" alt="" title="">
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
					<h2 class="s24 pdetail-retit"><span>Sản phẩm liên quan</span></h2>

					<div class="hpro-slider">
						<article class="sale-item">
							<figure class="position-relative sale-img">
								<a href="pdetail.html" title=""><img src="images/1.png" alt="" title=""></a>
								<span class="s12 text-white text-center position-absolute sale">-20%</span>
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
								<a href="pdetail.html" title=""><img src="images/1.png" alt="" title=""></a>
								<span class="s12 text-white text-center position-absolute sale">-20%</span>
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
								<a href="pdetail.html" title=""><img src="images/1.png" alt="" title=""></a>
								<span class="s12 text-white text-center position-absolute sale">-20%</span>
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
								<a href="pdetail.html" title=""><img src="images/1.png" alt="" title=""></a>
								<span class="s12 text-white text-center position-absolute sale">-20%</span>
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
		</main>
		<footer class="ft b6 t7">
			<div class="container">
				<div class="d-flex align-items-center justify-content-between logoft">
					<a href="index.html" title=""><img src="images/logo.png" alt="" title="" width="" height=""></a>

					<ul class="list-unstyled social ft-social">
						<li><a title=''><i class="fab fa-youtube"></i></a></li>
						<li><a title=''><i class="fab fa-google-plus-g"></i></a></li>
						<li><a title=''><i class="fab fa-skype"></i></a></li>
						<li><a title=''><i class="fab fa-twitter"></i></a></li>
						<li><a title=''><i class="fab fa-facebook-f"></i></a></li>
					</ul>
				</div>
				<div class="row justify-content-between">
					<div class="col-lg-4">
						<h2 class="t6 s24 ft-tit">Nana Store</h2>
						<ul class="list-unstyled ft-list">
							<li class="d-flex align-items-baseline"><i class="fas fa-map-marker-alt"></i> <span>Tầng 8, Tòa nhà TOYOTA Thanh Xuân, 315 Trường Chinh, Thanh Xuân, Hà Nội</span></li>
							<li class="d-flex align-items-baseline"><i class="fas fa-phone"></i> <a href="tel:0123456789" title="">Hotline: 0849.558.558</a></li>
							<li class="d-flex align-items-baseline"><i class="fas fa-comment"></i> <a href="mailto:info@gco.vn" title="">Email: info@gco.vn</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-6">
						<h2 class="t6 s24 ft-tit">Về chúng tôi</h2>

						<ul class="list-unstyled ft-list">
							<li><a href="about.html" title="">Giới thiệu</a></li>
							<li><a href="contact.html" title="">Liên hệ</a></li>
							<li class="t6"><a href="#" title=""><strong>Tuyển cộng tác viên</strong></a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-6">
						<h2 class="t6 s24 ft-tit">Hỗ trợ khách hàng</h2>
						<ul class="list-unstyled ft-list">
							<li><a href="chinhsach.html" title="">Chính sách thanh toán</a></li>
							<li><a href="chinhsach.html" title="">Chính sách đổi trả</a></li>
							<li><a href="chinhsach.html" title="">Chính sách mua hàng</a></li>
							<li><a href="chinhsach.html" title="">Chính sách vận chuyển</a></li>
						</ul>
					</div>
				</div>
				<div class="t3 py-3 ft-last">
					<div class="text-md-left t8 text-center container">
						<h2 class="">© Nana Store 2019. All rights reserved</h2>
					</div>
				</div>
			</div>
			
		</footer>
		<i class="fas fa-arrow-up to-top"></i>
		<div class="over"></div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/jquery.mmenu.min.all.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script src="js/jquery.countdown.min.js"></script>
	<script src="js/jquery.barrating.min.js"></script>
	<script src="js/magiczoomplus.js"></script>
	<script src="js/magicscroll.js"></script>
	<script src="js/main.js"></script>

</body>
</html>