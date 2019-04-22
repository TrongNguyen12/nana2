@php
	$path = 'public/frontend/';
@endphp
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title position-relativele>{!! $site_info->site_title.' - '.$site_info->site_description !!}</title position-relativele>
	<link rel="stylesheet" type="text/css" href="{{ asset($path) }}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset($path) }}/css/slick.css">
	<link rel="stylesheet" href="{{ asset($path) }}/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="{{ asset($path) }}/css/jquery.mmenu.all.css">
	<link rel="stylesheet" type="text/css" href="{{ asset($path) }}/fonts/fontawesome/fontawesome-all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	@yield('stylesheet')
	<link rel="stylesheet" type="text/css" href="{{ asset($path) }}/css/style.css">
	<link rel="icon" href="{{ asset('uploads/config/logo/'.$site_info->site_favicon) }}">
	<link rel="stylesheet" href="{{ asset($path) }}/css/jquery.toast.css">
	<script>
		function base_url() {
			return "{{ asset($path) }}";
		}
	</script>
</head>
<body>
	<div class="wrapper index">
		<header class="fixed-top top">
			<div class="container">
				@include('frontend.teamplate.header')
			</div>
		</header>
		<main class="@yield('class')">
			@yield('main')
		</main>
		<footer class="ft b6 t7">
			<div class="container">
				@include('frontend.teamplate.footer')
			</div>
		</footer>
		<i class="fas fa-arrow-up to-top"></i>
		<div class="over"></div>
	</div>
	<script src="{{ asset($path) }}/js/jquery.min.js"></script>
	<script src="{{ asset($path) }}/js/slick.min.js"></script>
	<script src="{{ asset($path) }}/js/jquery.mmenu.min.all.js"></script>
	<script src="{{ asset($path) }}/js/popper.min.js"></script>
	<script src="{{ asset($path) }}/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script src="{{ asset($path) }}/js/jquery.countdown.min.js"></script>
		@yield('script')
	<script src="{{ asset($path) }}/js/main.js"></script>
	<script src="{{ asset($path) }}/js/jquery.toast.js"></script>
	@if (Session::has('Tsuccess'))
		<script>
			$.toast({
			    text: "{{ Session::get('Tsuccess') }}",
			    heading: 'Thông Báo', 
			    icon: 'success', 
			    showHideTransition: 'slide', 
			    allowToastClose: true, 
			    hideAfter: 3000, 
			    stack: 5, 
			    position: 'bottom-left',
			    textAlign: 'left', 
			    loader: false, 
			    loaderBg: '#9ec600',  
			    beforeShow: function () {}, 
			    afterShown: function () {}, 
			    beforeHide: function () {},
			    afterHidden: function () {} 
			});
		</script>
	@endif
</body>
</html>