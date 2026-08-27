@extends('backend.layout.main')

@section('title', 'About Us')

@section('content')



<div class="about-admin-page">

<div class="about-admin-container">


    <!-- HEADER -->

    <div class="about-admin-header">

        <div>

            <h2>About Us</h2>

            <p>
                Manage your store's About Us information
            </p>

        </div>

        <a
            href="{{ route('about.create') }}"
            class="about-list-btn"
        >
            <i class="fas fa-list"></i>
            About List
            <i class="fas fa-arrow-right"></i>
        </a>

    </div>


<form
    action="{{ route('about.store') }}"
    method="POST"
    enctype="multipart/form-data"
>

@csrf


<!-- =====================================
     ABOUT INFORMATION
===================================== -->

<div class="about-admin-card">

    <div class="about-card-title">

        <div class="about-card-title-icon">
            <i class="fas fa-info-circle"></i>
        </div>

        <div>
            <h3>About Information</h3>
            <span>Main information displayed on About Us page</span>
        </div>

    </div>


    <div class="about-card-body">

        <div class="about-grid">


            <!-- TITLE -->

            <div class="about-group">

                <label>About Title</label>

                <input
                    type="text"
                    name="title"
                    class="about-input"
                    placeholder="About Our Store"
                    required
                >

            </div>


            <!-- SUBTITLE -->

            <div class="about-group">

                <label>Short Subtitle</label>

                <input
                    type="text"
                    name="subtitle"
                    class="about-input"
                    placeholder="Your trusted online shopping partner"
                >

            </div>


            <!-- DESCRIPTION -->

            <div class="about-group about-full">

                <label>About Description</label>

                <textarea
                    name="description"
                    class="about-input about-textarea"
                    placeholder="Write detailed information about your store..."
                    required
                ></textarea>

            </div>


            <!-- IMAGE -->

            <div class="about-group about-full">

                <label>About Us Image</label>

                <div class="about-image-upload">

                    <div
                        class="about-image-placeholder"
                        id="aboutPlaceholder"
                    >
                        <i class="fas fa-image"></i>
                    </div>

                    <img
                        id="aboutPreview"
                        class="about-image-preview"
                        alt="About Image"
                    >

                    <div class="about-upload-content">

                        <strong>
                            Upload About Us Image
                        </strong>

                        <small>
                            JPG, PNG or WEBP
                        </small>

                        <label
                            for="aboutImage"
                            class="about-upload-btn"
                        >
                            <i class="fas fa-upload"></i>
                            Choose Image
                        </label>

                        <input
                            type="file"
                            name="image"
                            id="aboutImage"
                            accept="image/*"
                            hidden
                        >

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- =====================================
     MISSION & VISION
===================================== -->

<div class="about-admin-card">

    <div class="about-card-title">

        <div class="about-card-title-icon">
            <i class="fas fa-bullseye"></i>
        </div>

        <div>
            <h3>Mission & Vision</h3>
            <span>Tell customers what your company stands for</span>
        </div>

    </div>


    <div class="about-card-body">

        <div class="about-grid">

            <div class="about-group">

                <label>Our Mission</label>

                <textarea
                    name="mission"
                    class="about-input about-textarea"
                    placeholder="Write your company mission..."
                ></textarea>

            </div>


            <div class="about-group">

                <label>Our Vision</label>

                <textarea
                    name="vision"
                    class="about-input about-textarea"
                    placeholder="Write your company vision..."
                ></textarea>

            </div>

        </div>

    </div>

</div>


<!-- =====================================
     WHY CHOOSE US
===================================== -->

<div class="about-admin-card">

    <div class="about-card-title">

        <div class="about-card-title-icon">
            <i class="fas fa-star"></i>
        </div>

        <div>
            <h3>Why Choose Us</h3>
            <span>Highlight the benefits of shopping with you</span>
        </div>

    </div>


    <div class="about-card-body">

        <div class="about-grid">


            <div class="about-value-box">

                <div class="about-group">

                    <label>Feature 1</label>

                    <input
                        type="text"
                        name="feature_1"
                        class="about-input"
                        placeholder="Premium Quality"
                    >

                </div>

            </div>


            <div class="about-value-box">

                <div class="about-group">

                    <label>Feature 2</label>

                    <input
                        type="text"
                        name="feature_2"
                        class="about-input"
                        placeholder="Fast Delivery"
                    >

                </div>

            </div>


            <div class="about-value-box">

                <div class="about-group">

                    <label>Feature 3</label>

                    <input
                        type="text"
                        name="feature_3"
                        class="about-input"
                        placeholder="Secure Payment"
                    >

                </div>

            </div>


            <div class="about-value-box">

                <div class="about-group">

                    <label>Feature 4</label>

                    <input
                        type="text"
                        name="feature_4"
                        class="about-input"
                        placeholder="Easy Returns"
                    >

                </div>

            </div>


        </div>

    </div>

