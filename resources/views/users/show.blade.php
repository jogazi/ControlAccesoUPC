@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> User number {{ $user->id }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <table class="table">
                            <tr>
                                <th> Name </th> <td> {{ $user->name }} </td>
                            </tr>
                            <tr>
                                <th> Email </th> <td> {{ $user->email }} </td>
                            </tr>
                            <tr>
                                <th> State </th> <td>  @if ($user->active==0)
                                                                    Deactivate
                                                                @else
                                                                    Actived
                                                                @endif </td>
                            </tr>
                        </table>
                    <a class="btn btn-success" href="{{ route('users.index') }}"><i class="fas fa-arrow-alt-circle-left"></i> Go back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
