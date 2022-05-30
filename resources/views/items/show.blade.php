<h1>Show Item</h1>
<p>{{ $item->name}}</p>
<a href="{{ route('items.edit', ['item' => $item->uuid]) }}">edit</a>
<a href="{{ route('items.index') }}">back</a>
<h3>Comments</h3>
<form action="{{ route('items.comments.store', ['item' => $item->uuid]) }}" method="post">
    @csrf
    <label for="content">Content:</label>
    <br>
    <textarea id="content" name="content" cols="100" rows="4"></textarea>
    <button type="submit" name="action" value="send">Submit</button>
</form>
@foreach ($item->comments->sortByDesc('updated_at') as $comment)
    <p>
        <span>{{ $comment->user->name }}</span>
        <span>{{ $comment->updated_at }}</span>
    </p>
    <p>{{ $comment->content }}</p>
    @if ($comment->user->id === Auth::id())
        <a href="{{ route('comments.edit', ['comment' => $comment->uuid]) }}">edit</a>
    @endif
@endforeach
