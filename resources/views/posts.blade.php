@extends ('layout')


@section('banner')
    <h1>My Blog</h1>
@endsection

@section('content')

    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                <?= $post->title; ?>

                </a>
                {{ $post->title }}
            </h1>

            <p>
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>

            <div>
                <?= $post->excerpt; ?>
            </div>
        </article>
    @endforeach

@endsection