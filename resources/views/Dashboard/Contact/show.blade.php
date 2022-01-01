
@extends('Dashboard.layouts.app')

@section('title') Problem
{{$Contact->name}}
@endsection

@section('js')

    <script src="/admins/global_assets/js/plugins/editors/ckeditor/ckeditor.js"></script>
    <script src="/admins/global_assets/js/plugins/media/fancybox.min.js"></script>
    <script src="/admins/global_assets/js/demo_pages/blog_single.js"></script>
@endsection



@section('content')


    <!-- Post -->
    <div class="card">
        <div class="card-body">
            <div class="mb-4">
                <div class="mb-3 text-center">
                    <a href="#" class="d-inline-block">
                        <img src="/storage/" class="img-fluid" alt="" style="height: 300px;">
                    </a>
                </div>

                <h4 class="font-weight-semibold mb-1">
                    <a href="#" class="text-default">{{$Contact->name}}</a>
                </h4>

                <ul class="list-inline list-inline-dotted text-muted mb-3">
                    <li class="list-inline-item">{{$Contact->created_at->diffForhumans()}}</li>
                    </ul>



            </div>

            <div class="row">
                <div class="col-lg-4">
                    <ul class="list list-unstyled">
                        <li>
                            <i class="icon-checkmark3 text-success mr-2"></i>
                            {{$Contact->email}}


                        </li>
                        <li>
                            <i class="icon-checkmark3 text-success mr-2"></i>
                            {{$Contact->phone}}
                        </li>
                        <li>
                            <i class="icon-checkmark3 text-success mr-2"></i>
                            {{$Contact->address}}
                        </li>
                    </ul>
                </div>

            </div>

            <div class="mb-4">
                <h5 class="font-weight-semibold">Message Text</h5>
                <p>{{$Contact->message}}</p>
            </div>


        </div>
    </div>
    <!-- /post -->


@endsection
