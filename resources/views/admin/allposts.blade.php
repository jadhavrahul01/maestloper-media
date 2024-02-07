@extends('admin.includes.app')
@section('title', 'All Posts')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">All Posts</h4>
        </div>
        <div class="col-md-6 alert-message">
            @include('admin.message')
        </div>  
    </div>
    <!--End Page header-->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        All Posts
                    </h3>
                    <div class="card-options">
                        <a href="{{ route('addpost') }}" class="btn btn-sm btn-primary">Add Post</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover card-table table-vcenter text-nowrap">
                            <thead class="border-bottom-0 pt-3 pb-3">
                                <tr class="text-center">
                                    <th>Image</th>
                                    <th>Post Title</th>
                                    <th>Post Author</th>
                                    <th>Service Type</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr style="vertical-align: center;
                                text-align: center">
                                        <td><img class="" src="/posts/{{ $post->media }}" alt="img"
                                                height="100px" width="150px"></td>
                                        <td class="fs-13 text-success"><span
                                                class="dot-label bg-success me-2 w-2 h-2"></span>{{ $post->title }}</td>
                                        <td class="fs-13 text-success"><span
                                                class="dot-label bg-success me-2 w-2 h-2"></span>{{ $post->author }}</td>
                                        <td class="text-muted">{{ $post->service->service }}</td>
                                        <td>
                                            <a href="/admin/edit-post/{{ $post->id }}"
                                                class="btn btn-outline-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="/admin/delete/{{ $post->id }}" method="POST">
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
