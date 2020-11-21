@extends('dashboard.layouts.common')

@section('title', 'All Portfolios')
@section('common')
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Small Image</th>
            <th>Big Image</th>
            <th>Description</th>
            <th>Category</th>
            <th>Client</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        @foreach ($portfolios as $portfolio)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$portfolio->title}}</td>
            <td><img style="width:100px" src="{{asset($portfolio->small_image)}}" alt=""></td>
            <td><img style="width:100px" src="{{asset($portfolio->big_image)}}" alt=""></td>
            <td>{{$portfolio->description}}</td>
            <td>{{$portfolio->category->title}}</td>
            <td>{{$portfolio->clients->title}}</td>
            <td>{{$portfolio->created_at->format('F j, Y')}}</td>
            <td>
                <a href="{{route('portfolio.show', $portfolio->id)}}" class="btn btn-primary">View</a>
                <a href="{{route('portfolio.edit', $portfolio->id)}}" class="btn btn-info">Edit</a>
                <form action="{{route('portfolio.destroy', $portfolio->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </td>
        </tr>
                
        @endforeach
    </table>
@endsection