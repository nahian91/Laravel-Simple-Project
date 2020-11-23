@extends('dashboard.layouts.common')

@section('title', 'Top')
@section('common')
<form action="{{route('top.update')}}" method="POST" enctype="multipart/form-data">
    @csrf    
    @method('PUT')
    <div class="form-group">
        <label>Sub Title</label>
        <input type="text" class="form-control" name="sub_title" value="@if ($top->sub_title)
        {{$top->sub_title}}
        @endif">
    </div>
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" value="{{$top->title}}">
    </div>
    <div class="form-group">
        <label>Image</label>
        <img style="width:80px" src="{{asset($top->image)}}" alt="">
        <input type="file" class="form-control" name="image">
    </div>
    <div class="form-group">
        <label>Link</label>
        <input type="text" class="form-control" name="link" value="{{$top->link}}">
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="form-group">
    </div>
</form>
@endsection