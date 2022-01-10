
@extends('Dashboard.layouts.app')

@section('title') Problem
{{auth()->user()->name}}
@endsection

@section('js')

    <script src="/admins/global_assets/js/plugins/editors/ckeditor/ckeditor.js"></script>
    <script src="/admins/global_assets/js/plugins/media/fancybox.min.js"></script>
    <script src="/admins/global_assets/js/demo_pages/blog_single.js"></script>
@endsection



@section('content')

    <div class="content-wrapper">

        <!-- Cover area -->
        <div class="profile-cover">
            <div class="profile-cover-img" style="background-image: url(/Dashboard/global_assets/images/placeholders/cover.jpg)"></div>
            <div class="media align-items-center text-center text-md-left flex-column flex-md-row m-0">
                <div class="mr-md-3 mb-2 mb-md-0">
                    <a href="#" class="profile-thumb">
                        {{--								<img src="/storage/{{$profile->photo}}" class="border-white rounded-circle" width="48" height="48" alt="">--}}
                    </a>
                </div>

                <div class="media-body text-white">
                    <h1 class="mb-0">{{auth()->user()->name}}</h1>
                </div>

                <div class="ml-md-3 mt-2 mt-md-0">
                    <ul class="list-inline list-inline-condensed mb-0">
                        <li class="list-inline-item"><a href="#" class="btn btn-light border-transparent"><i class="icon-file-picture mr-2"></i> Cover image</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /cover area -->

        <!-- Profile info -->
     {!!Form::open(['route' => 'Profile.update','class'=>'form-validate-jquery' ,'method'=>'post','enctype'=>'multipart/form-data'])!!}

        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Profile information</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="#">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Username</label>
                                <input type="text" value="{{auth()->user()->name}}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>email</label>
                                <input type="text" value="{{auth()->user()->email}}" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <br>
                                <label>phone</label>
                                <input type="text" value="{{auth()->user()->phone}}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>City</label>
                                <input type="text" value="{{auth()->user()->city->name}}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>bio</label>
                                    <input type="text" name="about" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>gender</label>
                                <select class="form-control form-control-select2" name="gender">
                                       <option value="1">male</option>
                                       <option value="0">female</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Upload profile image</label>
                                <input type="file" class="form-control"  name="photo">
                                <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Upload Back-ground image</label>
                                <input type="file" class="form-control"  name="back_ground">
                                <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                            </div>

                            <div class="col-md-6">
                                <br>
                                <label>Date of Birth:</label>
                                    <input type="date" class="form-control" name="birth_of_date">
                                </div>


                        </div>
                    </div>
                      <div class="text-right">
                          <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    {!! Form::close() !!}
    <!-- /profile info -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card border-left-3 border-left-danger rounded-left-0">
                    <div class="card-body">
                        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                            <div>
                                <h6 class="font-weight-semibold">Leonardo Fellini</h6>
                                <ul class="list list-unstyled mb-0">
                                    <li>Invoice #: &nbsp;0028</li>
                                    <li>Issued on: <span class="font-weight-semibold">2015/01/25</span></li>
                                </ul>
                            </div>

                            <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                                <h6 class="font-weight-semibold">$8,750</h6>
                                <ul class="list list-unstyled mb-0">
                                    <li>Method: <span class="font-weight-semibold">SWIFT</span></li>
                                    <li class="dropdown">
                                        Status: &nbsp;
                                        <a href="#" class="badge bg-danger-400 align-top dropdown-toggle" data-toggle="dropdown">Overdue</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item active"><i class="icon-alert"></i> Overdue</a>
                                            <a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
                                            <a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
                                            <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                            <span>
                                <span class="badge badge-mark border-danger mr-2"></span>
                                Due:
                                <span class="font-weight-semibold">2015/02/25</span>
                            </span>

                        <ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
                            <li class="list-inline-item">
                                <a href="#" class="text-default"><i class="icon-eye8"></i></a>
                            </li>
                            <li class="list-inline-item dropdown">
                                <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
                                    <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card border-left-3 border-left-success rounded-left-0">
                    <div class="card-body">
                        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                            <div>
                                <h6 class="font-weight-semibold">Rebecca Manes</h6>
                                <ul class="list list-unstyled mb-0">
                                    <li>Invoice #: &nbsp;0027</li>
                                    <li>Issued on: <span class="font-weight-semibold">2015/02/24</span></li>
                                </ul>
                            </div>

                            <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                                <h6 class="font-weight-semibold">$5,100</h6>
                                <ul class="list list-unstyled mb-0">
                                    <li>Method: <span class="font-weight-semibold">Paypal</span></li>
                                    <li class="dropdown">
                                        Status: &nbsp;
                                        <a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Paid</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
                                            <a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
                                            <a href="#" class="dropdown-item active"><i class="icon-checkmark3"></i> Paid</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
                                            <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                            <span>
                                <span class="badge badge-mark border-success mr-2"></span>
                                Due:
                                <span class="font-weight-semibold">2015/03/24</span>
                            </span>

                        <ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
                            <li class="list-inline-item">
                                <a href="#" class="text-default"><i class="icon-eye8"></i></a>
                            </li>
                            <li class="list-inline-item dropdown">
                                <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
                                    <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /invoices -->
    </div>



@endsection
