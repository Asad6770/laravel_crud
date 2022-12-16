@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="hstack gap-3">
                            <div class="fw-bold form-control me-auto fs-3 text-center">{{ __('CRUD OPERATION') }}</div>
                            <div class="vr"></div>
                            <a href="{{ url('index') }}" class="btn btn-outline-warning ">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <img src="https://st.depositphotos.com/2101611/4338/v/950/depositphotos_43381243-stock-illustration-male-avatar-profile-picture.jpg"
                            class="rounded float-start m-5 border border-5" style="max-block-size: 300px" alt="...">

                        <div class="p-5">
                            <div class="d-flex justify-content-start">
                                <p class="fs-4 fw-bold ">ID :</p>
                                <p class="fs-4" style="margin-left: 140px">{{ $crud->id }}</p>
                            </div>
                            <div class="d-flex justify-content-start">
                                <p class="fs-4 fw-bold ">NAME:</p>
                                <p class="fs-4 text-center" style="margin-left: 40px">{{ $crud->f_Name }}
                                    {{ $crud->l_Name }}</p>
                            </div>
                            <div class="d-flex justify-content-start">
                                <p class="fs-4 fw-bold ">USER:</p>
                                <p class="fs-4" style="margin-left: 90px">{{ $crud->u_Name }}</p>
                            </div>
                            <div class="d-flex justify-content-start">
                                <p class="fs-4 fw-bold ">CITY:</p>
                                <p class="fs-4" style="margin-left: 80px">{{ $crud->city }}</p>
                            </div>
                        </div>
                        <a href="{{ url('create') }}" class="btn btn-outline-primary"><i
                            class="fa-sharp fa-solid fa-plus"></i> Add</a>
                            <div class="vr"></div>
                        <a href="{{ url('edit', $crud->id) }}" class="btn btn-outline-info"><i
                            class="fa-regular fa-pen-to-square"></i> Edit</a>
                            <div class="vr"></div>
                        <a href="{{ url('delete', $crud->id) }}" class="btn btn-outline-danger"><i
                            class="fa-sharp fa-solid fa-trash"></i> Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
