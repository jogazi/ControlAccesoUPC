@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="text-align: center">
                    <h1> Role number {{ $roles->id }} </h1>
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
                                <td> {{ $roles->id }} </td>
                            </tr>
                            <tr>
                                <th> Name </th> <td> {{ $roles->name }} </td>
                            </tr>
                            <tr>
                                <th> Slug </th> <td> {{ $roles->slug }} </td>
                            </tr>
                            <tr>
                                <th> Description </th> <td> {{ $roles->description }} </td>
                            </tr>
                            <tr>
                                <th> Creation date </th> <td> {{ $roles->created_at }} </td>
                            </tr>
                            <tr>
                                <th> Special </th> <td> {{ $roles->special }} </td>
                            </tr>
                        </table>
                    <a class="btn btn-success" href="{{ route('roles.index') }}"><i class="fas fa-arrow-alt-circle-left"></i> Go back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
