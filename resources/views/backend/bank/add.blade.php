@extends('backend.index')
@section('controller','Ngân hàng')
@section('controller_route',route('backend.config.bank'))
@section('action','Thêm')
@section('content')
    
    @include('backend.block.error')
    
    <form action="{!! route('backend.config.bank.postAdd') !!}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Thông tin chung</a></li></ul>
          <div class="tab-content">
            <div class="tab-pane active" id="activity">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <div class="file-loading">
                                <input id="inpImg" name="fImage" type="file">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Tên ngân hàng</label>
                            <input type="text" class="form-control" name="name" id="name"
                                   value="{!! old('name') !!}" required>
                        </div>
                        <div class="form-group">
                            <label>Chủ khoản</label>
                            <input type="text" class="form-control" name="account_name" id="account_name"
                                   value="{!! old('account_name') !!}" required>
                        </div>

                        <div class="Số tài khoản">
                            <label>Chủ khoản</label>
                            <input type="number" class="form-control" name="account_number" id="account_number"
                                   value="{!! old('account_number') !!}" required>
                        </div>

                        <div class="form-group">
                            <label>Chi nhánh</label>
                            <input type="text" class="form-control" name="account_branch" id="account_branch"
                                   value="{!! old('account_branch') !!}" required>
                        </div>

                        <div class="form-group">
                            <label>Trạng thái</label> <br>

                            <input type="checkbox" name="status" value="1" id="status" checked>
                            <label for="status" class="lbl">Hiển thị</label>

                        </div>

                    </div>



                </div> {{--./row--}}


            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>

        <button type="submit" class="btn btn-primary">Lưu</button>


    </form>
        
@endsection