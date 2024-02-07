@extends('admin.includes.app')
@section('title', 'Edit Service')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Edit Service</h4>
        </div>
    </div>
    <!--End Page header-->

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Service Here</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="/admin/update-service/{{ $services->id }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Service<span class="text-red">*</span></label>
                                    <input type="text" id="name" class="form-control" name="service"
                                        value="{{ $services->service }}" placeholder="Service" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Slug<span class="text-red">*</span></label>
                                    <input type="text" id="slug" class="form-control" name="slug"
                                        value="{{ $services->slug }}" placeholder="Slug" readonly required>
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

@section('customJs')
    <script>
        $('#name').change(function() {
            element = $(this);
            $.ajax({
                url: '{{ route('getSlug') }}',
                type: 'get',
                data: {
                    title: element.val()
                },
                dataType: 'json',
                success: function(response) {
                    if (response["status"] == true) {
                        $("#slug").val(response["slug"]);
                    }
                }
            })
        });
    </script>
@endsection
