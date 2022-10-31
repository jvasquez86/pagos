<x-layouts.app title="Blog" meta-description="Blog de pagina">
    <h1>Blog</h1>
    <a href="{{ route('blog.crear') }}">Crear nuevo blog</a>
    @foreach ($posts as $post)
        <div style="display: flex; align-items: baseline">
            <h2>
                <a href="{{ route('blog.detalle', $post->id) }}">
                    <h2>{{ $post->title }}</h2>
                </a>
            </h2>&nbsp;
            <a href="{{ route('blog.editar', $post->id) }}">Editar</a>
            &nbsp;
            <form action="{{ route('blog.eliminar', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </div>
    @endforeach
</x-layouts.app>
