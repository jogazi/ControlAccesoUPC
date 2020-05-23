@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="text-align: center">
                      <h1> Historical log </h1>
                    </div>
                    <div  style="text-align: center">
                      @can('audit07.pdf')
                        <a href="{{ route('pdfaudit') }}"  class="btn btn-secondary"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                      @endcan
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($permission->count())
                        <table class="table table-hover">
                          <thead>
                              <tr>
                                  <th scope="col"> Id </th>
                                  <th scope="col"> Method </th>
                                  <th scope="col"> Date Time </th>
                                  <th scope="col"> User </th>
                                  <th scope="col"> Role </th>
                                  <th scope="col"> Data </th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($permission as $item)
                                <tr>
                                  <td> {{ $item->id_sys }} </td>
                                  <td > 
                                    @if ($item->sys_act=="C")
                                      Create
                                    @endif
                                    @if ($item->sys_act=="R")
                                      Read
                                    @endif
                                    @if ($item->sys_act=="U")
                                      Update
                                    @endif
                                    @if ($item->sys_act=="D")
                                      Delete
                                    @endif
                                    @if ($item->sys_act=="L")
                                      Login
                                    @endif
                                  </td>
                                  <td > {{ $item->sys_date }} </td>
                                  <td > {{ $item->user->name }} </td>
                                  <td > 
                                    @foreach($item->user->roles as $item2)
                                    {{ $item2->name }} 
                                    @endforeach
                                  </td>
                                  <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModal{{ $item->id_sys }}">
                                        <i class="fas fa-book-reader"></i>
                                        See data
                                    </button>

                                        <!-- Modal -->
  <div class="modal fade" id="myModal{{ $item->id_sys }}" role="dialog">
    <div class="modal-dialog" role="document">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Data content</h4>
        </div>
        <div class="modal-body">
          <div class="table-responsive"> 
            <table class="table">
                <tr>
                  <th> Controller </th>
                  <td> {{ $item->audit08->dsyscontroller }}    </td>
                </tr>
                <tr>
                  <th> Action </th>
                  <td> {{ $item->audit08->dsysmethod }}    </td>
                </tr>
                <tr>
                  <th>  Ip user </th>
                  <td> {{ $item->audit08->dsysip }}    </td>
                </tr> 
            </table>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">
              <i class="fas fa-times"></i>
              Close
            </button>
        </div>
      </div>
      
    </div>
  </div>
                                  </td>
                                </tr>
                            @endforeach
                              </tbody>
                        </table>
                        {{ $permission->render() }}
                        @else
                        <p> No records found </p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>


@endsection