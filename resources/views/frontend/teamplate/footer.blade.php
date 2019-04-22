<div class="d-flex align-items-center justify-content-between logoft">
	<a href="index.html" title=""><img src="{{ asset($path) }}/images/logo.png" alt="" title="" width="" height=""></a>
	<ul class="list-unstyled social ft-social">
		<li>
			<a title='' href="{{ $social->youtube->url }}">
				<i class="fab fa-youtube"></i>
			</a></li>
		<li><a title='' href="{{ $social->google_plus->url }}"><i class="fab fa-google-plus-g"></i></a></li>
		<li><a title='' href="{{ $social->skype->url }}"><i class="fab fa-skype"></i></a></li>
		<li><a title='' href="{{ $social->twitter->url }}"><i class="fab fa-twitter"></i></a></li>
		<li><a title='' href="{{ $social->facebook->url }}"><i class="fab fa-facebook-f"></i></a></li>
	</ul>
</div>
<div class="row justify-content-between">
	<div class="col-lg-4">
		<h2 class="t6 s24 ft-tit">{!! $site_info->site_title !!}</h2>
		<ul class="list-unstyled ft-list">
			<li class="d-flex align-items-baseline"><i class="fas fa-map-marker-alt"></i> <span>{{ $site_info->site_address }}</span></li>
			<li class="d-flex align-items-baseline"><i class="fas fa-phone"></i> <a href="tel:{{ $site_info->site_phone }}" title="">Hotline: {{ $site_info->site_phone }}</a></li>
			<li class="d-flex align-items-baseline"><i class="fas fa-comment"></i> <a href="mailto:{{ $site_info->site_phone }}" title="">Email: {{ $site_info->site_email }}</a></li>
		</ul>
	</div>
	<div class="col-lg-3 col-6">
		<h2 class="t6 s24 ft-tit">Về chúng tôi</h2>

		<ul class="list-unstyled ft-list">
			<li><a href="{{ asset('gioi-thieu.html') }}" title="">Giới thiệu</a></li>
			<li><a href="{{ asset('lien-he.html') }}" title="">Liên hệ</a></li>
			<li class="t6"><a href="{{  $orther->header_recruitment->content }}" title=""><strong>Tuyển cộng tác viên</strong></a></li>
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
		<h2 class="">{{ $site_info->copyright }}</h2>
	</div>
</div>