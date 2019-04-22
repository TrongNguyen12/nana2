@extends('backend.index')
@section('controller','Đối tác')
@section('controller_route',route('backend.config.partner'))
@section('action','Danh sách')
@section('content')

    @include('backend.block.error')


<?php //dd($site_info) ?>

    <form action="{!! route('backend.config.partner.postMultiDel') !!}" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">

        <div class="btnAdd">
            <a href="{!! route('backend.config.partner.getAdd') !!}">
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
                <th>Hình ảnh</th>
                <th>Tiêu đề</th>
                <th>Đường dẫn</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>


            @foreach($partners as $item)
                <?php $i++; ?>
                <tr>
                    <td><input type="checkbox" name="chkItem[]" value="{!! $item['id'] !!}"></td>
                    <td>{!! $i !!}</td>

                    <td>
                        <a class="text-default" href="{!! route('backend.config.partner.getEdit',$item['id']) !!}" title="Sửa">
                            <img src="{!! image_url($item->image->url) !!}" class="img-responsive imglist" />
                        </a>
                    </td>

                    <td>
                        <a class="text-default" href="{!! route('backend.config.partner.getEdit',$item['id']) !!}" title="Sửa">  {!! $item['name'] !!} </a>
                    </td>

                    <td>
                        @if(strlen($item['slug']))
                            <a class="text-default" target="_blank" href="{!! $item['slug'] !!}" title="{!! $item['name'] !!}">  {!! $item['slug'] !!} </a>
                        @else
                        _
                        @endif

                    </td>

                    <td>
                        {!! ($item['status'] === 1) ? 'Hiển thị' : 'Ẩn' !!}

                    </td>

                    <td>
                        <div>
                            <a href="{!! route('backend.config.partner.getEdit',$item['id']) !!}" title="Sửa"> <i class="fa fa-pencil fa-fw"></i> Sửa</a> &nbsp; &nbsp; &nbsp;
                            <a class="text-danger" href="{!! route('backend.config.partner.getDelete',$item['id']) !!}" onclick="return confirm('Bạn có chắc chắn xóa không ?')" title="Xóa"> <i class="fa fa-trash-o fa-fw"></i> Xóa</a>
                        </div>

                    </td>

                </tr>

            @endforeach
            </tbody>
        </table>
    </form>

@endsection