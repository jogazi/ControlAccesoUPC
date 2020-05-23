@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="text-align: center">
                    <h1> Movies List </h1>
                    </div> 
                    <div  style="text-align: center">
                        @can('audit12.pdf')
                        <a href="{{ route('pdfmovies') }}"  class="btn btn-secondary"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        @endcan
                        @can('audit12.create')
                        <a href="{{ route('audit12.create') }}" class="btn btn-primary"><i class="far fa-file"></i> New Movie</a>
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
                                <th scope="col"> Name </th>
                                <th scope="col"> Duration </th>
                                <th scope="col"> Premiere </th>
                                <th scope="col">  </th>
                                <th scope="col">  </th>
                                <th scope="col">  </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $item)
                            <tr>
                                <td> {{ $item->idfilms }} </td>
                                <td> {{ $item->name }} </td>
                                <td> {{ $item->duration }} </td>
                                <td> {{ $item->premiere }} </td>
                                @can('audit12.show')
                                <td>
                                    <a class="btn btn-success" href="{{ route('audit12.show',$item->idfilms) }}"><i class="far fa-eye"></i> Show</a>
                                </td>
                                @endcan
                                @can('audit12.edit')
                                <td> 
                                    <a class="btn btn-info" href="{{ route('audit12.edit',$item->idfilms) }}"><i class="far fa-edit"></i> Edit</a>
                                </td>
                                @endcan
                                @can('audit12.destroy')
                                <td>
                                    {!! Form::open(['route' => ['audit12.destroy', $item->idfilms],'id' => "deleteactor$item->idfilms", 
                                    'method' => 'DELETE']) !!}
                                        <button type="button" class="btn btn-danger delete-confirm" onclick="confirmDelete('deleteactor{{ $item->idfilms }}')">
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
