@extends('frontend.masterpages')

@section('main')
	<div class="b4">
		<div class="container">
			<ul class="bread justify-content-start list-unstyled">
				<li><a href="{{ asset('/') }}" title="">Trang chủ</a></li>
				<li><a href="{{ asset('gio-hang') }}.html" title="">Giỏ hàng</a></li>
			</ul>
		</div>
	</div>
	<section class="bwrap">
		<div class="container">
			<div class="pb-5 w-100">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<h1 class="s24 py-4">Giỏ hàng</h1>
						<div class="table-responsive">
							@if ($content->isEmpty())
								<h1>GIỎ HÀNG HIỆN ĐANG TRỐNG</h1>
								<a class="btn buy-btn" href="{{ asset('/') }}" role="button" style="background: #c02d7b; color: white">Mua Sắm Ngay</a>
							@else
							<table class="table table-striped cart-tbl">
							  	<thead class="text-white b1">
							    	<tr>
							      		<td scope="col">STT</td>
							      		<td scope="col">SẢN PHẨM</td>
							      		<td scope="col">GIÁ SẢN PHẨM</td>
							      		<td scope="col">SỐ LƯỢNG</td>
							      		<td scope="col">THÀNH TIỀN</td>
							    	</tr>
							  	</thead>
							  	<tbody id="card-pro">
							  		<?php $stt = 1  ?>
							  		@foreach ($content as $item)
								    	<tr class="cart-item">
								      		<td scope="row">{{ $stt++ }}</td>
								      		<td class='cart-item-info'>
												<a href="#" title=""><img src="{{ asset('uploads/product/avatar') }}/{{ $item->options->image }}" alt="" title=""></a>
												<h3 class="cart-name">
													<a href="#" title="">{{ $item->name }}</a>
												</h3>
								      		</td>
								      		<td class="medium s18 t3">{{ number_format( $item->price , 0, ',', '.').' đ' }}</td>
								      		<td>
												<div class="d-flex align-items-center position-relative pdetail-quan">
													<div class="inc count button">+</div>
											        <input class="qty" data-id ="{{ $item->rowId }}"  type="number" min="1" value="{{ $item->qty }}"><div class="dec count button">-</div>
											        
											    </div>
								      		</td>
								      		<td class="medium s18 t3">{{ number_format( $item->price * $item->qty , 0, ',', '.').' đ' }}</td>
								    	</tr>
								    @endforeach
							  	</tbody>
							</table>
						</div>
						<div class="b1 text-white s24 cart-tt">Tổng thanh toán: {{ $total.' đ' }}</div>
						
						<div class="text-right pt-4">
							<a href="{{ asset('cart/delete') }}" class="btn buy-btn" style="background: white;
    color: #c02d7b;">HỦY GIỎ HÀNG</a>
                            <a href="javascript:0;" class="btn buy-btn" id="btnUpdate">CẬP NHẬT GIỎ HÀNG</a>
                            <a href="{{ asset('thanh-toan') }}.html" class="btn buy-btn">THANH TOÁN</a>

                        </div>
                        @endif
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('script')
	<script>
		$(function() {
			$('#btnUpdate').click(function(event) {
				if($('tbody#card-pro tr').length != 0){
			        $('tbody#card-pro tr').each(function () {
			            value = $(this).find('input.qty').val();
			            rowId = $(this).find('input.qty').attr('data-id');
			           	$.ajax({
							url: '{{ asset('cart/update') }}',
							type: 'GET',
							async: true,
							data: {
								qty: value,
								rowId: rowId
							},
						})
			        });
			        //location.reload();
		    	}
		    	alert("Cập nhật giỏ hàng thành công !");
		    	location.reload();
			});
			
		});
	</script>
@endsection