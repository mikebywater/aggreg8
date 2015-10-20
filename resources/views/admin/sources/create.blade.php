@extends('layouts.admin')
@section('content')

<form action="/admin/sources" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    Name <input name="name"/><br>
    Url<input name="url"/><br>
    Filtered ? <input name="filter"/><br>
    Url Node <input name="url_node"/><br>
    Content Node <input name="content_node"/><br>
    Title Node <input name="title_node"/><br>
    Image Node <input name="image_node"/><br>
    <button class="btn btn-info">Add</button>
</form>

@endsection