@extends('dashboard.layouts.common')

@section('title', 'Team Members')

@section('common')
    <h4 class="title">All Team Members</h4>
    <table class="table table-bordered">
        <tr>
            <th>Sl</th>
            <th>Image</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Twitter Link</th>
            <th>Facebook Link</th>
            <th>Linkedin Link</th>
            <th>Action</th>
        </tr>
        @foreach ($teams as $team)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td><img style="width:80px" src="{{asset($team->image)}}" alt=""></td>
                <td>{{$team->title}}</td>
                <td>{{$team->designation}}</td>
                <td>{{$team->tw_link}}</td>
                <td>{{$team->fb_link}}</td>
                <td>{{$team->ln_link}}</td>
                <td>
                    <a class="btn btn-info" href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection