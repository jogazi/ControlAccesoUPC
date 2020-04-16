@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="text-align: center">
                    <h1> Compared Files List </h1>
                    </div>
                    <div  style="text-align: center">
                        <a href="{{ route('pdffiles') }}"  class="btn btn-secondary"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        <a href="{{ route('comparacion') }}" class="btn btn-primary"><i class="fas fa-file-csv"></i> New Comparison</a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($audit23->count())
                        <table class="table">
                            <tr>
                                <th> id </th>
                                <th> File 1 </th>
                                <th> Size 1 </th>
                                <th> File 2 </th>
                                <th> Size2 </th>
                                <th>  </th>
                                <th>  </th>
                                <th>  </th>
                            </tr>
                            @foreach($audit23 as $item)
                            <tr>
                                <td> {{ $item->idfile }} </td>
                                <td> {{ $item->route1 }} </td>
                                <td> {{ $item->size1 }} </td>
                                <td> {{ $item->route2 }} </td>
                                <td> {{ $item->size2 }} </td>
                                @can('audit23.show')
                                <td>
                                    <a class="btn btn-success" href="{{ route('audit23.show',$item->idfile) }}"><i class="far fa-eye"></i> Show</a>
                                </td>
                                @endcan
                                @can('audit23.edit')
                                <td> 
                                    <button type="button" class="btn btn-info"><i class="far fa-edit"></i> Edit</button>
                                </td>
                                @endcan
                                @can('audit23.destroy')
                                <td>
                                    {!! Form::open(['route' => ['audit23.destroy', $item->idfile],'id' => "deletefile$item->idfile", 
                                    'method' => 'DELETE']) !!}
                                        <button type="button" class="btn btn-danger delete-confirm" onclick="confirmDelete('deletefile{{ $item->idfile }}')">
                                            <i class="far fa-trash-alt"></i>
                                            Delete
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </table>
                    {{ $audit23->render() }}
                    @else
                      <p> No records found </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection