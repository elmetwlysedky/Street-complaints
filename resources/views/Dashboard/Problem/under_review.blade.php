 @extends('Dashboard.layouts.app')

@section('title')
 under Review Problems
@endsection




@section('js')

    <script src="/Dashboard/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="/Dashboard/global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="/Dashboard/global_assets/js/demo_pages/datatables_basic.js"></script>
@endsection



@section('content')


<!-- Content area -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Under Review Problems Table</h5>
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
        <a href="{{route('Problem.create')}}">
            <button class="btn bg-teal "><b><i class="icon-plus3"></i></b>
               Create Reason
            </button>
        </a>
    </div>


    <table class="table datatable-basic">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>complainant</th>
                    <th>City</th>
                    <th>problem destination</th>
                    <th>Reason</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <div>
                @foreach ($UnderReviewProblem as $item )
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->user->name}}</td>
                    <td>{{$item->city->name}}</td>
                    <td>{{$item->problem_destination->name}}</td>
                    <td>{{$item->Reason->name}}</td>
                    <td>{{$item->description}}</td>

                    <td>
                        <div class="list-icons">
                            <div class="list-icons-item dropdown">
                                <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route('Problem.show',[$item->id])}}" class="dropdown-item"><i class="icon-file-eye2 mr-3 icon"></i> show </a>
                                    <a href="{{route('Problem.edit',$item->id)}}" class="dropdown-item"><i class="icon-pencil7"></i> Edit </a>

                                    <div class="dropdown-divider"></div>
                                    <form action="{{route('Problem.destroy',$item->id)}}" method="POST"  >
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




