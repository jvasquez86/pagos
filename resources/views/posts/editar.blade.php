<x-layouts.app title="Crear Blog" meta-description="Formulario para editar blog">
    <h1>Crear nuevo Blog</h1>

    <form method="POST" action="{{ route('blog.actualiza', $resultado) }}">
        @csrf @method('PATCH')
     
        <label for="">
            Titulo <br>
            <input name="titulo" type="text" value="{{ old('titulo', $resultado->title) }}">
            <br>
            @error('titulo')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label><br>
        <label>
            Cuerpo <br>
            <textarea name="cuerpo">{{ old('cuerpo', $resultado->cuerpo) }}</textarea>
        </label>
        <br>
        @error('cuerpo')
            <small style="color: red">{{ $message }}</small>
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>

</x-layouts.app>