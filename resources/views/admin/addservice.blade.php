@extends('admin.includes.app')
@section('title', 'Add Services')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Add Services</h4>
        </div>
        <div class="col-md-5 alert-message">
            @include('admin.message')
        </div>
    </div>
    <!--End Page header-->

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add New Service</h3>
                </div>
                <div class="card-body">
                    <form action="/admin/add-service" name="categoryForm" id="categoryForm" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="service" id="name" value="" class="form-control m-2"
                            placeholder="Enter Service Name" required>

                        <button type="submit" class="btn btn-success mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        All Services
                    </h3>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover card-table table-vcenter text-nowrap">
                            <thead class="border-bottom-0 pt-3 pb-3">
                                <tr>
                                    <th>Services</th>
                                    <th>Slug</th>
                                    <th class="text-right">Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr style="vertical-align: center;">
                                        <td class="fs-13 "><span></span>{{ $service->service }}
                                        </td>
                                        <td class="fs-13 "><span></span>{{ $service->slug }}</td>
                                        <td class="text-right">
                                            <a href="/admin/edit-service/{{ $service->id }}"
                                                class="btn btn-outline-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="/admin/delete-service/{{ $service->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
