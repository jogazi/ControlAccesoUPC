@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($archivos->count())
                        <table style="border: solid 1px #000;">
                            <thead>
                            <tr>
                                <th style="width: 200px; border-bottom: solid 1px #000;"> ruta 1 </th>
                                <th style="width: 200px; border-bottom: solid 1px #000;"> extension1 </th>
                                <th style="width: 50px; border-bottom: solid 1px #000;"> size </th>
                                <th style="width: 200px; border-bottom: solid 1px #000;"> ruta 2 </th>
                                <th style="width: 200px; border-bottom: solid 1px #000;"> extension2 </th>
                                <th style="width: 50px; border-bottom: solid 1px #000;"> size2 </th>
                                <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
                                <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
                                <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($archivos as $item)
                                <tr>
                                    <td style="text-align: center;"> {{ $item->name }} </td>
                                    <td style="text-align: center;"> {{ $item->slug }} </td>

                                    <td style="text-align: center;"> <div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div> </td>
                                    <td style="text-align: center;"> Editar </td>
                                    <td style="text-align: center;"> Eliminar </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                         <p> No records found </p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
