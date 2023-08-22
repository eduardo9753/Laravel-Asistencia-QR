@extends('layout.app')


@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="card">
                    <div class="card-header text-white bg-success text-center">
                        <h1>Register</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register.store') }}" method="POST">

                            {{-- token de seguridad --}}
                            @csrf

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="name">Nombre</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    value="{{ old('name') }}" />
                                {{-- validacion con validate --}}
                                @error('name')
                                    {{-- alerta de error --}}
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">Email address</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    value="{{ old('email') }}" />
                                {{-- validacion con validate --}}
                                @error('email')
                                    {{-- alerta de error --}}
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" />
                                {{-- validacion con validate --}}
                                @error('password')
                                    {{-- alerta de error --}}
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="password_confirmation">Password Confirmation</label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="form-control" />
                                {{-- validacion con validate --}}
                                @error('password_confirmation')
                                    {{-- alerta de error --}}
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Submit button -->
                            <input type="submit" class="btn btn-success btn-block mb-4" value="Sign in">

                            <!-- Register buttons -->
                            <div class="d-flex justify-content-between">
                                <p><a href="{{ route('login') }}">Ingresar</a></p>

                                <p><a href="{{ route('home') }}">Ir a Casa</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection