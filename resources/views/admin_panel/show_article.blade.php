@extends('admin_panel.layouts.index')

@section('content_header')
<h1>
    {{ $show->title }}
    <small>Optional description</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
</ol>
@endsection

@section('content')

<!-- Your content Here! -->
<p>{!! $show->content !!}</p>

@endsection
