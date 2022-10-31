<label for="">
    Titulo <br>
    <input name="title" type="text" value="{{ old('title', $resultado->title) }}">
    <br>
    @error('title')
        <small style="color: red">{{ $message }}</small>
    @enderror
</label><br>
<label>
    Cuerpo <br>
    <textarea name="cuerpo">{{ old('cuerpo', $resultado->cuerpo) }}</textarea>
    <br>
    @error('cuerpo')
        <small style="color: red">{{ $message }}</small>
    @enderror
</label>
