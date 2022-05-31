<h1>Edit Comment</h1>
<div>
    <p>{{ $comment->item->name }}</p>
    <form action="{{ route('comments.update', ['comment' => $comment->uuid]) }}" method="post">
        @method('PUT')
        @csrf
        <label for="name">Content:</label>
        <input type="text" name="content" value="{{ $comment->content }}">
        <button type="submit" name="action" value="send">Submit</button>
    </form>
    <a href="{{ route('items.show', ['item' => $comment->item->uuid]) }}">back</a>
</div>
