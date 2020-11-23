@extends('dashboard.layouts.common')

@section('title', 'All Services')
@section('common')
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($services as $service)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$service->title}}</td>
            <td><img style="width:100px" src="{{asset($service->image)}}" alt=""></td>
            <td>{{$service->description}}</td>
            <td>
                <a href="{{route('services.edit', $service->id)}}" class="btn btn-info">Edit</a>
                <form action="{{route('services.destroy', $service->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </td>
        </tr>
                
        @endforeach
    </table>
@endsection