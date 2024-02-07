@extends('admin.includes.app')
@section('title', 'Message')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Message</h4>
        </div>

        <div class="page-rightheader">
            <h4 class="page-title mb-0 text-primary"><a href="{{ route('form') }}" class="btn btn-primary">Back</a></h4>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="email-media">
                        <div class="mt-0 d-sm-flex">
                            <img class="me-2 rounded-circle avatar avatar-lg"
                                src="{{ asset('admin-assets/images/users/2.jpg') }}" alt="avatar" />
                            <div class="media-body pt-0">
                                <div class="float-end d-none d-md-flex fs-15">
                                    <small class="me-3 mt-3 text-muted">{{ $forms->created_at }}</small>
                                    {{-- <a class="me-3 email-icon bg-danger-transparent" data-bs-toggle="tooltip" title=""
                                        data-original-title="Rated"><i class="text-danger fa fa-trash fs-16"></i></a>
                                    <a class="me-3 email-icon bg-success-transparent" data-bs-toggle="tooltip"
                                        title="" data-original-title="Reply"><i
                                            class="text-success fa fa-reply"></i></a> --}}

                                </div>
                                <div class="media-title font-weight-semibold mt-1">
                                    {{ $forms->name }}
                                    <span class="text-muted font-weight-semibold">{{ $forms->email }}</span>
                                </div>
                                <small class="mb-0">to ( maestlopermedia@gmail.com )
                                </small>
                                <small class="me-2 d-md-none">{{ $forms->created_at }}</small>
                            </div>
                        </div>
                    </div>
                    <div class="eamil-body mt-5">
                        <h6>Hi Sir/Madam</h6>
                        <p>
                            Subject: {{ $forms->service->service }}
                        </p>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $forms->message }}

                            <br>
                            <br>
                            @if (!empty($forms->links))
                                Website Link:&nbsp;{{ $forms->links }}
                            @endif
                        </p>
                        <p class="mb-0">Yours,</p>
                        <p>
                            {{ $forms->name }}
                        </p>
                        <hr />

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
