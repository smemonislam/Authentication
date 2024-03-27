@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-10 center-screen">
            <div class="card w-100 p-3 mt-3">
                <div class="card-body">
                    <h6>Sign Up</h6>                    
                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf
                        <div class="container-fluid m-0 p-0">
                            <div class="row m-0 p-0">                                
                                <div class="col-md-6 p-2">
                                    <label>Email Address</label>
                                    <input name="email" placeholder="User Email" class="form-control form-control-sm @error('email') is-invalid @enderror" type="email" value="{{ old('email') }}"/>
                                    @error('email')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 p-2">
                                    <label>User Name</label>
                                    <input name="name" placeholder="User Name" class="form-control form-control-sm @error('name') is-invalid @enderror" type="text" value="{{ old('name') }}"/>
                                    @error('name')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 p-2">
                                    <label>Password</label>
                                    <input name="password" placeholder="User Password" class="form-control form-control-sm @error('password') is-invalid @enderror" type="password"/>
                                    @error('password')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 p-2">
                                    <label>Confirm Password</label>
                                    <input name="password_confirmation" placeholder="User Password" class="form-control form-control-sm" type="password"/>
                                </div>
                                <button type="submit" class="btn mt-3 btn-sm w-100 btn-success">Register</button>                                
                            </div>                       
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





