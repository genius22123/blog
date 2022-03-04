<div class="form-group">
    {!! Form::label('name', 'Nombre' ) !!}
    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingres nombre']) !!}
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug' ) !!}
    {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingres Slug','readonly']) !!}
    @error('slug')
    <small class="text-danger">{{$message}}</small>
@enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoria: ') !!}
    {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
    @error('category_id')
    <small class="text-danger">{{$message}}</small>
@enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas: </p>

    @foreach ($tags as $tag)
        <label class="mr-2" >
            {!! Form::checkbox('tags[]', $tag->id,null) !!}
            {{$tag->name}}
        </label>
    @endforeach

    @error('tags')
    <br>
    <small class="text-danger">{{$message}}</small>
@enderror
<hr>
</div>

<div class="form-group ">
    <p class="font-weight-bold">estado: </p>

    <label >
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>

    
    <label >
        {!! Form::radio('status', 2, false) !!}
        publicado
    </label>
 
    @error('status')
    <br>
    <small class="text-danger">{{$message}}</small>
@enderror
<hr>
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
                @isset ($post->image)
                <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
                @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2016/07/07/16/46/dice-1502706_960_720.jpg" alt="">
                @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'IMAGEN  que se mostarrtaen el post') !!}
            {!! Form::file('file', ['class'=>'form-control-file','accept'=>'image/*']) !!}
            @error('file')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
   
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, omnis iste? Ipsam error repellat nemo alias aperiam doloremque sequi praesentium eveniet, omnis vitae ullam voluptatibus illum labore quidem fugit mollitia!
    </div>
</div>


<div class="form-group">
    {!! Form::label('extract', 'Extracto') !!}
    {!! Form::textarea('extract', null, ['class'=>'form-control','placeholder'=>'Ingres Extracto']) !!}
    @error('extract')
    <small class="text-danger">{{$message}}</small>
@enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Extracto') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control','placeholder'=>'Ingres el cueroi']) !!}
    @error('body')
    <small class="text-danger">{{$message}}</small>
@enderror
</div>