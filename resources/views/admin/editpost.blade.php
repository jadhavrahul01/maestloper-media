@extends('admin.includes.app')
@section('title', 'Edit Post')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Edit Posts</h4>
        </div>
    </div>
    <!--End Page header-->

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Post Here</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="/admin/update/{{ $posts->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Title<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="title" value="{{ $posts->title }}"
                                        placeholder="Title of post" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Author<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="author" value="{{ $posts->author }}"
                                        placeholder="Author of post" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Image<span class="text-red">*</span></label>
                                    <input type="file" class="form-control" name="media">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <a class="btn text-danger">X</a>
                                <div class="form-group">
                                    <img src="/posts/{{ $posts->media }}" alt="" height="100px" width="70px">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Link<span class="text-red">*</span></label>
                                    <input type="url" class="form-control" name="link" value="{{ $posts->link }}"
                                        placeholder="Link of post" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Service Type<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" value="{{ $posts->service->service }}"
                                        readonly>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <select name="service" class="form-control custom-select select2" value="">
                                        <option value="{{ $posts->service_id }}">--Select Service--</option>
                                        @foreach ($services as $se)
                                            <option value="{{ $se->id }}">{{ $se->service }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <button class="btn btn-outline-secondary" type="submit">Update</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
