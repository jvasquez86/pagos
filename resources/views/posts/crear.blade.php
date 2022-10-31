<x-layouts.app title="Crear Blog" meta-description="Formulario para creacion de nuevo blog">
    <h1>Crear nuevo Blog</h1>

    <form method="POST" action="{{ route('blog.store') }}">
        @csrf
        @include('posts.form-fields')
        <br>
        <button type="submit">Enviar</button>
    </form>

</x-layouts.app>
