@extends('frontend.masterpages')
@section('class', 'chkout')
@section('main')
    <div class="b4">
        <div class="container">
            <ul class="bread justify-content-start list-unstyled">
                <li><a href="{{ asset('/') }}" title="">Trang chủ</a></li>
                <li><a href="#" title="">Thanh toán</a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <h1 class="sr-only">Thanh toán</h1>
        <form class="row chk-frm" method="POST" action="{{ asset('saveOrder') }}">
           <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-3">
                            <div class="">
                                <h2 class="s24 medium text-md-left text-center chkoutmethod-tit">Thông tin khách hàng</h2>
                                @if(count($errors) > 0)
                                  <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-ban"></i> Thông báo</h4>
                                    @foreach($errors->all() as $error)
                                        <li>{!! $error !!}</li>
                                     @endforeach
                                  </div>
                                @endif
                                <div class="chkout-frm">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-field" placeholder="Họ tên khách hàng" required="required" value="{!! old('name') !!}">
                                        <label class="form-label">Họ tên khách hàng</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" name="phone" class="form-field" placeholder="Số điện thoại" required="required" value="{!! old('phone') !!}">
                                        <label class="form-label">Số điện thoại</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-field" placeholder="Email" required="required" value="{!! old('email') !!}">
                                        <label class="form-label">Email</label>
                                    </div>
                                    <h3 class="pb-4 medium s16">Địa chỉ nhận hàng:</h3>
                                   <div class="row">
                                        <div class="col-sm-6">
                                            <select class="form-control" required="required" id="province" name="province">
                                                <option value="">Tỉnh/TP</option>
                                                @foreach ($province as $item)
                                                   <option value="{{ $item->provinceid }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control" required="required" name="district" id="district">
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="text"
                                               name="address"
                                               class="form-field"
                                               placeholder="Địa chỉ (Ghi rõ đến số nhà, đường, phường/xã)"
                                               required="required"
                                               value="{!! old('address') !!}">
                                        <label class="form-label">Địa chỉ (Ghi rõ đến số nhà, đường, phường/xã)</label>
                                    </div>
                                    <div class="form-group">
                                        <textarea rows="3"
                                                  class="form-field"
                                                  name="content_main"
                                                  placeholder="Nội dung đơn hàng"
                                                  value="{!! old('content_main') !!}" ></textarea>
                                        <label class="form-label">Nội dung đơn hàng</label>
                                    </div>

                                    <div class="chkout-method">
                                        <h3 class="s18 medium py-3">Phương thức thanh toán</h3>
                                        <input type="hidden" name="bank_id" id="bank_id" value="1">
                                        <div class="accordion" id="accordion">
                                            <div class="card">
                                                <div class="card-header" data-toggle="collapse" data-target="#cod" aria-expanded='true'>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" name="payment_method" value="1" required="required" checked>
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description">Thanh toán khi nhận hàng</span>
                                                    </label>
                                                </div>

                                                <div id="cod" class="collapse show" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Nhân viên của chúng tôi giao hàng đến quý khách, quý khách sẽ thanh toán đầy đủ 100% số tiền trực tiếp cho nhân viên của chúng tôi.
                                                    </div>
                                                </div>
                                            </div>

                                            @if(isset($bank) && count($bank))

                                                <div class="card">
                                                    <div class="card-header collapsed" data-toggle="collapse" data-target="#bank">
                                                        <label class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" name="payment_method" value="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Chuyển khoản ngân hàng</span>
                                                        </label>
                                                    </div>
                                                    <div id="bank" class="collapse" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <ul class="nav nav-pills cart-tabs-menu" role="tablist">

                                                                @foreach($bank as $key => $item)


                                                                    <li class="nav-item">
                                                                        <a class="nav-link {!! !$key ? 'active' : null !!}" data-toggle="pill" href="#nganhang{!! $key !!}" role="tab" data-id="{!! $item->id !!}">
                                                                            <img src="{!! url('uploads/bank/'.$item->image) !!}" title="{!! $item->name !!}" alt="{!! $item->name !!}">
                                                                        </a>
                                                                    </li>

                                                                @endforeach


                                                            </ul>
                                                            <div class="tab-content cart-tab-content" id="pills-tabContent">
                                                                <h4 class="s18 py-3">Thông tin tài khoản</h4>

                                                                @foreach($bank as $key => $item)

                                                                    <div class="s14 tab-pane fade show {!! !$key ? 'active' : null !!}" id="nganhang{!! $key !!}" role="tabpanel">
                                                                        <div class="">
                                                                            <p>Chủ TK:
                                                                                <span class="text-uppercase">{!! $item->account_name !!}</span>
                                                                            </p>
                                                                            <p>Số TK: {!! $item->account_number !!}</p>
                                                                            <p>{!! $item->account_branch !!}</p>
                                                                        </div>
                                                                    </div>

                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-lg-6 chkout-r">
                <div class="row">
                    <div class="col-lg-8 offset-lg-1 s16 ">
                        <h2 class="s24 medium text-md-left text-center chkoutmethod-tit">Thông tin đơn hàng</h2>
                        @foreach (Cart::content() as $item)
                            <div class="chkout-r-item">
                                <div class="row">
                                    <div class="col-md-2 col-3 d-flex align-items-center justify-content-center">
                                        <a href="#" title=""><img src="{{ asset('uploads/product/avatar') }}/{{ $item->options->image }}" title="" alt=""></a>
                                    </div>
                                    <div class="col-md-6 col-9">
                                        <h3 class=""><a href="#" title="">{{ $item->name }}</a></h3>
                                        <h4 class="s14 t4">Màu sắc: <span class="chk-color"># {{ $item->options->color }}</span></h4>
                                    </div>
                                    <div class="col-md-4 col-12 text-right">
                                        <h3 class="medium s16 t3">{{ number_format( $item->price , 0, ',', '.').' đ' }}</h3>
                                        <div class="">x {{ $item->qty  }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                            <div class="d-flex align-items-center justify-content-between py-4 cartr-tt">
                                <span class="s16">Tổng thanh toán</span>
                                <span class="t3 s18 bold">{{ Cart::total() }} đ</span>
                            </div>
                        <div class="d-flex flex-md-nowrap flex-wrap align-items-center justify-content-md-start justify-content-center pt-4">
                            <button type="submit" class="btn buy-btn">MUA NGAY</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            $('#province').change(function(event) {
                $provinceID =  $(this).val();
                $.ajax({
                    url: '{{ asset('province') }}',
                    type: 'GET',
                    data: {
                        districtid: $provinceID
                    }
                })
                .done(function(data) {
                    $('#district').html(data);
                })
            });
            var bank_id = $('#bank_id');
            $('.nav-link').on('click',function(){
                var value = $(this).data('id');
                bank_id.val(value);
            })
        });
    </script>
@endsection