@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6 center-screen mt-3">
            <div class="card w-100  p-4">
                <div class="card-body">
                   <form action="{{ route("store") }}" method="POST">
                        @csrf
                        <h6>SIGN IN</h6>                   
                        <div class="mb-3">
                            <input name="email" placeholder="User Email" class="form-control form-control-sm @error('email') is-invalid @enderror" type="email"/>
                            @error('email')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input name="password" placeholder="User Password" class="form-control form-control-sm @error('password') is-invalid @enderror" type="password"/>
                            @error('password')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit"  class="btn w-100 btn-success btn-sm">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

