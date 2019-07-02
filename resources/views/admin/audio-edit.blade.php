@extends('admin.layout.admin')
@section('content')
<div class="container" style="width: 100%;">
	<h3>Audio Contents</h3>
	<form action="/adminsearch" method="get" role="search">
		{{ csrf_field() }}
		<div class="input-group">
			<input type="text" class="form-control" name="q"
			placeholder="Search Word in Bengali"> <span class="input-group-btn">
				<button type="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
			</span>
		</div>

	</form>
	<ul class="list-inline">
		<li><a href="{{url('adminsearch?q='.'অ')}}">অ</a></li>
		<li><a href="{{url('adminsearch?q='.'আ')}}">আ</a></li>
		<li><a href="{{url('adminsearch?q='.'ই')}}">ই</a></li>
		<li><a href="{{url('adminsearch?q='.'ঈ')}}">ঈ</a></li>
		<li><a href="{{url('adminsearch?q='.'উ')}}">উ</a></li>
		<li><a href="{{url('adminsearch?q='.'ঊ')}}">ঊ</a></li>
		<li><a href="{{url('adminsearch?q='.'ঋ')}}">ঋ</a></li>
		<li><a href="{{url('adminsearch?q='.'এ')}}">এ</a></li>
		<li><a href="{{url('adminsearch?q='.'ঐ')}}">ঐ</a></li>
		<li><a href="{{url('adminsearch?q='.'ও')}}">ও</a></li>
		<li><a href="{{url('adminsearch?q='.'ঔ')}}">ঔ</a></li>
		<li><a href="{{url('adminsearch?q='.'ক')}}">ক</a></li>
		<li><a href="{{url('adminsearch?q='.'খ')}}">খ</a></li>
		<li><a href="{{url('adminsearch?q='.'গ')}}">গ</a></li>
		<li><a href="{{url('adminsearch?q='.'ঘ')}}">ঘ</a></li>
		<li><a href="{{url('adminsearch?q='.'ঙ')}}">ঙ</a></li>
		<li><a href="{{url('adminsearch?q='.'চ')}}">চ</a></li>
		<li><a href="{{url('adminsearch?q='.'ছ')}}">ছ</a></li>
		<li><a href="{{url('adminsearch?q='.'জ')}}">জ</a></li>
		<li><a href="{{url('adminsearch?q='.'ঝ')}}">ঝ</a></li>
		<li><a href="{{url('adminsearch?q='.'ঞ')}}">ঞ</a></li>
		<li><a href="{{url('adminsearch?q='.'ট')}}">ট</a></li>
		<li><a href="{{url('adminsearch?q='.'ঠ')}}">ঠ</a></li>
		<li><a href="{{url('adminsearch?q='.'ড')}}">ড</a></li>
		<li><a href="{{url('adminsearch?q='.'ঢ')}}">ঢ</a></li>
		<li><a href="{{url('adminsearch?q='.'ণ')}}">ণ</a></li>
		<li><a href="{{url('adminsearch?q='.'ত')}}">ত</a></li>
		<li><a href="{{url('adminsearch?q='.'থ')}}">থ</a></li>
		<li><a href="{{url('adminsearch?q='.'দ')}}">দ</a></li>
		<li><a href="{{url('adminsearch?q='.'ধ')}}">ধ</a></li>
		<li><a href="{{url('adminsearch?q='.'ন')}}">ন</a></li>
		<li><a href="{{url('adminsearch?q='.'প')}}">প</a></li>
		<li><a href="{{url('adminsearch?q='.'ফ')}}">ফ</a></li>
		<li><a href="{{url('adminsearch?q='.'ব')}}">ব</a></li>
		<li><a href="{{url('adminsearch?q='.'ভ')}}">ভ</a></li>
		<li><a href="{{url('adminsearch?q='.'ম')}}">ম</a></li>
		<li><a href="{{url('adminsearch?q='.'য')}}">য</a></li>
		<li><a href="{{url('adminsearch?q='.'র')}}">র</a></li>
		<li><a href="{{url('adminsearch?q='.'ল')}}">ল</a></li>
		<li><a href="{{url('adminsearch?q='.'শ')}}">শ</a></li>
		<li><a href="{{url('adminsearch?q='.'ষ')}}">ষ</a></li>
		<li><a href="{{url('adminsearch?q='.'স')}}">স</a></li>
		<li><a href="{{url('adminsearch?q='.'হ')}}">হ</a></li>
		<li><a href="{{url('adminsearch?q='.'য়')}}">য়</a></li>
		<li><a href="{{url('adminsearch?q='.'ড়')}}">ড়</a></li>
		<li><a href="{{url('adminsearch?q='.'ঢ়')}}">ঢ়</a></li>
		<li><a href="{{url('adminsearch?q='.'ৎ')}}">ৎ</a></li>
		<li><a href="{{url('adminsearch?q='.'ং')}}">ং</a></li>
		<li><a href="{{url('adminsearch?q='.'ঃ')}}">ঃ</a></li>
		<li><a href="{{url('adminsearch?q='.'ঁ')}}">ঁ</a></li>
	</ul>
	@if(isset($banglaWordCollection))
	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Bangla Word</th>
					<th>Pronouciation</th>
					<th>Play</th>
					<th>Meaning</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($banglaWordCollection as $key => $data)
				<tr>
					<th>{{$data->BanglaWord}}</th>
					<th>{{$data->WordPronouciation}}</th>
					<th><audio controls>
						<source src="storage/audiofile/{{$data->AudioFile}}" type="audio/ogg">
						</audio>
					</th>
					<th>{{$data->Meaning}}</th>
					<th>
						<a class="btn btn-info btn-sm" href="{{route('banglaword.edit',$data->id)}}">Edit</a>

					</th>
					<th><form action="{{route('banglaword.destroy',$data->id)}}"  method="POST">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<input class="btn btn-sm btn-danger" type="submit" value="Delete">
					</form></th>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	{!! $banglaWordCollection->render() !!}
	@endif
</div>

@endsection

