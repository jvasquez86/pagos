<x-layouts.app title="Crear Blog" meta-description="Formulario para creacion de nuevo blog">
    <h1>Crear nuevo Blog</h1>

    <form method="POST" action="{{ route('blog.store') }}">
        @csrf
        <label for="">
            Titulo <br>
            <input name="titulo" type="text">
        </label><br>
        <label>
            Cuerpo <br>
            <textarea></textarea>
        </label><br>
        <button name="cuerpo" type="submit">Enviar</button>
    </form>

</x-layouts.app>
