@extends('admin_panel.layouts.index')

@section('content_header')
<h1>
    List user!
    <small>Optional description</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
</ol>
@endsection

@section('content')

<div class="section">
  <table class="table table-hover">
    <thead>
      <td>No</td>
      <td>User</td>
      <td>Email</td>
      <td>Level</td>
      <td>Action</td>
    </thead>
    <tbody>
      @foreach($datas as $data)
        <td>{{ $data->id_user }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->level }}</td>
        <td>
            <a href="{{ url('#', $data->id_user) }}" class="btn btn-warning" role="button">Edit</a>
            <a href="{{ url('#', $data->id_user) }}" class="btn btn-danger" role="button">Delete</a>
        </td>
    </tbody>
    @endforeach
  </table>
  <center>
    {{ $datas->render() }}
  </center>
</div>

@endsection
