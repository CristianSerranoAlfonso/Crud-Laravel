@extends ("alumno.layout")

@section("opciones")
    <a class="btn btn-danger btn-large btn-block" href="{{route('alumno.index')}}">Cancelar</a>
@endsection
@section("contenido")
    <form class="form-signin" action="{{route('alumno.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>

        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control">
        </div>

        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" name="dni" id="dni" class="form-control">
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono" class="form-control">
        </div>

        <button type="submit" class="btn btn-lg btn-primary btn-block">Guardar</button>
    </form>
@endsection