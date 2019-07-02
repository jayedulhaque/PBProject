@extends('after-login-layout')
@section('content')
<div class="container">
	<ul class="list-inline">
		<li><a href="{{url('search?q='.'অ')}}">অ</a></li>
		<li><a href="{{url('search?q='.'আ')}}">আ</a></li>
		<li><a href="{{url('search?q='.'ই')}}">ই</a></li>
		<li><a href="{{url('search?q='.'ঈ')}}">ঈ</a></li>
		<li><a href="{{url('search?q='.'উ')}}">উ</a></li>
		<li><a href="{{url('search?q='.'ঊ')}}">ঊ</a></li>
		<li><a href="{{url('search?q='.'ঋ')}}">ঋ</a></li>
		<li><a href="{{url('search?q='.'এ')}}">এ</a></li>
		<li><a href="{{url('search?q='.'ঐ')}}">ঐ</a></li>
		<li><a href="{{url('search?q='.'ও')}}">ও</a></li>
		<li><a href="{{url('search?q='.'ঔ')}}">ঔ</a></li>
		<li><a href="{{url('search?q='.'ক')}}">ক</a></li>
		<li><a href="{{url('search?q='.'খ')}}">খ</a></li>
		<li><a href="{{url('search?q='.'গ')}}">গ</a></li>
		<li><a href="{{url('search?q='.'ঘ')}}">ঘ</a></li>
		<li><a href="{{url('search?q='.'ঙ')}}">ঙ</a></li>
		<li><a href="{{url('search?q='.'চ')}}">চ</a></li>
		<li><a href="{{url('search?q='.'ছ')}}">ছ</a></li>
		<li><a href="{{url('search?q='.'জ')}}">জ</a></li>
		<li><a href="{{url('search?q='.'ঝ')}}">ঝ</a></li>
		<li><a href="{{url('search?q='.'ঞ')}}">ঞ</a></li>
		<li><a href="{{url('search?q='.'ট')}}">ট</a></li>
		<li><a href="{{url('search?q='.'ঠ')}}">ঠ</a></li>
		<li><a href="{{url('search?q='.'ড')}}">ড</a></li>
		<li><a href="{{url('search?q='.'ঢ')}}">ঢ</a></li>
		<li><a href="{{url('search?q='.'ণ')}}">ণ</a></li>
		<li><a href="{{url('search?q='.'ত')}}">ত</a></li>
		<li><a href="{{url('search?q='.'থ')}}">থ</a></li>
		<li><a href="{{url('search?q='.'দ')}}">দ</a></li>
		<li><a href="{{url('search?q='.'ধ')}}">ধ</a></li>
		<li><a href="{{url('search?q='.'ন')}}">ন</a></li>
		<li><a href="{{url('search?q='.'প')}}">প</a></li>
		<li><a href="{{url('search?q='.'ফ')}}">ফ</a></li>
		<li><a href="{{url('search?q='.'ব')}}">ব</a></li>
		<li><a href="{{url('search?q='.'ভ')}}">ভ</a></li>
		<li><a href="{{url('search?q='.'ম')}}">ম</a></li>
		<li><a href="{{url('search?q='.'য')}}">য</a></li>
		<li><a href="{{url('search?q='.'র')}}">র</a></li>
		<li><a href="{{url('search?q='.'ল')}}">ল</a></li>
		<li><a href="{{url('search?q='.'শ')}}">শ</a></li>
		<li><a href="{{url('search?q='.'ষ')}}">ষ</a></li>
		<li><a href="{{url('search?q='.'স')}}">স</a></li>
		<li><a href="{{url('search?q='.'হ')}}">হ</a></li>
		<li><a href="{{url('search?q='.'য়')}}">য়</a></li>
		<li><a href="{{url('search?q='.'ড়')}}">ড়</a></li>
		<li><a href="{{url('search?q='.'ঢ়')}}">ঢ়</a></li>
		<li><a href="{{url('search?q='.'ৎ')}}">ৎ</a></li>
		<li><a href="{{url('search?q='.'ং')}}">ং</a></li>
		<li><a href="{{url('search?q='.'ঃ')}}">ঃ</a></li>
		<li><a href="{{url('search?q='.'ঁ')}}">ঁ</a></li>
	</ul>
	@if(isset($details))
	<p> The Search results for your query <b> {{ $query }} </b> are :</p>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Bangla Word</th>
				<th>Pronouciation</th>
				<th>Play</th>
				<th>Meaning</th>
			</tr>
		</thead>
		<tbody>
			@foreach($details as $key => $data)
			<tr>
				<th>{{$data->BanglaWord}}</th>
				<th>{{$data->WordPronouciation}}</th>
				<th><audio controls>
					<source src="storage/audiofile/{{$data->AudioFile}}" type="audio/ogg">
					</audio>
				</th>
				<th>{{$data->Meaning}}</th>
			</tr>
			@endforeach
		</tbody>
	</table>
	{!! $details->render() !!}
	@endif
</div>
@endsection