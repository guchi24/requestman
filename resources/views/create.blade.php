@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <h2>Insert item</h2>
        <form action="/request" method="post">
            @csrf
            <div class="form-group">
                <label for="text">Text</label>
                <input type="text" class="form-control" name="text" id="text" placeholder="Enter text" value="{{ old('text') }}">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <input type="text" class="form-control" name="body" id="body" placeholder="Enter body" value="{{ old('body') }}">
            </div>
            <br>
            <button type="submit" name="button" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection