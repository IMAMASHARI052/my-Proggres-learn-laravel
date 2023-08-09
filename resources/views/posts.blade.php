@extends('layouts.main')

@section('container')
    <h1>Article</h1>


    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">

            <h2>
                <a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }} </a>
            </h2>
            <p>Write by : <a href="/authors/{{ $post->user->id }}"  class="text-decoration-none"> {{ $post->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">
                    {{ $post->category->name }}</a>
            </p>


            <p> {{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>

        </article>
    @endforeach
@endsection
