@extends('backend.layout.main')

@section('title', 'Store Information')

@section('content')

<style>

/* ================================
   STORE INFORMATION SETTINGS
================================ */

.store-settings-page {
    min-height: 100vh;
    padding: 30px;
    background: #f5f6f8;
}

.store-settings-container {
    max-width: 1100px;
    margin: 0 auto;
}


/* HEADER */

.store-settings-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 25px;
}

.store-settings-title h2 {
    margin: 0;
    color: #202124;
    font-size: 28px;
    font-weight: 700;
}

.store-settings-title p {
    margin: 7px 0 0;
    color: #8b8f96;
    font-size: 14px;
}


/* MAIN CARD */

.store-settings-card {
    background: #fff;
    border: 1px solid #e5e6e8;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(0,0,0,.05);
}


/* CARD HEADER */

.store-settings-card-header {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 25px 30px;
    border-bottom: 1px solid #eeeeee;
}

.store-settings-icon {
    width: 46px;
    height: 46px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 11px;
    background: #f1f2f4;
    color: #222;
    font-size: 18px;
}

.store-settings-card-header h3 {
    margin: 0;
    color: #25262a;
    font-size: 18px;
}

.store-settings-card-header p {
    margin: 5px 0 0;
    color: #999;
    font-size: 12px;
}


/* FORM */

.store-settings-form {
    padding: 30px;
}

.store-settings-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.store-settings-group {
    margin-bottom: 5px;
}

.store-settings-group.full {
    grid-column: 1 / -1;
}

.store-settings-group label {
    display: block;
    margin-bottom: 8px;
    color: #37393e;
    font-size: 13px;
    font-weight: 600;
}


/* INPUT */

.store-settings-input {
    width: 100%;
    height: 46px;
    padding: 0 13px;
    border: 1px solid #dedfe2;
    border-radius: 8px;
    background: #fff;
    color: #333;
    font-size: 13px;
    outline: none;
    box-sizing: border-box;
    transition: .25s;
}

.store-settings-input::placeholder {
    color: #aaa;
}

.store-settings-input:focus {
    border-color: #222;
    box-shadow: 0 0 0 3px rgba(0,0,0,.06);
}


/* TEXTAREA */

.store-settings-textarea {
    height: 110px;
    padding: 12px 13px;
    resize: vertical;
}


/* ================================
   LOGO UPLOAD
================================ */

.store-logo-upload {
    display: flex;
    align-items: center;
    gap: 22px;
    padding: 20px;
    border: 1px dashed #d5d7db;
    border-radius: 12px;
    background: #fafafa;
}

.store-logo-preview {
    position: relative;
    width: 100px;
    height: 100px;
    flex-shrink: 0;
    border-radius: 13px;
    overflow: hidden;
    background: #fff;
    border: 1px solid #e2e3e5;
    display: flex;
    align-items: center;
    justify-content: center;
}

.store-logo-preview img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    display: none;
}

.store-logo-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #aaa;
    font-size: 32px;
}

.store-logo-content {
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.store-logo-content strong {
    color: #333;
    font-size: 14px;
}

.store-logo-content span {
    color: #999;
    font-size: 12px;
}

.store-logo-btn {
    width: fit-content;
    display: inline-flex;
    align-items: center;
    gap: 7px;
    margin-top: 5px;
    padding: 9px 15px;
    border-radius: 7px;
    background: #222;
    color: #fff !important;
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: .2s;
}

.store-logo-btn:hover {
    background: #000;
}

.store-logo-help {
    display: block;
    margin-top: 7px;
    color: #999;
    font-size: 11px;
}


/* ================================
   FOOTER
================================ */

.store-settings-footer {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 10px;
    margin-top: 30px;
    padding-top: 22px;
    border-top: 1px solid #eeeeee;
}


/* RESET */

.store-reset-btn {
    padding: 11px 20px;
    border: 1px solid #dedfe2;
    border-radius: 8px;
    background: #fff;
    color: #555;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
}

.store-reset-btn:hover {
    background: #f5f5f5;
}


/* SAVE */

.store-save-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 11px 22px;
    border: none;
    border-radius: 8px;
    background: #222;
    color: #fff;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: .25s;
}

.store-save-btn:hover {
    background: #000;
    transform: translateY(-1px);
}


/* ================================
   MOBILE
================================ */

@media (max-width: 700px) {

    .store-settings-page {
        padding: 15px;
    }

    .store-settings-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
    }

    .store-settings-card-header,
    .store-settings-form {
        padding: 20px;
    }

    .store-settings-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .store-settings-group.full {
        grid-column: auto;
    }

    .store-logo-upload {
        flex-direction: column;
        align-items: flex-start;
    }

    .store-settings-footer {
        flex-direction: column-reverse;
    }

    .store-save-btn,
    .store-reset-btn {
        width: 100%;
        justify-content: center;
    }
}

</style>


