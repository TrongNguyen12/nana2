@extends('backend.index')
@section('controller','Danh mục sản phẩm')
@section('controller_route',route('backend.product.category'))
@section('action','Danh sách')
@section('content')

    @include('backend.block.error')


<?php //dd($site_info) ?>

    <form action="{!! route('backend.product.category.postMultiDel') !!}" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">

        <div class="btnAdd">
            <a href="{!! route('backend.product.category.getAdd') !!}">
                <fa class="btn btn-primary"><i class="fa fa-plus"></i> Thêm</fa>
            </a>
            <button type="submit" class="btn btn-danger" style="display: none;"><i class="fa fa-trash-o"></i> Xóa</button>
        </div>

        <?php $i=0; ?>
        <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th><input type="checkbox" name="chkAll" id="chkAll"></th>
                <th>Danh mục</th>
                <th>Số danh mục con</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @php
                listCate($categories);
            @endphp
            </tbody>
        </table>
    </form>

@endsection