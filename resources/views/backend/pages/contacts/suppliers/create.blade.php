@extends('frontend.ims.layouts.app')
@section('title','IMS | Add Supplier')


@section('content')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Contact -> Supplier</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                <li class="breadcrumb-item active">Suppliers</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 mb-3 ">
                                    <!-- <div class="mb-3"> -->
                                    <label class="form-label" for="supplier-company-input">Supplier Company <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="supplier-company-input"
                                        placeholder="Enter supplier company Name">
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <label class="form-label" for="contact-person-input">Contact Person</label>
                                    <input type="text" class="form-control" id="contact-person-input"
                                        placeholder="Enter contact-person">
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <label class="form-label" for="mobile-input">Mobile</label>
                                    <input type="text" class="form-control" id="mobile-input"
                                        placeholder="Enter Mobile number">
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <label class="form-label" for="email-input">Email</label>
                                    <input type="text" class="form-control" id="email-input"
                                        placeholder="Enter email address">
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <label class="form-label" for="opening-balance-input">Opening Balance</label>
                                    <input type="text" class="form-control" id="opening-balance-input"
                                        placeholder="Enter opening balance">
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="addressTextarea" class="form-label">Address <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="addressTextarea" rows="1"></textarea>
                                    </div>
                                </div>


                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-subdistrict-input" class="form-label">Subdistrict <span class="text-danger">*</span></label>
                                        <select class="form-select" data-choices data-choices-search-false
                                            id="choices-subdistrict-input">
                                            <option value="Please Select Subdistrict" selected>Please Select
                                                Subdistrict
                                            </option>
                                            <option value="Mymensingh">Mymensingh</option>
                                            <option value="Dhaka">Dhaka</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-district-input" class="form-label">District <span class="text-danger">*</span></label>
                                        <select class="form-select" data-choices data-choices-search-false
                                            id="choices-district-input">
                                            <option value="Please Select District" selected>Please Select District
                                            </option>
                                            <option value="Mymensingh">Mymensingh</option>
                                            <option value="Dhaka">Dhaka</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-division-input" class="form-label">Division <span class="text-danger">*</span></label>
                                        <select class="form-select" data-choices data-choices-search-false
                                            id="choices-division-input">
                                            <option value="Please Select Division" selected>Please Select Division
                                            </option>
                                            <option value="Mymensingh">Mymensingh</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Chattogram">Chattogram</option>
                                            <option value="Sylhet">Sylhet</option>
                                            <option value="Rajshahi">Rajshahi</option>
                                            <option value="Barishal">Barishal</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Rangpur">Rangpur</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <label class="form-label" for="remarks-input">Remarks</label>
                                    <input type="text" class="form-control" id="remarks-input"
                                        placeholder="Enter brand's remarks">
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-status-input" class="form-label">Status <span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" data-choices data-choices-search-false
                                            id="choices-status-input">
                                            <option value="Active" selected>Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->



                </div>
                <!-- end col -->

                <div class="col-lg-7">
                    <div class="text-end mb-4">
                        <!-- <button type="submit" class="btn btn-secondary w-sm">Draft</button> -->
                        <button type="submit" class="btn btn-success w-sm">Save</button>
                        <button type="reset" onclick="history.back()" class="btn btn-danger w-sm">Back</button>
                    </div>


                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    @include('frontend.ims.layouts.footer')

</div>
<!-- end main content-->

@endsection