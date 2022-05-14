<h1>Create Item</h1>
<div>
    <p></p>
    <form action="{{ route('items.store') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name">
        <button type="submit" name="action" value="send">Submit</button>
    </form>
    <a href="{{ route('items.index') }}">back</a>
</div>
