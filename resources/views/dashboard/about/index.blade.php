@extends('dashboard.layouts.common')

@section('common')
    <table class="table table-bordered">
        <tr>
            <th>SL</th>
            <th>Sub Title</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @foreach ($about as $about)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$about->sub_title}}</td>
                <td>{{$about->title}}</td>
                <td>{{$about->description}}</td>
                <td><img style="width:100px" src="{{asset($about->image)}}" alt=""></td>
                <td>
                    <a href="" class="btn btn-primary">Edit</a>
                    <form action="{{route('about.destroy', $about->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection