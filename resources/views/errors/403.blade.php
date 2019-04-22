@extends('frontend.master')

@section('content')

	<main class="">
		<section class="p404">
			<div class="text-center container">
				<h1 class="f1 s120 t4 p404-tit">403 page</h1>
				<h2 class="s24 py-4">Xin lỗi, chúng tôi không tìm thấy trang bạn cần</h2>
				<a href="{!! route('home') !!}" title="Trang chủ" class="btn p404-btn">TRANG CHỦ</a>
			</div>
		</section>
	</main>
    
@endsection