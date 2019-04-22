@extends('backend.index')
<?php
$controller = 'Bộ lọc';
$filter_type = isset($_GET['filter_type']) ? $_GET['filter_type'] : null;
if($filter_type === 'price'){
    $controller .= ' theo giá';
}
if($filter_type === 'sale'){
    $controller .= ' theo khuyến mại';
}

?>

@section('controller',$controller )
@section('controller_route',route('backend.product.filter','filter_type=price'))
@section('action','Danh sách')
@section('content')

    @include('backend.block.error')


<?php //dd($site_info) ?>

    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="{!! isset($_GET['filter_type']) && $_GET['filter_type'] === 'price' ? 'active' : null !!}"><a href="#filter1" data-toggle="tab" aria-expanded="true">Lọc theo giá</a></li>
            <li class="{!! isset($_GET['filter_type']) && $_GET['filter_type'] === 'sale' ? 'active' : null !!}"><a href="#filter2" data-toggle="tab" aria-expanded="true">Lọc theo khuyến mại</a></li>
        </ul>


        <div class="tab-content">

            <div class="tab-pane {!! isset($_GET['filter_type']) && $_GET['filter_type'] === 'price' ? 'active' : null  !!}" id="filter1">
                <form action="{!! route('backend.product.filter.postMultiDel') !!}" method="POST">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                    <div class="btnAdd">
                        <a href="{!! route('backend.product.filter.getAdd','filter_type=price') !!}">
                            <fa class="btn btn-primary"><i class="fa fa-plus"></i> Thêm</fa>
                        </a>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Xóa</button>
                    </div>

                    <?php $i=0; ?>
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th><input type="checkbox" name="chkAll" id="chkAll"></th>
                            <th>STT</th>
                            <th>Tiêu đề</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($filter_price as $item)
                            <?php $i++; ?>
                            <tr>
                                <td><input type="checkbox" name="chkItem[]" value="{!! $item['id'] !!}"></td>
                                <td>{!! $i !!}</td>



                                <td>
                                    <a class="text-default" href="{!! route('backend.product.filter.getEdit',$item['id'].'?filter_type=price') !!}" title="Sửa">  {!! $item->name !!} </a>
                                </td>


                                <td>
                                    <div>
                                        <a href="{!! route('backend.product.filter.getEdit',$item['id'].'?filter_type=price') !!}" title="Sửa"> <i class="fa fa-pencil fa-fw"></i> Sửa</a> &nbsp; &nbsp; &nbsp;
                                        <a class="text-danger" href="{!! route('backend.product.filter.getDelete',$item['id'].'?filter_type=price') !!}" onclick="return confirm('Bạn có chắc chắn xóa không ?')" title="Xóa"> <i class="fa fa-trash-o fa-fw"></i> Xóa</a>
                                    </div>

                                </td>

                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </form>
            </div>

            <div class="tab-pane {!! isset($_GET['filter_type']) && $_GET['filter_type'] === 'sale' ? 'active' : null !!}" id="filter2">
                <form action="{!! route('backend.product.filter.postMultiDel') !!}" method="POST">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                    <div class="btnAdd">
                        <a href="{!! route('backend.product.filter.getAdd','filter_type=sale') !!}">
                            <fa class="btn btn-primary"><i class="fa fa-plus"></i> Thêm</fa>
                        </a>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Xóa</button>
                    </div>

                    <?php $i=0; ?>
                    <table id="example2" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th><input type="checkbox" name="chkAll" id="chkAll"></th>
                            <th>STT</th>
                            <th>Tiêu đề</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($filter_sale as $item)
                            <?php $i++; ?>
                            <tr>
                                <td><input type="checkbox" name="chkItem[]" value="{!! $item['id'] !!}"></td>
                                <td>{!! $i !!}</td>



                                <td>
                                    <a class="text-default" href="{!! route('backend.product.filter.getEdit',$item['id'].'?filter_type=sale') !!}" title="Sửa">  {!! $item->name !!} </a>
                                </td>


                                <td>
                                    <div>
                                        <a href="{!! route('backend.product.filter.getEdit',$item['id'].'?filter_type=sale') !!}" title="Sửa"> <i class="fa fa-pencil fa-fw"></i> Sửa</a> &nbsp; &nbsp; &nbsp;
                                        <a class="text-danger" href="{!! route('backend.product.filter.getDelete',$item['id'].'?filter_type=sale') !!}" onclick="return confirm('Bạn có chắc chắn xóa không ?')" title="Xóa"> <i class="fa fa-trash-o fa-fw"></i> Xóa</a>
                                    </div>

                                </td>

                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </form>

            </div> {{--./row--}}
        </div>
        <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->

@endsection