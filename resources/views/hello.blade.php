@foreach($tasks as $item)
	<li>
		{{$item->body}}
	</li>
@endforeach