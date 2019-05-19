@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header">Service details</h1>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>
                                    <b>Name:</b>
                                </td>
                                <td>
                                    {{$response['name']}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Type:</b>
                                </td>
                                <td>
                                    {{$response['type']}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Port:</b>
                                </td>
                                <td>
                                    {{$response['port']['name']}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Status:</b>
                                </td>
                                <td>
                                    {{$response['status']}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Created:</b>
                                </td>
                                <td>
                                    {{$response['created']}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Expires:</b>
                                </td>
                                <td>
                                    {{$response['expires']}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Service Town:</b>
                                </td>
                                <td>
                                    {{$response['service_town']}}
                                </td>
                            </tr>
                        </table>
                    </div>

                    <a href="/services" class="btn btn-primary">Return to services list</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
