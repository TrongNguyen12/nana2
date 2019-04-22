<div class="accordion pro-acc" id="accordionExample">
	@foreach ($category as $item)
		@if ($item->parent_id == 0)
			<div class="aside-cate">
				<h3 class="s16 medium aside-tit collapsed" data-toggle="collapse" data-target="#{{ $item->id }}" data-toggle="collapse" data-target="#p1"><a href="javascript:0;" title="">{{ $item->name }}</a></h3>
				<div id="{{ $item->id }}" class="collapse" data-parent="#accordionExample">
				    <ul class="list-unstyled aside-list">
						@foreach ($category as $item2)
							@if ($item2->parent_id == $item->id)
						        <li class="active"><a href="{{ asset('danh-muc/'.$item2->slug.'-p'.$item2->id) }}.html" title="">{{ $item2->name }}</a></li>
						    @endif
						@endforeach
				 	</ul>
				</div>
		    </div>
		@endif
	@endforeach
</div>