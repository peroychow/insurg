@extends('admin_panel.layouts.index')
@section('content')

<div class="section">
  @foreach($datas as $data)
  <div class="row">
    <div class=col-sm-4><a href="#" class=""><img src="http://placehold.it/1280X720" class="img-responsive"></a></div>
    <div class="col-sm-8">
      <h3 class="title"><a href="{{ url('/read', $data->id_article) }}">{{ $data->title }}</a></h3>
      <p class="text-muted"><span class="glyphicon glyphicon-lock"></span> {{ $data->created_at }}</p>
      <p>{!!substr($data->content,0,100)!!}...</p>
      <p>
        <a href="{{ url('/edit', $data->id_article) }}" class="btn btn-warning" role="button">Edit</a>
        <a href="{{ url('/delete', $data->id_article) }}" class="btn btn-danger" role="button">Delete</a>
      </p>
    </div>
  </div>
  <hr>
  @endforeach

<!--For pagination-->
<center>
  {{ $datas->render() }}
</center>
</div>
@endsection
