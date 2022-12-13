@extends('admin.layout.index')
@section('title')
    Danh sách danh mục sản phẩm
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Category</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Chỉnh sửa</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($categories as $key => $value)
                            <tr>
                                <a href="{{ asset('category/create/') }}"
                                    class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span>
                                    create</a>
                            </tr>
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->category_name }}</td>
                                <td>{{ $value->description }}</td>

                                <td>
                                    
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
