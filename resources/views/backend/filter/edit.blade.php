@extends('backend.index')
<?php

$controller = 'Bộ lọc';
$filter_type = $_GET['filter_type'];
if($filter_type === 'price'){
    $controller .= ' theo giá';
}
if($filter_type === 'sale'){
    $controller .= ' theo khuyến mại';
}

?>

@section('controller',$controller )
@section('controller_route',route('backend.product.filter','filter_type=price'))
@section('action','Cập nhật')
@section('content')

    @include('backend.block.error')

    <form action="{!! route('backend.product.filter.postEdit',$data->id .'?filter_type='.$filter_type) !!}" method='POST' enctype="multipart/form-data" name="frmEditProduct">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">


        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Thông tin chung</a></li>
                <li class=""><a href="#settings" data-toggle="tab" aria-expanded="true">Cấu hình SEO</a></li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane active" id="activity">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input type="text" class="form-control" name="name" id="name" value="{!! old('name',isset($data->name) ? $data->name : null) !!}">
                            </div>
                            <div class="form-group">
                                <label>Giá trị nhỏ nhất</label>
                                <input type="number" class="form-control" name="min" id="min" value="{!! old('min',isset($data->min) ? $data->min : null) !!}">
                            </div>

                            <div class="form-group">
                                <label>Giá trị lớn nhất</label>
                                <input type="number" class="form-control" name="max" id="max" value="{!! old('max',isset($data->max) ? $data->max : null) !!}">
                            </div>

                        </div>

                    </div> {{--./row--}}
                </div>

            </div>
            <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->


        <button type="submit" class="btn btn-primary">OK</button>
    </form>

@endsection