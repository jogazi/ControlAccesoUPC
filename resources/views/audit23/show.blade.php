@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="text-align: center">
                    <h1> Compared files number {{ $audit23->idfile }} </h1>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <table class="table">
                            <tr>
                                <th> File 1 </th> 
                                <td> {{ $audit23->route1 }} 
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModal">
                                        <i class="fas fa-book-reader"></i>
                                        See data
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th> Extension 1 </th> 
                                <td> 
                                    @if($audit23->extension1=="T")
                                    txt
                                    @else
                                    csv
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th> Size </th> <td> {{ $audit23->size1 }} </td>
                            </tr>
                            <tr>
                                <th> File 2 </th> <td> {{ $audit23->route2 }}
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModal2">
                                        <i class="fas fa-book-reader"></i>
                                        See data
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th> Extension 2 </th> 
                                <td> 
                                    @if($audit23->extension1=="T")
                                    txt
                                    @else
                                    csv
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th> Size 2 </th> <td> {{ $audit23->size2 }} </td>
                            </tr>
                            <tr>
                                <th> Size difference </th> 
                                <td> 
                                    @if($audit23->diffsize=="N")
                                    No
                                    @else
                                    Yes
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th> Size difference detail </th> <td> {{ $audit23->detdiffsize }} </td>
                            </tr>
                            <tr>
                                <th> Information difference </th> 
                                <td> 
                                    @if($audit23->diffinfo=="N")
                                    No
                                    @else
                                    Yes
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th> Information difference detail </th> <td> {{ $audit23->detdiffinfo }} </td>
                            </tr>
                        </table>
                    <a class="btn btn-success" href="{{ route('audit23.index') }}"><i class="fas fa-arrow-alt-circle-left"></i> Go back</a>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="text-center">
          <h4 class="modal-title">File content</h4>
        </div>
        <div class="modal-body"> 
            <table class="table">
                <tr>
                    
                </tr>
                @foreach($audit23->audit24 as $item)
                <tr>
                    <td> {{ $item->codigo }}    </td>
                    <td> {{ $item->nombre }}    </td>
                    <td> {{ $item->nofactura }} </td>
                    <td> {{ $item->valor }}     </td>
                    <td> {{ $item->concepto }}  </td>
                </tr>
                @endforeach
            </table>
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



    <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="text-center">
          <h4 class="modal-title">File content</h4>
        </div>
        <div class="modal-body"> 
            <table class="table">
                <tr>
                   
                </tr>
                @foreach($audit23->audit25 as $item)
                <tr>
                    <td> {{ $item->codigo }}    </td>
                    <td> {{ $item->nombre }}    </td>
                    <td> {{ $item->nofactura }} </td>
                    <td> {{ $item->valor }}     </td>
                    <td> {{ $item->concepto }}  </td>
                </tr>
                @endforeach
            </table>
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
@endsection
