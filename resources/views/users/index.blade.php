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
                        <table class="table">
                            <tr>
                                <th> Name </th>
                                <th> Email </th>
                                <th>  </th>
                                <th>  </th>
                                <th>  </th>
                            </tr>
                            @foreach($users as $item)
                            <tr>
                                <td> {{ $item->name }} </td>
                                <td> {{ $item->email }} </td>
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
