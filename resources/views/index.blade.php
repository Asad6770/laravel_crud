@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <div class="hstack gap-3">
                            <a href="{{ url('create') }}" class="btn btn-outline-primary "><i
                                    class="fa-sharp fa-solid fa-plus"></i></a>
                            <div class="vr"></div>
                            <div class="fw-bold form-control me-auto fs-3 text-center">{{ __('CRUD OPERATION') }}</div>
                        </div>
                    </div>
                    @if (session()->has('status'))
                        <div class="alert alert-success text-center fs-4 fw-bold">
                            <i class="fa-sharp fa-solid fa-circle-check"></i> {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped table-hover table-bordered border-dark">
                        <thead>
                            <tr class="text-center text-uppercase">
                                <th scope="col">#</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">City</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($crud) > 0)
                                @foreach ($crud as $item)
                                    <tr>
                                        <th scope="row" class="text-center">{{ $loop->index + 1 }}</th>
                                        <td>{{ $item->f_Name }} {{ $item->l_Name }}</td>
                                        <td>{{ $item->u_Name }}</td>
                                        <td>{{ $item->city }}</td>
                                        <td class="text-center">
                                            <a href="{{ url('view', $item->id) }}" class="btn btn-sm btn-success"><i
                                                    class="fa-sharp fa-solid fa-eye"></i> View</a>
                                            <a href="{{ url('edit', $item->id) }}" class="btn btn-sm btn-info"><i
                                                    class="fa-regular fa-pen-to-square"></i> Edit</a>
                                            <a href="{{ url('delete', $item->id) }}"class="btn btn-sm btn-danger"><i
                                                    class="fa-sharp fa-solid fa-trash"></i> Delete</a>

                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <p>No Posts Found</p>
                            @endif
                        </tbody>

                    </table>
                    <div class="pagination fw-bold justify-content-center">
                        {{ $crud->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
