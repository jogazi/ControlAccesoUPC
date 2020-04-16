@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Compared files number {{ $audit23->idfile }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <table class="table">
                            <tr>
                                <th> File 1 </th> <td> {{ $audit23->route1 }} </td>
                            </tr>
                            <tr>
                                <th> Extension 1 </th> <td> {{ $audit23->extension1 }} </td>
                            </tr>
                            <tr>
                                <th> Size </th> <td> {{ $audit23->size1 }} </td>
                            </tr>
                            <tr>
                                <th> Route 2 </th> <td> {{ $audit23->route2 }} </td>
                            </tr>
                            <tr>
                                <th> Extension 2 </th> <td> {{ $audit23->extension2 }} </td>
                            </tr>
                            <tr>
                                <th> Size 2 </th> <td> {{ $audit23->size2 }} </td>
                            </tr>
                            <tr>
                                <th> diffsize </th> <td> {{ $audit23->diffsize }} </td>
                            </tr>
                            <tr>
                                <th> detdiffsize </th> <td> {{ $audit23->detdiffsize }} </td>
                            </tr>
                            <tr>
                                <th> diffinfo </th> <td> {{ $audit23->diffinfo }} </td>
                            </tr>
                            <tr>
                                <th> detdiffinfo </th> <td> {{ $audit23->detdiffinfo }} </td>
                            </tr>
                        </table>
                    <a class="btn btn-success" href="{{ route('audit23.index') }}"><i class="fas fa-arrow-alt-circle-left"></i> Volver Atrás</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
