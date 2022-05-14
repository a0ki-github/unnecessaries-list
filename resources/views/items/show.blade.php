<h1>Show Item</h1>
<p>{{ $item->name}}</p>
<a href="{{ route('items.edit', ['item' => $item->uuid]) }}">edit</a>
<a href="{{ route('items.index') }}">back</a>
