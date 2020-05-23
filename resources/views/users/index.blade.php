@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="text-align: center">
                    <h1> User List </h1>
                    </div>
                    <div  style="text-align: center">
                        @can('users.pdf')
                        <a href="{{ route('pdfusers') }}"  class="btn btn-secondary"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        @endcan
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($users->count())
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"> Name </th>
                                    <th scope="col"> Email </th>
                                    <th scope="col"> Status </th>
                                    <th scope="col">  </th>
                                    <th scope="col">  </th>
                                    <th scope="col">  </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $item)
                            <tr>
                                <td> {{ $item->name }} </td>
                                <td> {{ $item->email }} </td>
                                @can('users.destroy')
                                <td>
                                    {!! Form::open(['route' => ['users.state'],'id' => "stateuser$item->id", 
                                    'method' => 'Post']) !!}
                                        <input  type="hidden" name="iduser" value="{{ $item->id }}" />
                                        @if ($item->active==0)
                                            <button type="button" class="btn btn-success delete-confirm" onclick="confirmstate('stateuser{{ $item->id }}')">
                                                <i class="fas fa-check-circle"></i>
                                                Active
                                            </button>
                                            <input  type="hidden" name="opt" value="1" />
                                        @else
                                            <button type="button" class="btn btn-danger delete-confirm" onclick="confirmstate('stateuser{{ $item->id }}')">
                                                <i class="far fa-check-circle"></i>
                                                Desactive
                                            </button>
                                            <input  type="hidden" name="opt" value="0" />
                                        @endif
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                                @can('users.show')
                                <td>
                                    <a class="btn btn-success" href="{{ route('users.show',$item->id) }}"><i class="far fa-eye"></i> Show</a>
                                </td>
                                @endcan
                                @can('users.edit')
                                <td> 
                                    <a class="btn btn-info" href="{{ route('users.edit',$item->id) }}"><i class="far fa-edit"></i> Edit</a>
                                </td>
                                @endcan
                                @can('users.destroy')
                                <td>
                                    {!! Form::open(['route' => ['users.destroy', $item->id],'id' => "deleteuser$item->id", 
                                    'method' => 'DELETE']) !!}
                                        <button type="button" class="btn btn-danger delete-confirm" onclick="confirmDelete('deleteuser{{ $item->id }}')">
                                            <i class="far fa-trash-alt"></i>
                                            Delete
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                            <tbody>
                        </table>
                    {{ $users->render() }}
                    @else
                      <p> No records found </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
