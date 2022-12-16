@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <div class="hstack gap-3">
                            <div class="fw-bold form-control me-auto fs-3 text-center">{{ __('CRUD OPERATION') }}</div>
                            <div class="vr"></div>
                            <a href="{{ url('index') }}" class="btn btn-outline-warning ">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" method="POST" action="">
                            @csrf
                            <div class="col-md-4 col-lg-6">
                                <label for="f_Name" class="form-label fw-bold">First Name</label>
                                <input type="text" class="form-control" id="f_Name" name="f_Name"
                                    value="{{ old('f_Name') }}">
                                @error('f_Name')
                                    <span class="text-danger fw-bold ">* {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 col-lg-6">
                                <label for="l_Name" class="form-label fw-bold">Last Name</label>
                                <input type="text" class="form-control" id="l_Name" name="l_Name"
                                    value="{{ old('l_Name') }}">
                                @error('l_Name')
                                    <span class="text-danger fw-bold">* {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 col-lg-6">
                                <label for="u_Name" class="form-label fw-bold">Username</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="u_Name" name="u_Name"
                                        value="{{ old('u_Name') }}">
                                </div>
                                @error('u_Name')
                                    <span class="text-danger fw-bold fw-bold">* {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 col-lg-6">
                                <label for="city" class="form-label fw-bold">City</label>
                                <input type="text" class="form-control" id="city" name="city"
                                    value="{{ old('city') }}">
                                @error('city')
                                    <span class="text-danger fw-bold ">* {{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12 text-center">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
