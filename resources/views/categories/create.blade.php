<h1>Product create form</h1>
<form action="{{ url('categories') }}" method="post">

@csrf
<div>
    <label>Name:</label>
    <input type="text" name="name">
</div>
<div>
    <label for="status">Status</label>
    <input type="number" name="status">

</div>
<input type="submit" value="save">

<form>