@extends('layouts.app', ['title' => 'Posts'])

@section('content')

    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <h4>All Posts</h4>
                <hr>
            </div>
            <div>
                <a href="/posts/create" class="btn btn-primary"> New Post </a>
            </div>
        </div>

        <div class="row">

            @if ($posts->count())

                @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">

                                {{ $post->title }}

                            </div>
                            <div class="card-body">
                                <div>
                                    {{ Str::limit($post->body, 100,'') }}
                                </div>

                                <a href="posts/{{ $post->slug }}">Read more</a>

                            </div>
                            <div class="card-footer">
                                published on {{ $post->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                @endforeach

            @else

                <div class="alert alert-info">

                    There are no posts.

                </div>

            @endif




        </div>
        <div class="d-flex justify-content-center">
            <div>
            {{ $posts->links() }}
            </div>
        </div>

    </div>
@endsection
