<div class="card">
    {{$search}}
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Ingrese nombre de un post">
    </div>
@if ($posts->count())
       <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->name}}</td>
                        <td with=10px>
                            <a  class="btn btn-primary" href="{{route('admin.posts.edit',$post)}}">editar</a>
                        </td>
                        <td with=10px>
                            <form action="{{route('admin.posts.destroy',$post)}}" method="POST">
                               @csrf
                                @method('delete')

                                <button class="btn btn-danger " type="submit">Elimianr</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <div class="card-footer">
        {{$posts->links()}}
    </div>
    
        
    @else
        <strong>No hay nigun regustro</strong>
  
@endif
 

</div>
