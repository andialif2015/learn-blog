@extends('layouts.app',['title' => 'New Post'])

@section('title','Add Post')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">New Post</div>
                <div class="card-body">
                    <form action="/posts/store" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                            @error('title')
                                <div class="text-danger">

                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <textarea name="body" id="body" class="form-control"></textarea>
                            @error('body')
                                {{ $message }}
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Crate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
