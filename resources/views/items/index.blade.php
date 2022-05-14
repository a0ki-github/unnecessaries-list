<h1>Index Items</h1>
@foreach ($items as $item)
    <li>
        <a href="{{ route('items.show', ['item' => $item->uuid]) }}">
            {{ $item->name }}
        </a>
    </li>
@endforeach
<br>
<a href="{{ route('items.create') }}">Create New Item</a>
