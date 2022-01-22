 @extends('Dashboard.layouts.app')

@section('title')
Splash
@endsection




@section('js')

    <script src="/Dashboard/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="/Dashboard/global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="/Dashboard/global_assets/js/demo_pages/datatables_basic.js"></script>
@endsection



@section('content')

    <!-- Page header -->
    <div class="card">
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
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
                        <span class="breadcrumb-item active">Dashboard</span>
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
    </div>
    <!-- /page header -->


<!-- Content area -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Splash</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
         <code></code><strong> </strong>
        <a href="{{route('Splash.create')}}">
            <button class="btn bg-teal "><b><i class="icon-plus3"></i></b>
                Create City
            </button>
        </a>
    </div>


    <table class="table datatable-basic">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <div>
                @foreach ($Splash as $item )
                <tr>
                    <td>{{$item->description}}</td>
                    <td>
                        <img src="/storage/{{$item->photo}}" alt="" class="img-preview rounded"  style="width: 100px;height: 100px;">

                    </td>
                    <td>
                        <div class="list-icons">
                            <div class="list-icons-item dropdown">
                                <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route('Splash.show',[$item->id])}}" class="dropdown-item"><i class="icon-file-eye2 mr-3 icon"></i> show </a>
                                    <a href="{{route('Splash.edit',$item->id)}}" class="dropdown-item"><i class="icon-pencil7"></i> Edit </a>

                                    <div class="dropdown-divider"></div>
                                    <form action="{{route('Splash.destroy',$item->id)}}" method="POST"  >
                                        @csrf
                                        @method('DELETE')

                                    <button class="dropdown-item" type="submit"><i class="icon-bin"> </i>move to trash</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </div>
                @endforeach

            </tbody>
        </table>

    <!-- /media library -->


<!-- /content area -->





@endsection




