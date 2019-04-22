@extends('backend.index')
@section('controller','Ngân hàng')
@section('controller_route',route('backend.config.bank'))
@section('action','Cập nhật')
@section('content')

    @include('backend.block.error')

    <form action="" method='POST' enctype="multipart/form-data" name="frmEditProduct">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">

        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Thông tin chung</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="activity">

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Hình ảnh</label><br>
                                @if ($data->image != null)
                                     <img src="{{ asset('uploads/bank') }}/{{ $data->image }}" id="show-img" class="showImg">
                                @endif
                                <div class="file-loading">
                                    <input id="inpImg" name="fImage" type="file" value="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Tên ngân hàng</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       value="{!! old('name', isset($data) ? $data['name'] : null) !!}" required>
                            </div>
                            <div class="form-group">
                                <label>Chủ khoản</label>
                                <input type="text" class="form-control" name="account_name" id="account_name"
                                       value="{!! old('account_name', isset($data) ? $data['account_name'] : null) !!}" required>
                            </div>

                            <div class="Số tài khoản">
                                <label>Chủ khoản</label>
                                <input type="number" class="form-control" name="account_number" id="account_number"
                                       value="{!! old('account_number', isset($data) ? $data['account_number'] : null) !!}" required>
                            </div>

                            <div class="form-group">
                                <label>Chi nhánh</label>
                                <input type="text" class="form-control" name="account_branch" id="account_branch"
                                       value="{!! old('account_branch', isset($data) ? $data['account_branch'] : null) !!}" required>
                            </div>

                            <div class="form-group">
                                <label>Trạng thái</label> <br>

                                <input type="checkbox" name="status" value="1" id="active"
                                       @if($data['status'] === 1)
                                       checked="checked"
                                        @endif
                                >
                                <label for="active" class="lbl">Hiển thị</label>

                            </div>

                        </div>



                    </div> {{--./row--}}


                </div>



            </div>
            <!-- /.tab-content -->
        </div>

        <button type="submit" class="btn btn-primary">OK</button>
    </form>

@endsection