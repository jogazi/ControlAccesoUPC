@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Roles</div>

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
                                <th style="width: 200px; border-bottom: solid 1px #000;">  Number </th>
                                <th style="width: 200px; border-bottom: solid 1px #000;"> Name </th>
                                <th style="width: 50px; border-bottom: solid 1px #000;"> Slug </th>
                                <th style="width: 200px; border-bottom: solid 1px #000;"> Description </th>
                                <th style="width: 200px; border-bottom: solid 1px #000;"> Special Permissions </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($archivos as $item)
                                <tr>
                                    <td style="text-align: center;"> {{ $item->id }} </td>
                                    <td style="text-align: center;"> {{ $item->name }} </td>
                                    <td style="text-align: center;"> {{ $item->slug }} </td>
                                    <td style="text-align: center;"> {{ $item->description }} </td>
                                    <td style="text-align: center;"> {{ $item->special }} </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                        <p> No se han encontrado archivos reshistrados </p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
