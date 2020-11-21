@extends('dashboard.layouts.common')

@section('title', 'Create Portfolio')
@section('common')
    <form action="{{route('portfolio.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>Small Image</label>
            <input type="file" name="small_image" class="form-control">
        </div>
        <div class="form-group">
            <label>Big Image</label>
            <input type="file" name="big_image" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category" id="" class="form-control">
                <option value="" selected style="display:none">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Clients</label>
            <select name="clients" id="" class="form-control">
                <option value="" selected style="display:none">Select Client</option>
                @foreach ($clients as $client)
                    <option value="{{$client->id}}">{{$client->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" class="form-control btn btn-primary">
        </div>
    </form>
@endsection