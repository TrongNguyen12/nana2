@extends('backend.index')
@section('controller','Giới thiệu')
@section('action','Cập nhật')
@section('content')

    @include('backend.block.error')


        <input type="hidden" name="_token" value="{!! csrf_token() !!}">

        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="{!! session('about_value') ? null : 'active'!!}"><a href="#activity" data-toggle="tab" aria-expanded="true">Thông tin chung</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane {!! session('about_value') ? null : 'active'!!}" id="activity">
                    <form action="" method='POST' enctype="multipart/form-data" name="frmEditProduct">
                        <input type="hidden" name="_token" value="{!! csrf_token(); !!}">
                        <input type="hidden" name="id" value="{!! isset($about) ? $about->id : null !!}">
                        <div class="row">

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                           value="{!! old('name', isset($about) ? $about['name'] : null) !!}" required>
                                </div>

                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <input type="text" class="form-control" name="meta_title"
                                           value="{!! old('meta_title', isset($about) ? $about['meta_title'] : null) !!}">
                                </div>

                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea
                                            class="form-control"
                                            name="meta_description"
                                    >{!! old('meta_description', isset($about) ? $about['meta_description'] : null) !!}</textarea>

                                </div>

                                <div class="form-group">
                                    <label>Meta Keyword</label>
                                    <input type="text" class="form-control" name="meta_keyword"
                                           value="{!! old('meta_keyword', isset($about) ? $about['meta_keyword'] : null) !!}">
                                </div>


                            </div>

                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label>Banner</label><br>
                                    
                                    <img src="{{ asset('uploads/post') }}/{{ $about->image }}" id="show-img" class="showImg showImg1">
                                    <div class="file-loading">
                                        <input id="inpImg" name="fImage" type="file" value="">
                                    </div>
                                </div>
                            </div>


                        </div> {{--./row--}}

                        <div class="form-group">
                            <label>Mô tả ngắn</label>
                            <textarea id="desc"
                                      name="content_short">{!! old('desc', isset($about) ? $about['content_short'] : null) !!}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Mô tả chi tiết</label>
                            <textarea id="content"
                                      name="content_main">{!! old('content_main', isset($about) ? $about['content_main'] : null) !!}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">OK</button>
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>




@endsection