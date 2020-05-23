@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="text-align: center">
                    <h1> Actor number {{ $audit09->idactors }} </h1>
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
                                <th> Id </th> 
                                <td> {{ $audit09->idactors }} </td>
                            </tr>
                            <tr>
                                <th> Name </th> <td> {{ $audit09->name }} </td>
                            </tr>
                            <tr>
                                <th> Surname </th> <td> {{ $audit09->surname }} </td>
                            </tr>
                        </table>
                    <a class="btn btn-success" href="{{ route('audit09.index') }}"><i class="fas fa-arrow-alt-circle-left"></i> Go back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
