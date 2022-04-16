<h1>Create Item</h1>
<div>
    <p></p>
    <form action="{{ route('item.store') }}" method="post">
        {{ csrf_field() }}
        <label for="name">Name:</label>
        <input type="text" name="name">
        <button type="submit" name="action" value="send">Submit</button>
    </form>
</div>
