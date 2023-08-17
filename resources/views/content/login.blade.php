@extends('master')

@section('title', 'Login page')


@section('content')
<style>
    h1 { color: blue;}
</style>

    <h1 class="mx-3">Login</h1>
    <form action="{{ url('login') }}" method="post">
        @csrf
        <div class="mb=3">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback
                d-block">{{ $errors->first('email') }}
            </div>
        @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        @error('password')
        <div class="invalid-feedback
            d-block">{{ $errors->first('password') }}
        </div>
    @enderror
    <button type="submit" class="btn btn-info">Login</button>
    </form>

@endsection
