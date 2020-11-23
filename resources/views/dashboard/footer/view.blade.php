@extends('dashboard.layouts.common')

@section('title', 'Footer')
@section('common')
<form action="{{route('footer.update')}}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label>Copyright</label>
        <input type="text" class="form-control" name="copyright" value="{{$footer->copyright}}">
        </div>
        <div class="form-group">
            <label>Twitter Link</label>
            <input type="text" class="form-control" name="tw_link" value="{{$footer->tw_link}}">
        </div>
        <div class="form-group">
            <label>Facebook Link</label>
            <input type="text" class="form-control" name="fb_link" value="{{$footer->fb_link}}">
        </div>
        <div class="form-group">
            <label>Linkedin Link</label>
            <input type="text" class="form-control" name="ln_link" value="{{$footer->ln_link}}">
        </div>
        <div class="form-group">
            <input type="submit" value="Save" class="form-control btn btn-primary">
        </div>
    </form>
@endsection