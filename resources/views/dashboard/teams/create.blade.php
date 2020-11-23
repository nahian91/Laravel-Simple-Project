@extends('dashboard.layouts.common')

@section('title', 'Add Team')
@section('common')
    <h4 class="title">Add Team</h4>
<form action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>Designation</label>
            <input type="text" name="designation" class="form-control">
        </div>
        <div class="form-group">
            <label>Twitter Link</label>
            <input type="text" name="tw_link" class="form-control">
        </div>
        <div class="form-group">
            <label>Facebook Link</label>
            <input type="text" name="fb_link" class="form-control">
        </div>
        <div class="form-group">
            <label>Linkedin Link</label>
            <input type="text" name="ln_link" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="Add" class="form-control">
        </div>
    </form>
@endsection