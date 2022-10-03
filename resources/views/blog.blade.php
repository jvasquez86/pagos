<x-layouts.app title="Blog" meta-description="Blog de pagina">
    <h1>Blog</h1>
    <a href="{{ route('blog.crear') }}">Crear nuevo blog</a>
    @foreach ($posts as $post)
        <a href="{{ route('blog.detalle', $post->id)  }}"><h2>{{ $post->title }}</h2></a>
    @endforeach
</x-layouts.app>
