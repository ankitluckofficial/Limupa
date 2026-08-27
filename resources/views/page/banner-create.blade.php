@extends('backend.layout.main')

@section('title', 'Add Banner')

@section('content')


    <div class="banner-page">

        <div class="banner-container">

            <div class="page-title">
                <div>
                    <h2>Add New Banner</h2>
                    <p>Create banner content for your e-commerce homepage</p>
                </div>

                <a href="{{ route('banners.create') }}" class="banner-list-btn">
                    <span class="btn-icon">
                        <i class="fas fa-layer-group"></i>
                    </span>
                    <span>Banner List</span>
                    <i class="fas fa-arrow-right arrow-icon"></i>
                </a>
            </div>
            <div class="banner-card">

                <!-- HEADER -->
                <div class="card-header">
                    <div>
                        <h3>Banner Details</h3>
                        <span>Add all information displayed on the banner</span>
                    </div>
                </div>


                <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf


                    <div class="form-body">


                        <!-- BASIC INFORMATION -->
                        <div class="form-section">

                            <div class="section-heading">
                                1. Basic Information
                            </div>

                            <div class="form-grid">

                                <!-- TITLE -->
                                <div class="form-group full">

                                    <label>
                                        Banner Title <span class="required">*</span>
                                    </label>

                                    <input type="text" name="title" class="form-control" placeholder="Banner Title"
                                        value="{{ old('title') }}" required>

                                    @error('title')
                                        <div class="error">{{ $message }}</div>
                                    @enderror

                                </div>


                                <!-- SALE TEXT -->
                                <div class="form-group">

                                    <label>Sale / Offer Text</label>

                                    <input type="text" name="sale_text" class="form-control"
                                        placeholder=" Sale Offer" value="{{ old('sale_text') }}">

                                </div>


                                <!-- DISCOUNT -->
                                <div class="form-group">

                                    <label>Discount</label>

                                    <input type="text" name="discount" class="form-control"
                                        placeholder=" 20% Off" value="{{ old('discount') }}">

                                </div>


                                <!-- PRODUCT NAME -->
                                <div class="form-group">

                                    <label>Product Name</label>

                                    <input type="text" name="product_name" class="form-control"
                                        placeholder="Product Name" value="{{ old('product_name') }}">

                                </div>


                                <!-- PRICE -->
                                <div class="form-group">

                                    <label>Price</label>

                                    <input type="text" name="price" class="form-control" placeholder="Product Price "
                                        value="{{ old('price') }}">

                                </div>

                            </div>

                        </div>


                        <!-- BANNER IMAGE -->
                        <div class="form-section">

                            <div class="section-heading">
                                2. Banner Image
                            </div>

                            <div class="form-grid">

                                <div class="form-group full">

                                    <label>
                                        Banner Image <span class="required">*</span>
                                    </label>

                                    <div class="upload-box">

                                        <div class="icon">
                                            🖼️
                                        </div>

                                        <strong>
                                            Upload Banner Image
                                        </strong>

                                        <small>
                                            JPG, JPEG, PNG or WEBP
                                        </small>

                                        <input type="file" name="image" class="form-control" accept="image/*" required>

                                    </div>

                                    @error('image')
                                        <div class="error">{{ $message }}</div>
                                    @enderror

                                </div>

                            </div>

                        </div>


                        <!-- POSITION -->
                        <div class="form-section">

                            <div class="section-heading">
                                4. Banner Position
                            </div>

                            <div class="position-grid">

                                <div class="position-option">

                                    <input type="radio" id="main_banner" name="position" value="main"
                                        {{ old('position', 'main') == 'main' ? 'checked' : '' }}>

                                    <label for="main_banner">
                                        Main Banner
                                    </label>

                                </div>


                                <div class="position-option">

                                    <input type="radio" id="side_top" name="position" value="side_top"
                                        {{ old('position') == 'side_top' ? 'checked' : '' }}>

                                    <label for="side_top">
                                        Side Banner Top
                                    </label>

                                </div>


                                <div class="position-option">

                                    <input type="radio" id="side_bottom" name="position" value="side_bottom"
                                        {{ old('position') == 'side_bottom' ? 'checked' : '' }}>

                                    <label for="side_bottom">
                                        Side Banner Bottom
                                    </label>

                                </div>

                            </div>

                        </div>


                        <!-- DATE & STATUS -->
                        <div class="form-section">

                            <div class="section-heading">
                                5. Schedule & Status
                            </div>

                            <div class="form-grid">

                                <!-- START DATE -->
                                <div class="form-group">

                                    <label>Start Date</label>

                                    <input type="date" name="start_date" class="form-control"
                                        value="{{ old('start_date') }}">

                                </div>


                                <!-- END DATE -->
                                <div class="form-group">

                                    <label>End Date</label>

                                    <input type="date" name="end_date" class="form-control"
                                        value="{{ old('end_date') }}">

                                </div>


                                <!-- STATUS -->
                                <div class="form-group">

                                    <label>Status</label>

                                    <select name="status" class="form-control">

                                        <option value="active" {{ old('status', 'active') == 'active' ? 'selected' : '' }}>
                                            Active
                                        </option>

                                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>
                                            Inactive
                                        </option>

                                    </select>

                                </div>

                            </div>

                        </div>


                        <!-- FOOTER -->
                        <div class="form-footer">

                            <button type="reset" class="btn btn-reset">
                                Reset
                            </button>

                            <button type="submit" class="btn btn-save">
                                Save Banner
                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection
