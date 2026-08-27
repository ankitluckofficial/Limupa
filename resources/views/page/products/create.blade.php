@extends('backend.layout.main')

@section('title', 'Add Product')

@section('content')


<div class="product-create-page">

    <div class="product-create-container">

        <!-- HEADER -->
        <div class="product-create-header">

            <div class="product-create-title">
                <h2>Add New Product</h2>
                <p>Add product details, pricing, stock and image</p>
            </div>

            <a
                href="{{ route('products.create') }}"
                class="product-create-list-btn"
            >
                <i class="fas fa-box"></i>
                Product List
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <!-- CARD -->
        <div class="product-create-card">


            <!-- LEFT -->
            <div class="product-create-left">

                <h3>Product Image</h3>

                <p>
                    Upload a clear product image to make your
                    product look attractive in your store.
                </p>

                <div class="product-upload-area">

                    <div class="product-upload-content">

                        <i class="fas fa-cloud-upload-alt"></i>

                        <strong>Upload Product Image</strong>

                        <span>Click here to browse</span>

                        <span>JPG, PNG or WEBP</span>

                    </div>

                    <img
                        id="productPreview"
                        class="product-image-preview"
                        alt="Product Preview"
                    >

                    <input
                        type="file"
                        name="image"
                        id="productImage"
                        accept="image/*"
                    >

                </div>

            </div>


            <!-- RIGHT -->
            <div class="product-create-right">

                <h3>Product Information</h3>

                <form
                    action="{{ route('products.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                    id="productForm"
                >

                    @csrf

                    <!-- NAME -->
                    <div class="product-create-group">

                        <label for="productName">
                            Product Name
                        </label>

                        <input
                            type="text"
                            id="productName"
                            name="name"
                            class="product-create-input"
                            placeholder="Enter product name"
                            required
                        >

                    </div>


                    <!-- DESCRIPTION -->
                    <div class="product-create-group">

                        <label for="productDescription">
                            Description
                        </label>

                        <textarea
                            id="productDescription"
                            name="description"
                            class="product-create-input product-create-textarea"
                            placeholder="Write product description..."
                        ></textarea>

                    </div>


                    <!-- PRICE / STOCK -->
                    <div class="product-create-row">

                        <div class="product-create-group">

                            <label for="productPrice">
                                Price
                            </label>

                            <div class="product-price-field">

                                <span class="product-price-symbol">
                                    ₹
                                </span>

                                <input
                                    type="number"
                                    id="productPrice"
                                    name="price"
                                    class="product-create-input"
                                    placeholder="0.00"
                                    step="0.01"
                                    min="0"
                                    required
                                >

                            </div>

                        </div>


                        <div class="product-create-group">

                            <label for="productStock">
                                Stock
                            </label>

                            <input
                                type="number"
                                id="productStock"
                                name="stock"
                                class="product-create-input"
                                placeholder="Available quantity"
                                min="0"
                                required
                            >

                        </div>

                    </div>


                    <!-- STATUS -->
                    <div class="product-create-group">

                        <label for="productStatus">
                            Status
                        </label>

                        <select
                            id="productStatus"
                            name="status"
                            class="product-create-input product-create-select"
                        >

                            <option value="active">
                                Active
                            </option>

                            <option value="inactive">
                                Inactive
                            </option>

                        </select>

                    </div>


                    <!-- BUTTONS -->
                    <div class="product-create-footer">

                        <a
                            href="{{ route('products.index') }}"
                            class="product-create-cancel"
                        >
                            Cancel
                        </a>

                        <button
                            type="submit"
                            class="product-create-save"
                        >
                            <i class="fas fa-check"></i>
                            Save Product
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


<script>
document.getElementById('productImage').addEventListener('change', function(event) {

    const file = event.target.files[0];
    const preview = document.getElementById('productPreview');
    const content = document.querySelector('.product-upload-content');

    if (file) {

        const reader = new FileReader();

        reader.onload = function(e) {

            preview.src = e.target.result;
            preview.style.display = 'block';
            content.style.display = 'none';

        };

        reader.readAsDataURL(file);
    }
});
</script>

@endsection
