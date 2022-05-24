@extends('dashboard.layout.layout')

@section('content')

  <h1>Actualizar posts: {{$post->title}}</h1>

    @include('dashboard.fragment.errores')

    <form action="{{route('post.update',$post->id)}}" method ="post">
    @csrf
    @method("PUT")

    <label>Titulo</label>
    <input type="text" name="title" id="" value="{{$post->title}}">

    <label>Slug</label>
    <input readonly type="text" name="slug" id="" value="{{$post->slug}}">


    <label for="">Categoria<label>
    <select name="category_id">


        <option value =""></option>
        @foreach ($categories as $title => $id )
            <option {{$post->category_id == $id ? 'selected' :''}} value= {{$id}}> {{$title}} </option>
        @endforeach

    </select>


    <label for="">Posteado<label>
    <select name="posted" value="{{$post->posted}}">

        <option  {{$post->posted == "not" ? 'selected' :''}}  value= "Not">No</option>
        <option  {{$post->posted == "yes" ? 'selected' :''}}  value= "Yes">Yes</option>
    </select>
    <label>contenido</label>
    <textarea name="content" >{{$post->content}}</textarea>

    <label>Description</label>
    <textarea name="description">{{$post->description}}</textarea>


        <button type=submit>Enviar</button>
    </form>


@endsection
