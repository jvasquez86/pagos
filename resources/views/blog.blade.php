<x-layouts.app title="Blog" meta-description="Blog de pagina">
    <h1>Blog</h1>
    @foreach ($posts as $post)
        <a href="/blog/{{$post->id}}"><h2>{{ $post->title }}</h2></a>
    @endforeach
</x-layouts.app>
