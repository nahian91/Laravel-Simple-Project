@extends('dashboard.layouts.common')

@section('title', 'Create Service')
@section('common')
    <form action="{{route('services.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" class="form-control">
        </div>
    </form>
@endsection