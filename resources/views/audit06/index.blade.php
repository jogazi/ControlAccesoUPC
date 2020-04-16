@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Roles</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($archivos->count())
                    <button type="button" class="btn btn-primary">Create Role</button>
                        <table style="border: solid 1px #000;">
                            <thead>
                            <tr>
                                <th style="width: 200px; border-bottom: solid 1px #000;"> Name </th>
                                <th style="width: 200px; border-bottom: solid 1px #000;"> Description </th>
                                <th style="width: 200px; border-bottom: solid 1px #000;"> Special Permissions </th>
                                <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
                                <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
                                <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($archivos as $item)
                                <tr>
                                    <td style="text-align: center;"> {{ $item->name }} </td>
                                    <td style="text-align: center;"> {{ $item->description }} </td>
                                    <td style="text-align: center;"> {{ $item->special }} </td>
                                    <td style="text-align: center;"> <button type="button" class="btn btn-success">Show</button> </td>
                                    <td style="text-align: center;"> <button type="button" class="btn btn-info">Edit</button> </td>
                                    <td style="text-align: center;"> <button onclick="confirmDelete" type="button" class="btn btn-danger">Delete</button> </td>
                                    hay dos forms de trabajr las funciones de los crud, ya sea por botones como esta este ejemplo y se le coloca el formulario hay mismo 
                                    o tambien puede ser creando un boton con estilos, con un logito y por medio de una etiqueta < a herf > hacer como esta en el app.blade.php
                                      de esa forma se hace con formulario en otra parte, recordar que en los formulario debe ir el @ crfs
                                    
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                        <p> No se encontraron registros </p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
