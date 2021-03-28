@extends('admin.layout')

@section('title', 'categories')

@section('breadcrumb')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Category</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Last Name Here">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-right">
                        <div class="border-top">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="col-12 d-flex mb-2">
                        <div class="col-6">
                            <h4 class="card-title">All Categories</h4>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add Category</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="10%">Images</th>
                                <th>Name</th>
                                <th width="10%" style="text-align: center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td class="align-content-center">{{ $category->id }}</td>
                                        <td>
                                            <div style="width: 80px; height: 40px">
                                                <img class="image-table" src="{{ asset('').$category->images->first()->path }}"  alt="category img">
                                            </div>

                                        </td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <a href="{{ Route('admin.categories.edit', $category['id']) }}"><i class="fa fa-edit"></i></a>
                                                <a onclick="return xacnhanxoa('Bạn có muốn xóa không ?')" href="{{ Route('admin.categories.destroy', $category['id']) }}"><i class="fa fa-trash"></i></a>
                                            </div>
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

@section('javascriptSection')
    <script src="{{ asset('admins')  }}/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#zero_config').DataTable( {
                "paging":   true,
                "ordering": false,
                "info":     false,
                "searching": false
            } );
        } );
    </script>
@endsection
