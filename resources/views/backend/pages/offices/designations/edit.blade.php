@extends('frontend.ims.layouts.app')
@section('title','IMS | Edit Designation')


@section('content')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Designation</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Office</a></li>
                                <li class="breadcrumb-item active">Edit Designation</li>
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
                                    <label class="form-label" for="branch-title-input">Designation Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="branch-title-input"
                                        placeholder="Enter designation title">
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <label class="form-label" for="designation-description-input">Designation Description</label>
                                    <input type="text" class="form-control" id="designation-description-input"
                                        placeholder="Enter designation's description">
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-status-input" class="form-label">Status <span class="text-danger">*</span></label>
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