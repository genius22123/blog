<div>
  <div class="card">

    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Ingres nombre o correo de un usuario">
    </div>

@if ($users->count())
    
      <div class="card-body">
          <table class="table table-striped">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>contraseña</th>
                      <th>Opciones</th>
                  </tr>
              </thead>

              <tbody>
                  @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td width="10px"><a class="btn btn-success" href="{{route('admin.users.edit',$user)}}">Edit</a></td>
                        </tr>
                  @endforeach
              </tbody>
          </table>
      </div>

      <div class="card footer">
          {{$users->links()}}
      </div>
@else
      <div class="card-body">
          <strong>No hay regustros</strong>
      </div>
      @endif
  </div>
</div>
