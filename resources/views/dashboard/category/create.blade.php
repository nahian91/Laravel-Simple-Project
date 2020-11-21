@extends('dashboard.layouts.common')

@section('title', 'Create Category')
@section('common')
    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" class="form-control btn btn-primary">
        </div>
    </form>
@endsection