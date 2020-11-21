@extends('dashboard.layouts.common')

@section('title', 'Top')
@section('common')
<form action="{{route('top.store')}}" method="POST" enctype="multipart/form-data">
    @csrf    <div class="form-group">
        <label>Sub Title</label>
        <input type="text" class="form-group" name="sub_title">
    </div>
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-group" name="title">
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-group" name="image">
    </div>
    <div class="form-group">
        <label>Link</label>
        <input type="text" class="form-group" name="link">
    </div>
    <div class="form-group">
        <input type="submit" value="Send" class="form-group">
    </div>
</form>
@endsection