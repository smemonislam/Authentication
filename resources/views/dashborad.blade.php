@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mt-3 mb-5">Your are logged in!.</h4>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Profile
                    </div>
                    <div class="card-body">
                        <form action="{{ route('profile') }}" method="POST" class="row">
                            @csrf
                            <div class="col-md-6 p-2">
                                <label>User Name</label>
                                <input name="name" placeholder="User Name" class="form-control form-control-sm @error('name') is-invalid @enderror" type="text" value="{{ old('name', $user->name) }}"/>
                                @error('name')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 p-2">
                                <label>User Email</label>
                                <input name="email" placeholder="User Email" class="form-control form-control-sm @error('email') is-invalid @enderror" type="email" value="{{ old('email', $user->email) }}"/>
                                @error('email')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-md-6 p-2">
                                <label>Old Password</label>
                                <input name="old_password" placeholder="Old Password" class="form-control form-control-sm @error('old_password') is-invalid @enderror" type="password"/>
                                @error('old_password')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 p-2">
                                <label>New Password</label>
                                <input name="password" placeholder="New Password" class="form-control form-control-sm @error('password') is-invalid @enderror" type="password"/>
                                @error('password')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 p-2">
                                <label>Confirm Password</label>
                                <input name="password_confirmation" placeholder="User Password" class="form-control form-control-sm" type="password"/>
                            </div>
                            <button type="submit" class="btn btn-info btn-sm">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



