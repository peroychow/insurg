@extends('admin_panel.layouts.index')

@section('content_header')
<h1>
    Edit an article!
    <small>Optional description</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
</ol>
@endsection

@section('content')

<!-- Your content Here! -->
<form action="{{ url('update', $show_edit->id_article) }}" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $show_edit->title }}">
  </div>
  <div class="form-group">
    <label for="content">Content:</label>
    <textarea class="form-control" rows="15" id="content" name="content">{{ $show_edit->content }}</textarea>
  </div>
  <input type="hidden" id="author" name="author" value="1"</input>
  <button type="submit" class="btn btn-default">Update</button>
</form>

@endsection
