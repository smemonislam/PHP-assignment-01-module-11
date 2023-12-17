@extends('frontend.ims.layouts.app')
@section('title','IMS | List of Customers')


@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Contact -> Customer</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                <li class="breadcrumb-item active">Customers</li>
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
                                        <a href="{{ asset('/customer/create') }}" class="btn btn-success"
                                            id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Add
                                            Customer</a>
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
                                        <th>Customer Company</th>
                                        <th>Contact Person</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Reparks</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Adora Laboratories</td>
                                        <td>A Hasan Reza</td>
                                        <td>01937913457</td>
                                        <td>ahasanreza@gmail.com</td>
                                        <td>Supplier's Remarks</td>
                                        <td>
                                            <span class="badge rounded-pill bg-success">Active</span>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{asset('/supplier/view')}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{asset('/supplier/edit')}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Adora Laboratories</td>
                                        <td>Takbir Hasan</td>
                                        <td>01234569874</td>
                                        <td>takbir@gmail.com</td>
                                        <td>Supplier's Remarks</td>
                                        <td>
                                            <span class="badge rounded-pill bg-success">Active</span>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{asset('/supplier/view')}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{asset('/supplier/edit')}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>RAMK Soft Tech</td>
                                        <td>Halima Khatun</td>
                                        <td>01236589654</td>
                                        <td>halima@gmail.com</td>
                                        <td>Supplier's Remarks</td>
                                        <td>
                                            <span class="badge rounded-pill bg-success">Active</span>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{asset('/supplier/view')}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{asset('/supplier/edit')}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>RAMK Design</td>
                                        <td>Tanvir Hasan</td>
                                        <td>01666555889</td>
                                        <td>tanvir@gmail.com</td>
                                        <td>Supplier's Remarks</td>
                                        <td>
                                            <span class="badge rounded-pill bg-success">Active</span>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{asset('/supplier/view')}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{asset('/supplier/edit')}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Vorosa Limited</td>
                                        <td>AK Azad</td>
                                        <td>01245789653</td>
                                        <td>azad@gmail.com</td>
                                        <td>Supplier's Remarks</td>
                                        <td>
                                            <span class="badge rounded-pill bg-success">Active</span>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{asset('/supplier/view')}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{asset('/supplier/edit')}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
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