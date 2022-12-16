@extends('layouts.app')

@section('content')
<div class="container"  style="margin-top: 180px">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <div class="hstack gap-3">
                      <div class="fw-bold form-control me-auto fs-3 text-center">{{ __('CRUD OPERATION') }}</div>
                    </div>                  
                    </div>
                <div class="card-body">
                    <div class="fw-bold fs-1 text-uppercase text-info text-center">{{ __('welcome to laravel crud') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection