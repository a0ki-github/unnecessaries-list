<h1>Show Item</h1>
<p>{{ $item->name}}</p>
<a href="{{ route('items.edit', ['item' => $item->id]) }}">edit</a>
<a href="{{ route('items.index') }}">back</a>
