@extends('admin.layout.admin')

@section('content')
<div class="container" style="width: 100%;">
	<h3>Video Contents</h3>
@if(isset($videoContent))

@foreach($videoContent as $video)
<div class="col-md-6 col-sm-6 col-lg-6 ">
	<div style="height: 25px;background-color: #A9A9A9; text-align: center;">
		<h4>{{ $video->vd_description }}</h4>
	</div>
	<div style="background-color: #D3D3D3">
		<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	</div>
</div>

<br>
<div class="media col-md-6 col-sm-6 col-lg-6 " >
	<div class="media-body">

		@if (is_null($video->vd_link) OR empty($video->vd_link))
		<iframe width="560" height="315" src="storage/videofile/{{ $video->vd_name }}" frameborder="0" allowfullscreen>
		</iframe>
		@elseif(is_null($video->vd_name) OR empty($video->vd_name))
		<iframe width="560" height="315" src="{{ $video->vd_link }}" frameborder="0" allowfullscreen>
		</iframe>
		@endif
		@role('superviser')
		<div style="display: -webkit-box;">
			<a class="btn btn-info btn-sm" style="margin-right: 10px" href="{{route('videocontent.edit',$video->id)}}">Edit</a>
			<form action="{{route('videocontent.destroy',$video->id)}}"  method="POST">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<input class="btn btn-sm btn-danger" type="submit" value="Delete">
			</form>
		</div>
		@endrole
	</div>
</div>
<br>

@endforeach
@endif
</div>
@endsection