<div class="store-settings-page">

    <div class="store-settings-container">


        <!-- PAGE HEADER -->

        <div class="store-settings-header">

            <div class="store-settings-title">

                <h2>Store Information</h2>

                <p>
                    Manage your store details and contact information
                </p>

            </div>

        </div>


        <!-- CARD -->

        <div class="store-settings-card">


            <!-- CARD HEADER -->

            <div class="store-settings-card-header">

                <div class="store-settings-icon">
                    <i class="fas fa-store"></i>
                </div>

                <div>

                    <h3>
                        Store Information Settings
                    </h3>

                    <p>
                        Update your store information
                    </p>

                </div>

            </div>


            <!-- FORM -->

            <form
                action="#"
                method="POST"
                enctype="multipart/form-data"
                class="store-settings-form"
            >

                @csrf


                <div class="store-settings-grid">


                    <!-- STORE LOGO -->

                    <div class="store-settings-group full">

                        <label for="store_logo">
                            Store Logo
                        </label>

                        <div class="store-logo-upload">


                            <!-- PREVIEW -->

                            <div class="store-logo-preview">

                                <img
                                    id="storeLogoPreview"
                                    alt="Store Logo Preview"
                                >

                                <div
                                    class="store-logo-placeholder"
                                    id="logoPlaceholder"
                                >
                                    <i class="fas fa-store"></i>
                                </div>

                            </div>


                            <!-- UPLOAD -->

                            <div class="store-logo-content">

                                <strong>
                                    Upload Store Logo
                                </strong>

                                <span>
                                    Recommended size: 300 × 300px
                                </span>

                                <span>
                                    JPG, PNG or WEBP
                                </span>

                                <label
                                    for="store_logo"
                                    class="store-logo-btn"
                                >
                                    <i class="fas fa-upload"></i>
                                    Choose Image
                                </label>

                                <input
                                    type="file"
                                    id="store_logo"
                                    name="store_logo"
                                    accept="image/png,image/jpeg,image/webp"
                                    hidden
                                >

                            </div>

                        </div>

                        <small class="store-logo-help">
                            Maximum file size: 2MB
                        </small>

                    </div>


                    <!-- STORE NAME -->

                    <div class="store-settings-group">

                        <label for="store_name">
                            Store Name
                        </label>

                        <input
                            type="text"
                            id="store_name"
                            name="store_name"
                            class="store-settings-input"
                            placeholder="Enter store name"
                            required
                        >

                    </div>


                    <!-- STORE EMAIL -->

                    <div class="store-settings-group">

                        <label for="store_email">
                            Store Email
                        </label>

                        <input
                            type="email"
                            id="store_email"
                            name="store_email"
                            class="store-settings-input"
                            placeholder="store@example.com"
                        >

                    </div>


                    <!-- PHONE -->

                    <div class="store-settings-group">

                        <label for="phone">
                            Phone Number
                        </label>

                        <input
                            type="text"
                            id="phone"
                            name="phone"
                            class="store-settings-input"
                            placeholder="Enter phone number"
                        >

                    </div>


                    <!-- WEBSITE -->

                    <div class="store-settings-group">

                        <label for="website">
                            Website
                        </label>

                        <input
                            type="url"
                            id="website"
                            name="website"
                            class="store-settings-input"
                            placeholder="https://example.com"
                        >

                    </div>


                    <!-- ADDRESS -->

                    <div class="store-settings-group full">

                        <label for="address">
                            Store Address
                        </label>

                        <textarea
                            id="address"
                            name="address"
                            class="store-settings-input store-settings-textarea"
                            placeholder="Enter complete store address"
                        ></textarea>

                    </div>


                    <!-- CITY -->

                    <div class="store-settings-group">

                        <label for="city">
                            City
                        </label>

                        <input
                            type="text"
                            id="city"
                            name="city"
                            class="store-settings-input"
                            placeholder="Enter city"
                        >

                    </div>


                    <!-- STATE -->

                    <div class="store-settings-group">

                        <label for="state">
                            State
                        </label>

                        <input
                            type="text"
                            id="state"
                            name="state"
                            class="store-settings-input"
                            placeholder="Enter state"
                        >

                    </div>


                    <!-- PINCODE -->

                    <div class="store-settings-group">

                        <label for="pincode">
                            Pincode
                        </label>

                        <input
                            type="text"
                            id="pincode"
                            name="pincode"
                            class="store-settings-input"
                            placeholder="Enter pincode"
                        >

                    </div>


                    <!-- STORE DESCRIPTION -->

                    <div class="store-settings-group full">

                        <label for="description">
                            Store Description
                        </label>

                        <textarea
                            id="description"
                            name="description"
                            class="store-settings-input store-settings-textarea"
                            placeholder="Write a short description about your store..."
                        ></textarea>

                    </div>


                </div>


                <!-- FOOTER -->

                <div class="store-settings-footer">

                    <button
                        type="reset"
                        class="store-reset-btn"
                    >
                        Reset
                    </button>

                    <button
                        type="submit"
                        class="store-save-btn"
                    >
                        <i class="fas fa-save"></i>
                        Save Information
                    </button>

                </div>


            </form>

        </div>

    </div>

</div>


<!-- LOGO PREVIEW -->

<script>

document
    .getElementById('store_logo')
    .addEventListener('change', function(event) {

        const file = event.target.files[0];

        const preview =
            document.getElementById('storeLogoPreview');

        const placeholder =
            document.getElementById('logoPlaceholder');


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
