@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de roles</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        {{session('info')}} </div>
@endif
<a class="btn btn-primary" href="{{route('admin.roles.create')}}">Añadir nuevo rol</a>
   <div class="card">
      <div class="card-body">
          <table class="table table-striped">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>ROL</th>
                    <th colspan="2">OPCIONES</th>
                </tr>
              </thead>
              <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td width="10px"><a class="btn btn-primary" href="{{route('admin.roles.edit',$role)}}">Editar</a></td>
                            <td width="10px">
                                <form action="{{route('admin.roles.destroy',$role)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Eliminr</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
              </tbody>
          </table>
      </div>
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop