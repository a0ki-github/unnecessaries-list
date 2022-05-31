<h1>Edit Item</h1>
<div>
    <form action="{{ route('items.update', ['item' => $item->uuid]) }}" method="post">
        @method('PUT')
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $item->name }}">
        <button type="submit" name="action" value="send">Submit</button>
    </form>
    <a href="{{ route('items.index') }}">back</a>
</div>
