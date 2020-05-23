@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="text-align: center">
                    <h1> Actors List </h1>
                    </div> 
                    <div  style="text-align: center">
                        @can('audit09.pdf')
                        <a href="{{ route('pdfactors') }}"  class="btn btn-secondary"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        @endcan
                        @can('audit09.create')
                        <a href="{{ route('audit09.create') }}" class="btn btn-primary"><i class="far fa-file"></i> New Actor</a>
                        @endcan
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($roles->count())
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col"> Id </th>
                                <th scope="col"> Surname </th>
                                <th scope="col"> Name </th>
                                <th scope="col">  </th>
                                <th scope="col">  </th>
                                <th scope="col">  </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $item)
                            <tr>
                                <td> {{ $item->idactors }} </td>
                                <td> {{ $item->surname }} </td>
                                <td> {{ $item->name }} </td>
                                @can('roles.show')
                                <td>
                                    <a class="btn btn-success" href="{{ route('audit09.show',$item->idactors) }}"><i class="far fa-eye"></i> Show</a>
                                </td>
                                @endcan
                                @can('roles.edit')
                                <td> 
                                    <a class="btn btn-info" href="{{ route('audit09.edit',$item->idactors) }}"><i class="far fa-edit"></i> Edit</a>
                                </td>
                                @endcan
                                @can('roles.destroy')
                                <td>
                                    {!! Form::open(['route' => ['audit09.destroy', $item->idactors],'id' => "deleteactor$item->idactors", 
                                    'method' => 'DELETE']) !!}
                                        <button type="button" class="btn btn-danger delete-confirm" onclick="confirmDelete('deleteactor{{ $item->idactors }}')">
                                            <i class="far fa-trash-alt"></i>
                                            Delete
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    {{ $roles->render() }}
                    @else
                      <p> No records found </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
