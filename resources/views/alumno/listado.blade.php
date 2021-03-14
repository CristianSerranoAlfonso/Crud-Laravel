@extends ("alumno.layout")

@section("opciones")
    <a class="btn btn-primary btn-large btn-block" href="{{route('alumno.create')}}">Agregar</a>
@endsection
@section("contenido")
    <table class="table text-center table-striped text-white">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Teléfono</th>
                <th scope="col">DNI</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{$alumno->nombre}}</td>
                    <td>{{$alumno->direccion}}</td>
                    <td>{{$alumno->telefono}}</td>
                    <td>{{$alumno->dni}}</td>
                    <td><a href="{{route('alumno.edit', $alumno)}}"><i class="fas fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('alumno.destroy', $alumno)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button class="btn btn-primary"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection