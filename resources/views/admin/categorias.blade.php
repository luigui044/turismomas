@extends('layouts.admin-master')

@section('titulo', 'Categorías')

@section('contenido')
    <article class="container">
        <section class="card my-4">
            <div class="card-body">
                <h1 class="color-verde">Listado de categorías</h1>
            </div>
        </section>

        <section class="card my-4">
            <div class="card-body">
                <form method="POST" action="{{ route('categorias.agregar') }}">
                    @csrf
                    <!-- Campo de selección de categorías -->
                    <div class="form-group">
                        <label for="categoria" class="color-verde">Categoría:</label>
                        <input type="text" class="form-control @error('categoria') is-invalid @enderror" name="categoria" id="categoria" autofocus>
                        <div class="invalid-feedback">
                            @error('categoria')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <!-- Botón de enviar -->
                    <button type="submit" class="btn btn-primary btn-sm">
                        Agregar categoría
                    </button>
                </form>
            </div>
        </section>

        <section class="card my-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead class="bg-verde white-text">
                            <tr>
                                <th scope="col">Categoría</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categorias as $categoria)
                                <tr>
                                    <input type="hidden" value="{{ $categoria }}">
                                    <td>{{ $categoria->nombre }}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-primary">
                                            Editar
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-danger">
                                            Eliminar
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">
                                        <div class="alert alert-danger">
                                            Sin datos que mostrar
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </article>
@endsection
