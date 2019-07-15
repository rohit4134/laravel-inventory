
<h1>Categories list page</h1>
<a href="{{ url('categories/create') }}">Add Category</a>
<table border="1">
<tr>
    <td>ID</td>
    <td>NAME</td>
    <td>STATUS</td>
    <td>ACTIONS</td>

</tr>

@foreach($categories as $category)
<tr>
    <td>{{ $category->id }} </td>
    <td>{{ $category->name }}  </td>
    <td>{{$category->status }}  </td>
    <td>Edit
        Delete

    </td>
</tr>

@endforeach



</table>