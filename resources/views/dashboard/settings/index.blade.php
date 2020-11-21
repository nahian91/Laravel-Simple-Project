@extends('dashboard.layouts.common')

@section('common')
<a href="{{route('settings.edit', $settings[0]->id)}}" class="btn btn-primary">Edit</a>
<br><br>
    <h4>Site Settings</h4>
    <table class="table table-bordered">
        <tr>
            <th>Name</td>
            <td>{{$settings[0]->site_title}}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{$settings[0]->site_description}}</td>
        </tr>
    </table>
    <br>
    <br>
    <h4 class="title">Section Settings</h4>
    <table class="table table-bordered">
        <tr>
            <th>Section Type</th>
            <th>Section Title</th>
            <th>Section Description</th>
        </tr>
        <tr>
            <td>Services</td>
            <td>{{$settings[0]->services_title}}</td>
            <td>{{$settings[0]->services_description}}</td>
        </tr>
        <tr>
            <td>Portfolio</td>
            <td>{{$settings[0]->portfolio_title}}</td>
            <td>{{$settings[0]->portfolio_description}}</td>
        </tr>
        <tr>
            <td>About</td>
            <td>{{$settings[0]->about_title}}</td>
            <td>{{$settings[0]->about_description}}</td>
        </tr>
        <tr>
            <td>Team</td>
            <td>{{$settings[0]->team_title}}</td>
            <td>{{$settings[0]->team_description}}</td>
        </tr>
        <tr>
            <td>Contact</td>
            <td>{{$settings[0]->contact_title}}</td>
            <td>{{$settings[0]->contact_description}}</td>
        </tr>
    </table>
@endsection