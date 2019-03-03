@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="form-group">
                    <div>
                        <label for="name" class="control-label">Login With</label>    
                    </div>
                    <div>
                        <a href="{{ url('login/facebook') }}" class="btn btn-social-icon btn-facebook">FacebookLogin</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
