@extends('admin.layout')

@section('title', 'categories')

@section('breadcrumb')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Create Category</h4>
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
        <form id="form-add" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data" method="post" class="row" style="width: 100%">
            @csrf
            <div class="col-md-8">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Category Information</h4>
                            <div class="form-group">
                                <label for="hue-demo">Parent Category</label>
                                <select name="parent_id" class="form-control custom-select" style="width: 100%; height:36px;">
                                    <option value="0">None</option>
                                    @foreach($listParentCategories as $parentCategory)
                                        <option value="{{ $parentCategory->id }}">{{ $parentCategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="hue-demo">Name</label>
                                <input type="text" name="name" required id="hue-demo" class="form-control demo" data-control="hue" >
                                <div id="error-name" style="display: none; color: red">Name is required</div>
                            </div>
                            <div class="form-group">
                                <label for="position-bottom-left">Description</label>
                                <!-- Create the editor container -->
                                <div id="editor" style="height: 300px;">
                                </div>
                                <div id="error-description" style="display: none; color: red">Description is required</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="hue-demo">Category Image</label>
                                <div class="col-md-12">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required onchange="readURL(this);">
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div id="error-img" style="display: none; color: red">Image is required</div>
                                    </div>
                                    <div class="p-20" id="cat-img-display">
                                        <img src="{{asset('admins')}}/assets/images/background/img4.jpg" id="cat-img" class="img-fluid">
                                        <button id="remove-upload" title="Remove" onclick="removeFileChosen();">
                                            <i class="fa fa-minus-circle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" onclick="submitForm();" class="btn btn-primary">Save</button>
                            <button type="button" onclick="resetForm();" class="btn btn-primary">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('javascriptSection')
<script>

    $(document).ready(function () {
        $('#cat-img-display').hide();
    });

    const quill = new Quill('#editor', {
        theme: 'snow'
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            $('#cat-img-display').show();
            const reader = new FileReader();

            reader.onload = function (e) {
                $('#cat-img')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            $('#cat-img-display').hide();
        }
    }

    function removeFileChosen() {
        $('#validatedCustomFile').val('');
        $('#cat-img-display').hide();
    }

    function resetForm() {
        $('#form-add').reset();
    }

    function submitForm() {
        const description = $('#editor .ql-editor').html();
        $('<input>').attr({
            type: 'hidden',
            name: 'description',
            value: description
        }).appendTo('form');
        if (validateForm()) {
            $('#form-add').submit();
        }
    }

    function validateForm() {
        const name = $('input[name="name"]').val();
        console.log(name);

        if (!name || name.trim().length === 0) {
            $('#error-name').show();
            return false;
        } else {
            $('#error-name').hide();
        }

        if (!$('#editor .ql-editor').text() || $('#editor .ql-editor').text().trim().length === 0) {
            $('#error-description').show();
            return false;
        } else {
            $('#error-description').hide();
        }

        const image = $('#validatedCustomFile').val();
        if (!image) {
            $("#error-img").show();
            return false;
        } else {
            $("#error-img").hide();
        }

        return true;
    }
</script>
@endsection
