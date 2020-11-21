@extends('dashboard.layouts.common')

@section('title', 'Edit Settings')   
@section('common')
<form action="{{route('settings.update', $settings->id)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label>Site Title</label>
        <input type="text" class="form-control" name="site_title" value="{{$settings->site_title}}">
        </div>
        <div class="form-group">
            <label>Site Description</label>
            <input type="text" class="form-control" name="site_description" value="{{$settings->site_description}}">
        </div>
        <div class="form-group">
            <label>Services Title</label>
            <input type="text" class="form-control" name="services_title" value="{{$settings->services_title}}">
        </div>
        <div class="form-group">
            <label>Services Description</label>
            <input type="text" class="form-control" name="services_description" value="{{$settings->services_description}}">
        </div>
        <div class="form-group">
            <label>Portfolio Title</label>
            <input type="text" class="form-control" name="portfolio_title" value="{{$settings->portfolio_title}}">
        </div>
        <div class="form-group">
            <label>Portfolio Description</label>
            <input type="text" class="form-control" name="portfolio_description" value="{{$settings->portfolio_description}}">
        </div>
        <div class="form-group">
            <label>About Title</label>
            <input type="text" class="form-control" name="about_title" value="{{$settings->about_title}}">
        </div>
        <div class="form-group">
            <label>About Description</label>
            <input type="text" class="form-control" name="about_description" value="{{$settings->about_description}}">
        </div>
        <div class="form-group">
            <label>Team Title</label>
            <input type="text" class="form-control" name="team_title" value="{{$settings->team_title}}">
        </div>
        <div class="form-group">
            <label>Team Description</label>
            <input type="text" class="form-control" name="team_description" value="{{$settings->team_description}}">
        </div>

        <div class="form-group">
            <label>Contact Title</label>
            <input type="text" class="form-control" name="contact_title" value="{{$settings->contact_title}}">
        </div>
        <div class="form-group">
            <label>Contact Description</label>
            <input type="text" class="form-control" name="contact_description" value="{{$settings->contact_description}}">
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-primary form-control">
        </div>
    </form>
@endsection