</div>


<!-- =====================================
     COMPANY STATISTICS
===================================== -->

<div class="about-admin-card">

    <div class="about-card-title">

        <div class="about-card-title-icon">
            <i class="fas fa-chart-line"></i>
        </div>

        <div>
            <h3>Company Statistics</h3>
            <span>Numbers shown on your About Us page</span>
        </div>

    </div>


    <div class="about-card-body">

        <div class="about-grid">


            <div class="about-group about-stat">

                <label>Years Experience</label>

                <input
                    type="text"
                    name="experience"
                    class="about-input"
                    placeholder="10+"
                >

                <i class="fas fa-calendar about-stat-icon"></i>

            </div>


            <div class="about-group about-stat">

                <label>Happy Customers</label>

                <input
                    type="text"
                    name="customers"
                    class="about-input"
                    placeholder="10,000+"
                >

                <i class="fas fa-users about-stat-icon"></i>

            </div>


            <div class="about-group about-stat">

                <label>Total Products</label>

                <input
                    type="text"
                    name="products_count"
                    class="about-input"
                    placeholder="500+"
                >

                <i class="fas fa-box about-stat-icon"></i>

            </div>


            <div class="about-group about-stat">

                <label>Orders Delivered</label>

                <input
                    type="text"
                    name="orders_delivered"
                    class="about-input"
                    placeholder="25,000+"
                >

                <i class="fas fa-shopping-cart about-stat-icon"></i>

            </div>


        </div>

    </div>

</div>


<!-- =====================================
     OUR VALUES
===================================== -->

<div class="about-admin-card">

    <div class="about-card-title">

        <div class="about-card-title-icon">
            <i class="fas fa-heart"></i>
        </div>

        <div>
            <h3>Our Values</h3>
            <span>Core values of your business</span>
        </div>

    </div>


    <div class="about-card-body">

        <div class="about-grid">


            <div class="about-group">

                <label>Value 1</label>

                <input
                    type="text"
                    name="value_1"
                    class="about-input"
                    placeholder="Quality"
                >

            </div>


            <div class="about-group">

                <label>Value 2</label>

                <input
                    type="text"
                    name="value_2"
                    class="about-input"
                    placeholder="Trust"
                >

            </div>


            <div class="about-group">

                <label>Value 3</label>

                <input
                    type="text"
                    name="value_3"
                    class="about-input"
                    placeholder="Customer First"
                >

            </div>


            <div class="about-group">

                <label>Value 4</label>

                <input
                    type="text"
                    name="value_4"
                    class="about-input"
                    placeholder="Innovation"
                >

            </div>


        </div>

    </div>

</div>


<!-- =====================================
     CTA & STATUS
===================================== -->

<div class="about-admin-card">

    <div class="about-card-title">

        <div class="about-card-title-icon">
            <i class="fas fa-link"></i>
        </div>

        <div>
            <h3>Call To Action</h3>
            <span>Button displayed at the bottom of About Us</span>
        </div>

    </div>


    <div class="about-card-body">

        <div class="about-grid">


            <div class="about-group">

                <label>Button Text</label>

                <input
                    type="text"
                    name="button_text"
                    class="about-input"
                    placeholder="Shop Now"
                >

            </div>


            <div class="about-group">

                <label>Button Link</label>

                <input
                    type="text"
                    name="button_link"
                    class="about-input"
                    placeholder="/products"
                >

            </div>


            <div class="about-group">

                <label>Status</label>

                <select
                    name="status"
                    class="about-input"
                >

                    <option value="active">
                        Active
                    </option>

                    <option value="inactive">
                        Inactive
                    </option>

                </select>

            </div>


        </div>

    </div>


    <!-- FOOTER -->

    <div class="about-form-footer">

        <a
            href="{{ route('about.index') }}"
            class="about-cancel-btn"
        >
            Cancel
        </a>


        <button
            type="submit"
            class="about-save-btn"
        >
            <i class="fas fa-save"></i>
            Save About Us
        </button>

    </div>

</div>


</form>

</div>

</div>


<script>

document
.getElementById('aboutImage')
.addEventListener('change', function(event) {

    const file = event.target.files[0];

    const preview =
        document.getElementById('aboutPreview');

    const placeholder =
        document.getElementById('aboutPlaceholder');


    if (file) {

        const reader = new FileReader();

        reader.onload = function(e) {

            preview.src = e.target.result;

            preview.style.display = 'block';

            placeholder.style.display = 'none';

        };

        reader.readAsDataURL(file);

    }

});

</script>

@endsection
