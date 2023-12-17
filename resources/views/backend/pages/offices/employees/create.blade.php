@extends('frontend.ims.layouts.app')
@section('title','IMS | Add Employees')


@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Employees</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Office</a></li>
                                <li class="breadcrumb-item active">Add Employees</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->



            <div class="col-xl-12 col-lg-12">
                <div>
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Profile Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>A Hasan Reza</td>
                                        <td>01937913457</td>
                                        <td>ahasanreza@gmail.com</td>
                                        <td><span class="badge rounded-pill bg-success">Active</span></td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{asset('/profile/index')}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View Profile
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{asset('/project/edit')}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Send Invitation
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>2</td>
                                        <td>Takbir Hasan</td>
                                        <td>01937913457</td>
                                        <td>ahasanreza@gmail.com</td>
                                        <td><span class="badge rounded-pill bg-success">Active</span></td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{asset('/profile/index')}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View Profile
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{asset('/project/edit')}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Send Invitation
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>T Hasan Raif</td>
                                        <td>01937913457</td>
                                        <td>ahasanreza@gmail.com</td>
                                        <td><span class="badge rounded-pill bg-success">Active</span></td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{asset('/profile/index')}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View Profile
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{asset('/project/edit')}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Send Invitation
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Mr. Hasan</td>
                                        <td>01234569870</td>
                                        <td>mrhasan@gmail.com</td>
                                        <td><span class="badge rounded-pill bg-success">Active</span></td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{asset('/profile/index')}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View Profile
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{asset('/project/edit')}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Send Invitation
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Mr. Reza</td>
                                        <td>01934569872</td>
                                        <td>mrreza@gmail.com</td>
                                        <td><span class="badge rounded-pill bg-success">Active</span></td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{asset('/profile/index')}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View Profile
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{asset('/project/edit')}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Send Invitation
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