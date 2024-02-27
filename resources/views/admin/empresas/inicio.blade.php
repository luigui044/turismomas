@extends('layouts.admin-master')

@section('titulo', 'Empresas')

@section('contenido')
    <article class="container">
        <section class="card my-4">
            <div class="card-body">
                <h1 class="color-verde">Empresas registradas</h1>
            </div>
        </section>

        <section class="card my-4">
            <div class="card-body">
               <a href="" class="btn btn-primary">
                    Registrar nueva empresa
               </a>
            </div>
        </section>

        <section class="card my-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead class="bg-verde white-text">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                               <td>Empresa 1</td>
                               <td>23232323</td>
                               <td>email1@email.com</td>
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
                            <tr>
                                <td>Empresa 2</td>
                                <td>24232322</td>
                                <td>email2@email.com</td>
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
                             <tr>
                                <td>Empresa 3</td>
                                <td>23989782</td>
                                <td>email3@email.com</td>
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
                            
                            {{-- @forelse ($categorias as $categoria)
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
                            @endforelse --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </article>
@endsection
