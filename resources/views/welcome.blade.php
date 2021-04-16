@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('LOGIN YOUR ACCOUNT!!!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('To access the Post Table, you must logged in your account.') }}
                    <br><br>
                    {{ __('If you dont have an account, Register first!') }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection