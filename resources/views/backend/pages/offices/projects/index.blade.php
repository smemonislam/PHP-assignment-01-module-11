@extends('frontend.ims.layouts.app')
@section('title','IMS | List of Projects')


@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Projects</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Office</a></li>
                                <li class="breadcrumb-item active">Projects</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->



            <div class="col-xl-12 col-lg-12">
                <div>
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row g-4">
                                <div class="col-sm-auto">
                                    <div>
                                        <a href="{{ asset('/project/create') }}" class="btn btn-success"
                                            id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Create
                                            Project</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Project Name</th>
                                        <th>Privacy</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>RAMK Soft Tech</td>
                                        <td>
                                            <div class="live-preview">
                                                <div class="d-flex flex-wrap gap-2">
                                                    <!-- <span class="badge rounded-pill bg-primary">Primary</span>
                                                    <span class="badge rounded-pill bg-secondary">Secondary</span> -->
                                                    <span class="badge rounded-pill bg-success">Public</span>
                                                    <!-- <span class="badge rounded-pill bg-info">Info</span>
                                                    <span class="badge rounded-pill bg-warning">Warning</span>
                                                    <span class="badge rounded-pill bg-danger">Danger</span>
                                                    <span class="badge rounded-pill bg-dark">Dark</span>
                                                    <span class="badge rounded-pill bg-light text-body">Light</span> -->
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge rounded-pill bg-success">Active</span>
                                        </td>
                                        <td>
                                            <!-- <a class="btn btn-primary btn-sm" href="{{asset('/project/view')}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a> -->
                                            <a class="btn btn-info btn-sm" href="{{asset('/project/edit')}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>2</td>
                                        <td>RAMK Design</td>
                                        <td>
                                            <div class="live-preview">
                                                <div class="d-flex flex-wrap gap-2">
                                                    <!-- <span class="badge rounded-pill bg-primary">Primary</span> -->
                                                    <!-- <span class="badge rounded-pill bg-secondary">Secondary</span> -->
                                                    <!-- <span class="badge rounded-pill bg-success">Public</span> -->
                                                    <!-- <span class="badge rounded-pill bg-info">Info</span> -->
                                                    <span class="badge rounded-pill bg-warning">Private</span>
                                                    <!-- <span class="badge rounded-pill bg-danger">Danger</span> -->
                                                    <!-- <span class="badge rounded-pill bg-dark">Dark</span> -->
                                                    <!-- <span class="badge rounded-pill bg-light text-body">Light</span> -->
                                                </div>
                                            </div>
                                        </td>
                                        <td>

                                            <span class="badge rounded-pill bg-danger">Inactive</span>
                                        </td>
                                        <td>
                                            <!-- <a class="btn btn-primary btn-sm" href="{{asset('/project/view')}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a> -->
                                            <a class="btn btn-info btn-sm" href="{{asset('/project/edit')}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>3</td>
                                        <td>RAMK Digital Warld</td>
                                        <td>
                                            <div class="live-preview">
                                                <div class="d-flex flex-wrap gap-2">
                                                    <!-- <span class="badge rounded-pill bg-primary">Primary</span>
                                                    <span class="badge rounded-pill bg-secondary">Secondary</span> -->
                                                    <span class="badge rounded-pill bg-success">Public</span>
                                                    <!-- <span class="badge rounded-pill bg-info">Info</span>
                                                    <span class="badge rounded-pill bg-warning">Warning</span>
                                                    <span class="badge rounded-pill bg-danger">Danger</span>
                                                    <span class="badge rounded-pill bg-dark">Dark</span>
                                                    <span class="badge rounded-pill bg-light text-body">Light</span> -->
                                                </div>
                                            </div>
                                        </td>
                                        <td>

                                            <span class="badge rounded-pill bg-success">Active</span>
                                        </td>
                                        <td>
                                            <!-- <a class="btn btn-primary btn-sm" href="{{asset('/project/view')}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a> -->
                                            <a class="btn btn-info btn-sm" href="{{asset('/project/edit')}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>4</td>
                                        <td>RAMK Village</td>
                                        <td>
                                            <div class="live-preview">
                                                <div class="d-flex flex-wrap gap-2">
                                                    <!-- <span class="badge rounded-pill bg-primary">Primary</span>
                                                    <span class="badge rounded-pill bg-secondary">Secondary</span> -->
                                                    <!-- <span class="badge rounded-pill bg-success">Public</span> -->
                                                    <span class="badge rounded-pill bg-info">Team</span>
                                                    <!-- <span class="badge rounded-pill bg-warning">Warning</span> -->
                                                    <!-- <span class="badge rounded-pill bg-danger">Danger</span> -->
                                                    <!-- <span class="badge rounded-pill bg-dark">Dark</span> -->
                                                    <!-- <span class="badge rounded-pill bg-light text-body">Light</span> -->
                                                </div>
                                            </div>
                                        </td>
                                        <td>

                                            <span class="badge rounded-pill bg-success">Active</span>
                                        </td>
                                        <td>
                                            <!-- <a class="btn btn-primary btn-sm" href="{{asset('/project/view')}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a> -->
                                            <a class="btn btn-info btn-sm" href="{{asset('/project/edit')}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>5</td>
                                        <td>RAMK</td>
                                        <td>
                                            <div class="live-preview">
                                                <div class="d-flex flex-wrap gap-2">
                                                    <!-- <span class="badge rounded-pill bg-primary">Primary</span>
                                                    <span class="badge rounded-pill bg-secondary">Secondary</span> -->
                                                    <span class="badge rounded-pill bg-success">Public</span>
                                                    <!-- <span class="badge rounded-pill bg-info">Info</span>
                                                    <span class="badge rounded-pill bg-warning">Warning</span>
                                                    <span class="badge rounded-pill bg-danger">Danger</span>
                                                    <span class="badge rounded-pill bg-dark">Dark</span>
                                                    <span class="badge rounded-pill bg-light text-body">Light</span> -->
                                                </div>
                                            </div>
                                        </td>
                                        <td>

                                            <span class="badge rounded-pill bg-danger">Inactive</span>
                                        </td>
                                        <td>
                                            <!-- <a class="btn btn-primary btn-sm" href="{{asset('/project/view')}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a> -->
                                            <a class="btn btn-info btn-sm" href="{{asset('/project/edit')}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Project Name</th>
                                        <th>Investor</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <!-- end card -->
                </div>
            </div>
            <!-- end col -->

        </div>
        <!-- container-fluid -->
    </div>


    @include('frontend.ims.layouts.footer')
</div>








@endsection