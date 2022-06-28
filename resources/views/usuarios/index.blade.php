@extends('layouts.app')
@section('content')
<div class="container">



@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
<strong>Success!</strong>
{{Session::get('mensaje')}}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif        



<a href="{{url('usuarios/create')}}" class="btn btn-success"> Crear Nuevo Registro </a>
<br>
<br>

<table class="table table-light">

<thead class="thead-light">
        <tr>
            <th>#</th>
            <th>TipoDoc</th>
            <th>NumDoc</th>
            <th>PrimerNom</th>
            <th>SegundoNom</th>
            <th>PrimerApe</th>
            <th>SegundoApe</th>
            <th>Direccion_Residencia</th>
            <th>Telefono</th>
            <th>Genero</th>
            <th>Fecha_Naci</th>
            <th>Estado_Civil</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($users as $usuarios)
        <tr>
            <td>{{$usuarios -> id}}</td>
            <td>{{$usuarios -> TipoDoc}}</td>
            <td>{{$usuarios -> NumDoc}}</td>
            <td>{{$usuarios -> PrimerNom}}</td>
            <td>{{$usuarios -> SegundoNom}}</td>
            <td>{{$usuarios -> PrimerApe}}</td>
            <td>{{$usuarios -> SegundoApe}}</td>
            <td>{{$usuarios -> Direccion_Residencia}}</td>
            <td>{{$usuarios -> Telefono}}</td>
            <td>{{$usuarios -> Genero}}</td>
            <td>{{$usuarios -> Fecha_Naci}}</td>
            <td>{{$usuarios -> Estado_Civil}}</td>
            <td> 
            
            
            <a href="{{url('/usuarios/'.$usuarios->id.'/edit')}}" class="btn btn-primary"> Editar </a> 

                <form action= "{{url('/usuarios/'.$usuarios->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class = "btn btn-danger" type="submit" onclick="return confirm ('¿Estas seguro que deseas borrar este registro?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection