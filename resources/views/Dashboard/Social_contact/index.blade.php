 @extends('Dashboard.layouts.app')

@section('title')
Social Contacts

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
        <h5 class="card-title">Social Contacts</h5>
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
        <a href="{{route('Social_contact.create')}}">
            <button class="btn bg-teal "><b><i class="icon-plus3"></i></b>
                Create
            </button>
        </a>
    </div>


    <table class="table datatable-basic">
            <thead>
                <tr>
                    <th>Facebook</th>
                    <th>Twitter</th>
                    <th>Instagram</th>
                    <th>Snapchat</th>
                    <th>Whatsapp</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <div>
                @foreach ($Social_contact as $item )
                <tr>
                    <td>{{$item->facebook}}</td>
                    <td>{{$item->twitter}}</td>
                    <td>{{$item->instagram}}</td>
                    <td>{{$item->snap}}</td>
                    <td>{{$item->whatsapp}}</td>
                    <td>{{$item->phone}}</td>

                    </td>
                    <td>
                        <div class="list-icons">
                            <div class="list-icons-item dropdown">
                                <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route('Social_contact.show',[$item->id])}}" class="dropdown-item"><i class="icon-file-eye2 mr-3 icon"></i> show </a>
                                    <a href="{{route('Social_contact.edit',$item->id)}}" class="dropdown-item"><i class="icon-pencil7"></i> Edit </a>

                                    <div class="dropdown-divider"></div>
                                    <form action="{{route('Social_contact.destroy',$item->id)}}" method="POST"  >
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




