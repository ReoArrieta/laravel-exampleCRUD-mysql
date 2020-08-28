@extends('layouts.app')
@section('content')
<style>
    div .btn{
        margin-right: 1.5%;
    }
</style>
<section class="container">
    <div class="row">
        <article class="col-md-12">
            <form action="{{url('movie/show')}}" method="get" novalidate>
                @csrf
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                    <a href="{{route('movie.index')}}" class="btn btn-primary">Todo</a>
                    <a href="{{route('movie.create')}}" class="btn btn-primary">Crear</a>
                </div>
            </form>
        </article>

        <article class="col-md-12">
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($movies as $movie)
                    <tr>
                        <td>{{$movie->id}}</td>
                        <td>{{$movie->name}}</td>
                        <td>{{$movie->description}}</td>
                        <td>
                            <a href="{{ url('movie/' . $movie->id . '/edit')}}" class="btn btn-primary btn-xs">✎ Editar</a>
                        </td>
                        <td>
                            <form action="{{url('movie/' . $movie->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" class="btn btn-danger" value="🗑 Eliminar">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </article>
    </div>
</section>
@endsection