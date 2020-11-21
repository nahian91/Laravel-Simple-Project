@extends('dashboard.layouts.common')

@section('title', 'Edit Service')
@section('common')
    <form action="{{route('services.update', $service->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" value="{{$service->title}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Image</label>
            <img style="width:100px" src="{{asset($service->image)}}" alt="">
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control">{{$service->description}}</textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" class="form-control">
        </div>
    </form>
@endsection