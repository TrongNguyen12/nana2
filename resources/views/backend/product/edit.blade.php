@extends('backend.index')
@section('controller','Sản phẩm')
@section('controller_route',route('backend.product'))
@section('action','Cập nhật')
@section('content')

    @include('backend.block.error')

    <form action="" method='POST' enctype="multipart/form-data" name="frmEditProduct" id="frm_product">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Thông tin chung</a></li>
                <li class=""><a href="#product_gallery" data-toggle="tab" aria-expanded="false">Thư viện ảnh</a></li>
                <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Cấu hình SEO</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="activity">

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Hình ảnh</label><br>
                                <img src="{{ asset('uploads/product/avatar/'.$data['image']) }}" id="show-img" class="showImg">
                                <div class="file-loading">
                                    <input id="inpImg" name="fImage" type="file">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       value="{!! old('name', isset($data) ? $data['name'] : null) !!}" required>
                            </div>
                            <div class="form-group">
                                <label>Đường dẫn tĩnh</label>
                                <input type="text" class="form-control" name="slug" id="slug"
                                       value="{!! old('slug', isset($data) ? $data['slug'] : null) !!}" required>
                            </div>


                            
                            @if (isset($cate) && count($cate) )
                                <?php
                                    $category = $data->category;
                                    $category_id = [];
                                    if(isset($category) && count($category)){
                                        foreach ($category as $key=> $item ){
                                            $category_id[$key] = $item->id;
                                        }
                                    }
                                ?>

                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select class="form-control multislt" name="category_id[]" multiple>
                                        <option value="">Chọn danh mục</option>
                                        {!! cate_parent($cate,0,'',$category_id) !!}
                                    </select>
                                </div>

                            @endif
                            @if(isset($brands) && count($brands))
                                <div class="form-group">
                                    <label>Thương hiệu </label>
                                    <select class="form-control select2" name="brand_id">
                                      <option value="">Chọn thương hiệu</option>
                                        @foreach ($brands as $item)
                                          <option value="{{ $item->id }}" @if ($item->id == $data->brand_id ) selected @endif>--| {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Đơn giá</label>
                                <input type="number" class="form-control" name="price" min="0"
                                       value="{!! old('price', isset($data) ? $data['price'] : null) !!}">
                            </div>

                            <div class="form-group">
                                <label>Giá khuyến mại</label>
                                <input type="number" class="form-control" name="price_promotion" min="0"
                                       value="{!! old('price_promotion', isset($data) ? $data['price_promotion'] : null) !!}">
                            </div>
                            <div class="form-group" id="dateEndSale">
                                <label>Thời gian khuyến mại</label>
                                <span class="form-control" >
                                    <b id="displaydate">{!! date('d/m/Y', strtotime($data['begin_datetime_sale'])).' - ' .date('d/m/Y', strtotime($data['end_datetime_sale'])) !!}</b>
                                    <a href="javascript:;" style="margin-left: 10px; display: inline-block;" id="thaydoingay">Thay Đổi</a>
                                </span>
                                <input type="text" class="form-control" id="reservation" style="display: none;" placeholder="Chọn ngày bắt đầu và kết thúc sale">
                                <input type="hidden" id="test1" name="dateEndSale" value="{!! date('d/m/Y', strtotime($data['begin_datetime_sale'])).' - ' .date('d/m/Y', strtotime($data['end_datetime_sale'])) !!}">
                            </div>
                            <div class="form-group">
                                <label>Tùy chọn màu sắc</label>
                                  <input type="text" class="form-control " data-role="tagsinput" name="option" value="{!! old('option', isset($data) ? $data['option'] : null) !!}">
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Trạng thái</label> <br>

                                        <input type="checkbox" name="status" value="1" id="active" {!! $data['status'] == 1 ? ' checked="checked"' : null !!}>
                                        <label for="active" class="lbl">Nổi bật</label>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Kho</label> <br>
                                        <input type="checkbox" name="storage" value="1" id="storage"  {!! $data['storage'] == 1 ? ' checked="checked"' : null !!} >
                                        <label for="storage" class="lbl">Còn hàng</label>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div> {{--./row--}}

                    <div class="form-group">
                        <label>Mô tả ngắn</label>
                        <textarea id="desc"
                                  name="desc">{!! old('desc', isset($data) ? $data['content_short'] : null) !!}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Mô tả chi tiết</label>
                        <textarea id="content"
                                  name="content_main">{!! old('content_main', isset($data) ? $data['content_main'] : null) !!}</textarea>
                    </div>
                </div>

                <div class="tab-pane" id="product_gallery">
                    <label>Hình ảnh</label> <br>
                    @if(isset($data['more_image']))
                        @php
                            $more_image = json_decode($data['more_image']);
                        @endphp
                        <div class="row">
                            @foreach($more_image as $value)
                               <div class="col-sm-4 col-md-3 col-lg-2">
                                    <img src="{{ asset('uploads/product/prod/'.$value) }}" id="show-img" class="showImg">
                                </div>
                            @endforeach
                        </div>
                        <label>Chọn ảnh mới</label> <br>
                    @endif
                    <div class="file-loading">
                        <input id="gallery" name="fImageGallery[]" type="file" multiple>
                    </div>
                </div>

                <div class="tab-pane" id="settings">
                    <div class="form-group">
                        <label>Title SEO</label>
                        <input type="text" class="form-control" name="meta_title"
                               value="{!! old('meta_title', isset($data) ? $data['meta_title'] : null) !!}">
                    </div>

                    <div class="form-group">
                        <label>Meta Description</label>
                        <textarea name="meta_description" id=""
                                  class="form-control"
                                  rows="5">{!! old('meta_description', isset($data) ? $data['meta_description'] : null) !!}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Meta Keyword</label>
                        <input type="text" class="form-control" name="meta_keyword"
                               value="{!! old('meta_keyword', isset($data) ? $data['meta_keyword'] : null) !!}">
                    </div>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
    
        
        <button type="submit" class="btn btn-primary">OK</button>

        
    </form>
@endsection

@section('script')
    <script>
        jQuery(document).ready(function($) {
            $('#thaydoingay').click(function(event) {
                $('#reservation').slideToggle();
                $('#reservation').data('daterangepicker').hide()
            });
            $('#reservation').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
                $('#test1').val($(this).val());
                $('#displaydate').text($(this).val());
                $('#reservation').slideToggle();
            });
            $('#reservation').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
                $('#reservation').slideToggle();
            });
        });
    </script>
@endsection