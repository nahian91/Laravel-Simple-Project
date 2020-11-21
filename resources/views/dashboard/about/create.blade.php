@extends('dashboard.layouts.common')

@section('common')
<form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label>Sub Title</label>
            <input type="text" name="sub_title" class="form-control">
        </div>
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="Send" class="form-control">
        </div>
    </form>
@endsection