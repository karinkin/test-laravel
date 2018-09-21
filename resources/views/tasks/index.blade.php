
@extends('layouts.app')

@section('content')
<ul>
	@if(isset($tasks))
		@foreach($tasks as $item)
			<li>
				{{$item->body}}
			</li>
		@endforeach
	@else
		No tasks is sent
	@endif
</ul>
@endsection