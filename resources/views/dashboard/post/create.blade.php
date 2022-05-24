    @extends('dashboard.layout.layout')

    @section('content')

    <h1>Crear post</h1>

        @include('dashboard.fragment.errores')

        <form action="{{route('post.store')}}" method ="post">
        @csrf
        <label>Titulo</label>
        <input type="text" name="title" value="{{old("title",$post->title)}}" id="">

        <label>Slug</label>
        <input type="text" name="slug" value="{{old("slug","")}}"id="">


        <label for="">Categoria<label>
        <select name="category_id">
            <option value =""></option>
            @foreach ($categories as $title => $id )
                <option {{old("category_id","") == $id ? "selected": ""}} value={{$id}}> {{$title}} </option>
            @endforeach

        </select>


        <label for="">Posteado<label>
        <select name="posted">

            <option {{old("posted") == "not"? "selected":""}} value="yes">si</option>
            <option {{old("posted") == "yes"? "selected":""}}value="not">no</option>


        </select>
        <label>contenido</label>
        <textarea name="content"> {{old("content","")}}</textarea>

        <label>Description</label>
        <textarea name="description">{{old("description","")}}</textarea>


            <button type=submit>Enviar</button>
        </form>


    @endsection
