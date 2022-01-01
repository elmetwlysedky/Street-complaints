
@extends('Dashboard.layouts.app')

@section('title')
    {{$city->name}}
@endsection

@section('js')

    <script src="/admins/global_assets/js/plugins/editors/ckeditor/ckeditor.js"></script>
    <script src="/admins/global_assets/js/plugins/media/fancybox.min.js"></script>
    <script src="/admins/global_assets/js/demo_pages/blog_single.js"></script>
@endsection



@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">

            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>



    <table class="table datatable-basic">
        <thead>
        <tr>
            <th>Name</th>
            <th>complainant</th>
            <th>problem destination</th>
            <th>Reason</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <div>
            @foreach ($city -> Problem as $item )
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->user->name}}</td>
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

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
        </div>
        @endforeach

        </tbody>
    </table>


@endsection
