@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header">Get API access token</h1>

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


                    <form method="POST" action="{{ action('ApiController@getAccess') }}" accept-charset="UTF-8">
                        @csrf

                        <div class="form-group">
                            <div>
                                <label for="client_id">Enter Client ID</label>
                                <input type="text" name="client_id" id="client_id" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="client_secret">Enter Client Secret</label>
                                <input type="text" name="client_secret" id="client_secret" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Get API access token" class="btn btn-primary">
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
