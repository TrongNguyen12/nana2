@extends('backend.index')
@section('controller','Ngân hàng')
@section('controller_route',route('backend.config.bank'))
@section('action','Danh sách')
@section('content')

    @include('backend.block.error')


<?php //dd($site_info) ?>

    <form action="{!! route('backend.config.bank.postMultiDel') !!}" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="btnAdd">
            <a href="{!! route('backend.config.bank.getAdd') !!}">
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
                <th>Chủ khoản</th>
                <th>STK</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @foreach($banks as $item)
                <?php $i++; ?>
                <tr>
                    <td><input type="checkbox" name="chkItem[]" value="{!! $item['id'] !!}"></td>
                    <td>{!! $i !!}</td>
                    <td>
                        <a class="text-default" href="{!! route('backend.config.bank.getEdit',$item['id']) !!}" title="Sửa">
                            <img src="{{ asset('uploads/bank/'.$item['image']) }}" class="img-responsive imglist" />
                        </a>
                    </td>


                    <td>
                        <a class="text-default" href="{!! route('backend.config.bank.getEdit',$item['id']) !!}" title="Sửa">  {!! $item['name'] !!} </a>
                    </td>

                    <td>
                        <a class="text-default" href="{!! route('backend.config.bank.getEdit',$item['id']) !!}" title="Sửa">  {!! $item['account_name'] !!} </a>
                    </td>

                    <td>
                        <a class="text-default" href="{!! route('backend.config.bank.getEdit',$item['id']) !!}" title="{!! $item->account_number !!}">  {!! $item->account_number !!} </a>
                    </td>


                    <td>
                        {!! ($item['status'] === 1) ? 'Hiển thị' : 'Ẩn' !!}


                    </td>

                    <td>
                        <div>
                            <a href="{!! route('backend.config.bank.getEdit',$item['id']) !!}" title="Sửa"> <i class="fa fa-pencil fa-fw"></i> Sửa</a> &nbsp; &nbsp; &nbsp;
                            <a class="text-danger" href="{!! route('backend.config.bank.getDelete',$item['id']) !!}" onclick="return confirm('Bạn có chắc chắn xóa không ?')" title="Xóa"> <i class="fa fa-trash-o fa-fw"></i> Xóa</a>
                        </div>

                    </td>

                </tr>

            @endforeach
            </tbody>
        </table>
    </form>

@endsection