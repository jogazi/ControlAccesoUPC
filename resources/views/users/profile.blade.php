@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Profile user </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <table class="table">
                            <tr>
                                <th> Name </th> <td> {{ $userr->name }} </td>
                            </tr>
                            <tr>
                                <th> Email </th> <td> {{ $userr->email }} </td>
                            </tr>
                            <tr>
                                <th> State </th> <td>  @if ($userr->active==0)
                                                                    Deactivate
                                                                @else
                                                                    Actived
                                                                @endif </td>
                            </tr>
                        </table>
                    <a class="btn btn-success" href="{{ route('home') }}"><i class="fas fa-arrow-alt-circle-left"></i> Go back</a>
                    <a class="btn btn-info" href="{{ route('users.edit2',$userr->id) }}"><i class="far fa-edit"></i> Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
