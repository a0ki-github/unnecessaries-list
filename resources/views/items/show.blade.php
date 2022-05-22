<h1>Show Item</h1>
<p>{{ $item->name}}</p>
<a href="{{ route('items.edit', ['item' => $item->uuid]) }}">edit</a>
<a href="{{ route('items.index') }}">back</a>
<h3>Comments</h3>
@foreach ($item->comments as $comment)
    <p>
        <span>{{ $comment->user->name }}</span>
        <span>{{ $comment->updated_at }}</p></span>
    <p>{{ $comment->content }}</p>
@endforeach
