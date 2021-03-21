@extends('admin.layout')

@section('title', 'Products')

@section('breadcrumb')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Create Product</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <form id="form-add" action="{{ route('admin.products.store') }}" enctype="multipart/form-data" method="post" class="row" style="width: 100%">
            @csrf
            <div class="col-md-8">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Product Information</h4>
                            <div class="form-group">
                                <label for="hue-demo">Category</label>
                                <select name="category" class="form-control custom-select" style="width: 100%; height:36px;">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="hue-demo">Name</label>
                                <input type="text" name="name" required id="hue-demo" class="form-control demo" data-control="hue" >
                                <div id="error-name" style="display: none; color: red">Name is required</div>
                            </div>
                            <div class="form-group">
                                <label for="hue-demo">Origin</label>
                                <input type="text" name="origin" required id="hue-demo" class="form-control demo" data-control="hue" >
                                <div id="error-origin" style="display: none; color: red">Origin is required</div>
                            </div>
                            <div class="form-group">
                                <label for="hue-demo">Alcohol</label>
                                <input type="number" name="alcohol" required id="hue-demo" class="form-control demo" data-control="hue" >
                                <div id="error-alcohol" style="display: none; color: red">Alcohol is required</div>
                            </div>
                            <div class="form-group">
                                <label for="hue-demo">Volume</label>
                                <input type="text" name="volume" required id="hue-demo" class="form-control demo" data-control="hue" >
                                <div id="error-volume" style="display: none; color: red">Volume is required</div>
                            </div>
                            <div class="form-group">
                                <label for="hue-demo">Price</label>
                                <input type="text" name="price" required id="hue-demo" class="form-control demo" data-control="hue" >
                                <div id="error-price" style="display: none; color: red">Price is required</div>
                            </div>
                            <div class="form-group">
                                <label for="hue-demo">Quantity</label>
                                <input type="number" name="quantity" required id="hue-demo" class="form-control demo" data-control="hue" >
                                <div id="error-quantity" style="display: none; color: red">Quantity is required</div>
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
                                <label for="hue-demo">Product Image</label>
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
            if (validateForm()) {
                $('#form-add').submit();
            }
        }

        function validateForm() {
            const name = $('input[name="name"]').val();
            if (!name || name.trim().length === 0) {
                $('#error-name').show();
                return false;
            } else {
                $('#error-name').hide();
            }
            const origin = $('input[name="origin"]').val();
            if (!origin || origin.trim().length === 0) {
                $('#error-origin').show();
                return false;
            } else {
                $('#error-origin').hide();
            }
            const alcohol = $('input[name="alcohol"]').val();
            if (!alcohol || alcohol.trim().length === 0) {
                $('#error-alcohol').show();
                return false;
            } else {
                $('#error-alcohol').hide();
            }
            const price = $('input[name="price"]').val();
            if (!price || price.trim().length === 0) {
                $('#error-price').show();
                return false;
            } else {
                $('#error-price').hide();
            }
            const volume = $('input[name="volume"]').val();
            if (!volume || volume.trim().length === 0) {
                $('#error-volume').show();
                return false;
            } else {
                $('#error-volume').hide();
            }

            const quantity = $('input[name="quantity"]').val();
            if (!quantity || quantity.trim().length === 0) {
                $('#error-quantity').show();
                return false;
            } else {
                $('#error-quantity').hide();
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
