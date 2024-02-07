@if (Session::has('error'))
    <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">
            </button>
            <i class="fa fa-frown-o me-2" aria-hidden="true"></i>Error!&nbsp;{{ Session::get('error') }}
        </div>
    </div>
@endif

@if (Session::has('success'))
    <div class="col-md-12">
        <div class="alert alert-success" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">
            </button>
            <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i>
            Success!&nbsp;{{ Session::get('success') }}
        </div>
    </div>
@endif
