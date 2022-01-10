<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dashboard @yield('title')</title>



	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="/Dashboard/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="/Dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/Dashboard/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="/Dashboard/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="/Dashboard/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="/Dashboard/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="/Dashboard/global_assets/js/main/jquery.min.js"></script>
	<script src="/Dashboard/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="/Dashboard/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="/Dashboard/global_assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /core JS files -->


	<!-- Theme JS files -->
    <script src="/Dashboard/global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>
	<script src="/Dashboard/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="/Dashboard/global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="/Dashboard/global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="/Dashboard/global_assets/js/plugins/ui/fullcalendar/fullcalendar.min.js"></script>

	<script src="/Dashboard/assets/js/app.js"></script>
	<script src="/Dashboard/global_assets/js/demo_pages/user_pages_profile.js"></script>



</head>







<body class="sidebar-xs">

    <div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="../../../../global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-component-toggle" type="button">
				<i class="icon-unfold"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-component-toggle d-none d-md-block">
						<i class="icon-drag-right"></i>
					</a>
				</li>
			</ul>

			<span class="navbar-text ml-md-3">
				<span class="badge badge-mark border-orange-300 mr-2"></span>
				Morning, Victoria!
			</span>

			<ul class="navbar-nav ml-md-auto">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<i class="icon-make-group mr-2"></i>
						Connect
					</a>

					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-body p-2">
							<div class="row no-gutters">
								<div class="col-12 col-sm-4">
									<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
										<i class="icon-github4 icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Github</div>
									</a>

									<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
										<i class="icon-dropbox text-blue-400 icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dropbox</div>
									</a>
								</div>

								<div class="col-12 col-sm-4">
									<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
										<i class="icon-dribbble3 text-pink-400 icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dribbble</div>
									</a>

									<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
										<i class="icon-google-drive text-success-400 icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Drive</div>
									</a>
								</div>

								<div class="col-12 col-sm-4">
									<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
										<i class="icon-twitter text-info-400 icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Twitter</div>
									</a>

									<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
										<i class="icon-youtube text-danger icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Youtube</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<i class="icon-pulse2 mr-2"></i>
						Activity
					</a>

					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-size-sm line-height-sm text-uppercase font-weight-semibold">Latest activity</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-success-400 rounded-round btn-icon"><i class="icon-mention"></i></a>
									</div>

									<div class="media-body">
										<a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
										<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-pink-400 rounded-round btn-icon"><i class="icon-paperplane"></i></a>
									</div>

									<div class="media-body">
										Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>
										<div class="font-size-sm text-muted mt-1">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-blue rounded-round btn-icon"><i class="icon-plus3"></i></a>
									</div>

									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch in <span class="font-weight-semibold">Limitless</span> repository
										<div class="font-size-sm text-muted mt-1">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-purple-300 rounded-round btn-icon"><i class="icon-truck"></i></a>
									</div>

									<div class="media-body">
										Shipping cost to the Netherlands has been reduced, database updated
										<div class="font-size-sm text-muted mt-1">Feb 8, 11:30</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-warning-400 rounded-round btn-icon"><i class="icon-comment"></i></a>
									</div>

									<div class="media-body">
										New review received on <a href="#">Server side integration</a> services
										<div class="font-size-sm text-muted mt-1">Feb 2, 10:20</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-teal-400 rounded-round btn-icon"><i class="icon-spinner11"></i></a>
									</div>

									<div class="media-body">
										<strong>January, 2018</strong> - 1320 new users, 3284 orders, $49,390 revenue
										<div class="font-size-sm text-muted mt-1">Feb 1, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="font-size-sm line-height-sm text-uppercase font-weight-semibold text-grey mr-auto">All activity</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Clear list"><i class="icon-checkmark3"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-gear"></i></a>
							</div>
						</div>
					</div>
				</li>

				<li class="nav-item">
					<a href="#" class="navbar-nav-link">
						<i class="icon-switch2"></i>
						<span class="d-md-none ml-2">Logout</span>
					</a>
				</li>
			</ul>
		</div>
	</div>


	<!-- Page header -->
    <div class="page-header page-header-light mb-0">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">User Pages</span> - Profile Cover</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                        <i class="icon-bars-alt text-pink-300"></i>
                        <span>Statistics</span>
                    </a>
                    <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                        <i class="icon-calculator text-pink-300"></i>
                        <span>Invoices</span>
                    </a>
                    <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                        <i class="icon-calendar5 text-pink-300"></i>
                        <span>Schedule</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="user_pages_profile_cover.html" class="breadcrumb-item">User pages</a>
                    <span class="breadcrumb-item active">Profile cover</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    <a href="#" class="breadcrumb-elements-item">
                        <i class="icon-comment-discussion mr-2"></i>
                        Support
                    </a>

                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear mr-2"></i>
                            Settings
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                            <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                            <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->

		<!-- Main sidebar -->
    <div class="content">

            <!-- Inner container -->
        <div class="tab-pane fade active show" id="activity">

		<!-- Main content -->
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
				    		<span class="d-block">{{auth()->user()->role_string}}</span>
						</div>

						<div class="ml-md-3 mt-2 mt-md-0">
							<ul class="list-inline list-inline-condensed mb-0">
								<li class="list-inline-item"><a href="#" class="btn btn-light border-transparent"><i class="icon-file-picture mr-2"></i> Cover image</a></li>
								<li class="list-inline-item"><a href="#" class="btn btn-light border-transparent"><i class="icon-file-stats mr-2"></i> Statistics</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /cover area -->

			<!-- Profile info -->
{{--               {!!Form::model($profile, ['route' => ['userProfile.update', $profile->id],'class'=>'form-validate-jquery' ,'method'=>'PATCH'])!!}--}}

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
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">

{{--                                    <input type="text" value="{{profile->address}}" class="form-control">--}}

                                </div>
                                <div class="col-md-6">
                                    <label>bio</label>
{{--                                    <input type="text" value="{{$profile->bio}}" class="form-control">--}}
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>address</label>
{{--                                    <input type="text"  value="{{$profile->address}}" class="form-control">--}}
                                </div>
                                <div class="col-md-6">
                                    <label>gender</label>
                                    <select class="form-control form-control-select2" data-fouc>

{{--                                        <option value="1"{{$profile->gender == 1}}>male</option>--}}
{{--                                        <option value="0"{{$profile->gender == 0}}>female</option>--}}
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone #</label>
                                    <input type="text" value="{{auth()->user()->phone}}" class="form-control">
                                    <span class="form-text text-muted"></span>
                                </div>

                                <div class="col-md-6">
                                    <label>Upload profile image</label>
                                    <input type="file" class="form-input-styled" data-fouc name="photo">
                                    <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
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
        </div>
    </div>




</body>
</html>
