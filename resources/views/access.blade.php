@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header">Your API access data</h1>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td><b class="label">access_token:</b></td>
                                <td>{{$response['access_token']}}</td>
                            </tr>
                            <tr>
                                <td><b class="label">token_type:</b></td>
                                <td>{{$response['token_type']}}</td>
                            </tr>
                            <tr>
                                <td><b class="label">expires_in:</b></td>
                                <td>{{$response['expires_in']}}</td>
                            </tr>
                            <tr>
                                <td><b class="label">refresh_token:</b></td>
                                <td>{{$response['refresh_token']}}</td>
                            </tr>
                        </table>
                    </div>

                    <a href="/services" class="btn btn-primary">GET your list of Services from the API</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
