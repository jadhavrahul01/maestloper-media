@extends('admin.includes.app')
@section('title', 'Forms')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Inbox</h4>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-body p-6">
                    <div class="inbox-body">
                        <div class="table-responsive">
                            <table class="table table-inbox table-hover text-nowrap">
                                @if ($forms->isNotEmpty())
                                    <thead>
                                        <th colspan="5" class="text-right">
                                            <form action="/admin/all-delete" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    onclick="alert('Are you sure you want to delete all')"
                                                    class="btn btn-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($forms as $fm)
                                            @csrf
                                            @method('put')
                                            <a href="/admin/message/{{ $fm->id }}">
                                                <tr class="emailForm">
                                                    <td type="submit" class="inbox-small-cells">
                                                        <a href="/admin/message/{{ $fm->id }}">
                                                            <i class="fa-solid fa-envelope"></i>
                                                        </a>
                                                    </td>
                                                    <td class="view-message dont-show font-weight-semibold">
                                                        <a href="/admin/message/{{ $fm->id }}">
                                                            {{ $fm->email }}
                                                        </a>
                                                    </td>
                                                    <td class="view-message">
                                                        <a href="/admin/message/{{ $fm->id }}">
                                                            {{ $fm->service->service }}
                                                        </a>
                                                    </td>
                                                    <td class="view-message text-end text-muted">
                                                        <a href="/admin/message/{{ $fm->id }}">
                                                            {{ $fm->created_at }}
                                                        </a>
                                                    </td>
                                                    <td colspan="1" class="text-right">
                                                        <form action="/admin/f-delete/{{ $fm->id }}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor" class="bi bi-trash"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                                    <path
                                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </a>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td class="text-center" colspan="5">
                                                No messages found!
                                            </td>
                                        </tr>
                                @endif
                                {{-- <tr class="">
                                        <td class="inbox-small-cells">
                                            <label class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox2"
                                                    value="option2">
                                                <span class="custom-control-label"></span>
                                            </label>
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-lefted"></i></td>
                                        <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                        <td class="view-message dont-show font-weight-semibold">Freelancer.com </td>
                                        <td class="view-message">Stop wasting your visitors</td>
                                        <td class="view-message text-end text-muted">May 23</td>
                                    </tr> --}}
                                </tbody>
                            </table>
                            <div class="row">
                                {{ $forms->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <ul class="pagination float-end mb-4">
                <li class="page-item page-prev disabled">
                    <a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
                </li>
                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                <li class="page-item page-next">
                    <a class="page-link" href="javascript:void(0);">Next</a>
                </li>
            </ul> --}}
        </div>
    </div>
@endsection
