@extends('dashboard.layouts.common')

@section('title', 'Top')
@section('common')
<table class="table table-bordered">
    <tr>
        <th>Sub Title</th>
        <th>Title</th>
        <th>Image</th>
        <th>Link</th>
        <th>Action</th>
    </tr>
    <tr>
    <td>{{$top[0]->sub_title}}</td>
        <td>{{$top[0]->title}}</td>
    <td><img style="width:100px" src="{{asset($top[0]->image)}}" alt=""></td>
        <td>{{$top[0]->link}}</td>
        <td>
            <a href="{{route('top.edit', $top[0]->id)}}" class="btn btn-info">Edit</a>
        </td>
    </tr>
            
</table>
@endsection