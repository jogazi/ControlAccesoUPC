@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="text-align: center">
                    <h1> Movie number {{ $audit12->idfilms }} </h1>
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
                                <td> {{ $audit12->idfilms }} </td>
                            </tr>
                            <tr>
                                <th> Name </th> <td> {{ $audit12->name }} </td>
                            </tr>
                            <tr>
                                <th> Slug </th> <td> {{ $audit12->duration }} </td>
                            </tr>
                            <tr>
                                <th> Description </th> <td> {{ $audit12->premiere }} </td>
                            </tr>
                        </table>
                    <a class="btn btn-success" href="{{ route('audit12.index') }}"><i class="fas fa-arrow-alt-circle-left"></i> Go back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
