@extends('backend.index')
@section('controller','Đối tác')
@section('controller_route',route('backend.config.partner'))
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
                                <?php

                                $image = isset($data->image)
                                    ? image_url($data->image->url)
                                    : image_url('');
                                ?>
                                <img src="{!! $image !!}" id="show-img" class="showImg">
                                <div class="file-loading">
                                    <input id="inpImg" name="fImage" type="file" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       value="{!! old('name', isset($data) ? $data['name'] : null) !!}" required>
                            </div>
                            <div class="form-group">
                                <label>Đường dẫn</label>
                                <input type="text" class="form-control" name="slug" id="slug" value="{!! old('name', isset($data) ? $data['slug'] : null) !!}">
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