@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="text-align: center">
                    <h1> Roles List </h1>
                    </div> 
                    <div  style="text-align: center">
                        @can('roles.pdf')
                        <a href="{{ route('pdfroles') }}"  class="btn btn-secondary"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        @endcan
                        @can('roles.create')
                        <a href="{{ route('roles.create') }}" class="btn btn-primary"><i class="far fa-file"></i> New Role</a>
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
                        <table class="table">
                            <tr>
                                <th> Id </th>
                                <th> Name </th>
                                <th> Slug </th>
                                <th> Description </th>
                                <th>  </th>
                                <th>  </th>
                                <th>  </th>
                            </tr>
                            @foreach($roles as $item)
                            <tr>
                                <td> {{ $item->id }} </td>
                                <td> {{ $item->name }} </td>
                                <td> {{ $item->slug }} </td>
                                <td> {{ $item->description }} </td>
                                @can('roles.show')
                                <td>
                                    <a class="btn btn-success" href="{{ route('roles.show',$item->id) }}"><i class="far fa-eye"></i> Show</a>
                                </td>
                                @endcan
                                @can('roles.edit')
                                <td> 
                                    <a class="btn btn-info" href="{{ route('roles.edit',$item->id) }}"><i class="far fa-edit"></i> Edit</a>
                                </td>
                                @endcan
                                @can('roles.destroy')
                                <td>
                                    {!! Form::open(['route' => ['roles.destroy', $item->id],'id' => "deleterole$item->id", 
                                    'method' => 'DELETE']) !!}
                                        <button type="button" class="btn btn-danger delete-confirm" onclick="confirmDelete('deleterole{{ $item->id }}')">
                                            <i class="far fa-trash-alt"></i>
                                            Delete
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
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
