@extends('backend.index')
@section('content')

    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{!! $product !!}</h3>
                    <p>Sản phẩm</p>
                    <a href="{!! route('backend.product') !!}" class="_link" title="Sản phẩm"></a>
                </div>
                <div class="icon"><i class="fa fa-apple"></i></div>
                {{-- <a href="{!! route('backend.product') !!}" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{!! $order !!}</h3>
                    <p>Đơn hàng @if($order_moidat) ({!! $order_moidat !!} đơn mới) @endif</p>

                    <div class="_order-count">

                        {{--@if($order_moidat) <p>Mới đặt: {!! $order_moidat !!}</p> @endif--}}
                        {{--@if($order_xacnhan) <p>Đã xác nhận: {!! $order_xacnhan !!}</p> @endif--}}
                        {{--@if($order_danggiaohang) <p>Đang giao hàng: {!! $order_danggiaohang !!}</p> @endif--}}
                        {{--@if($order_hoanthanh) <p>Hoàn thành: {!! $order_hoanthanh !!}</p> @endif--}}
                        {{--@if($order_huy) <p>Đã hủy: {!! $order_huy !!}</p> @endif--}}

                    </div>
                    <a href="{!! route('backend.order') !!}" class="_link" title="Đơn hàng"></a>
                </div>
                <div class="icon"><i class="fa fa-cart-plus"></i></div>
                {{-- <a href="{!! route('backend.order') !!}" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{!! $post !!}</h3>
                    <p>Bài viết</p>
                    <a href="{!! route('backend.blog') !!}" class="_link" title="Bài viết"></a>
                </div>
                <div class="icon"><i class="fa fa-book"></i></div>
                {{-- <a href="{!! url('backend/post/list?type=news') !!}" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{!! $inf !!}</h3>
                    <p>Liên hệ {!! isset($inf_count) && $inf_count ? '('.$inf_count.' liên mới)' : null !!}</p>
                    <a href="{!! route('backend.contact') !!}" class="_link" title="Liên hệ"></a>
                </div>
                <div class="icon"><i class="fa fa-comments-o"></i></div>
                {{-- <a href="{!! url('backend/inf/list?type=contact') !!}" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>
    </div>

    <div class="panel panel-primary">
        {{-- <div class="panel-heading"></div> --}}
        <div class="panel-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Tiêu đề</th>
                        <th>Liên kết mẫu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Trang chủ</td>
                        <td>
                            <a href="{!! url('/') !!}" target="_blank">
                                /
                            </a>
                        </td>
                    </tr>

                      <tr>
                          <td>Giới thiệu</td>
                          <td>
                              <a href="{!! url('gioi-thieu') !!}" target="_blank">
                                  gioi-thieu
                              </a>
                          </td>
                      </tr>

                      <tr>
                          <td>Sản phẩm</td>
                          <td>
                              <a href="{!! url('san-pham') !!}" target="_blank">
                                  san-pham
                              </a>
                          </td>
                      </tr>

                      <tr>
                          <td>Tin tức</td>
                          <td>
                              <a href="{!! url('tin-tuc') !!}" target="_blank">
                                  tin-tuc
                              </a>
                          </td>
                      </tr>

                      <tr>
                          <td>Liên hệ</td>
                          <td>
                              <a href="{!! url('lien-he') !!}" target="_blank">
                                  lien-he
                              </a>
                          </td>
                      </tr>

                      <tr>
                          <td>Giỏ hàng</td>
                          <td>
                              <a href="{!! url('gio-hang') !!}" target="_blank">
                                  gio-hang
                              </a>
                          </td>
                      </tr>
                </tbody>
            </table>
        </div>
    </div>

    

@endsection