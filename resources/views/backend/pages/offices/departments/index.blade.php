@extends('frontend.ims.layouts.app')
@section('title','IMS | List of Departments')


@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Departments</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Office</a></li>
                                <li class="breadcrumb-item active">Departments</li>
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
                                        <a href="{{ asset('/department/create') }}" class="btn btn-success"
                                            id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Create
                                            Departments</a>
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
                                        <th>Department Name</th>
                                        <th>Department's Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>IT</td>
                                        <td>Information Technology</td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="{{asset('/department/edit')}}">
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
                                        <td>1</td>
                                        <td>IT</td>
                                        <td>Information Technology</td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="{{asset('/department/edit')}}">
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
                                        <td>1</td>
                                        <td>IT</td>
                                        <td>Information Technology</td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="{{asset('/department/edit')}}">
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
                                        <td>1</td>
                                        <td>IT</td>
                                        <td>Information Technology</td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="{{asset('/department/edit')}}">
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
                                        <td>1</td>
                                        <td>IT</td>
                                        <td>Information Technology</td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="{{asset('/department/edit')}}">
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