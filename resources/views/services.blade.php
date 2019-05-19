@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header">Your Services</h1>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table">

                            @foreach($response["services"] as $service)
                            <tr>
                                <td>
                                    <b>{{$service['name']}}</b>
                                </td>
                                <td>
                                    <a href="services/{{$service['id']}}">See details</a>
                                </td>
                            </tr>
                            @endforeach

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
