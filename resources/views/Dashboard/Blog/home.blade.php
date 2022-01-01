

@extends('Dashboard.layouts.app')

@section('title')
    {{$Blog->name}}
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
                    <img src="/storage/{{$Blog->photo}}" class="img-fluid" alt="" style="height: 300px;">
                </a>
            </div>

            <h4 class="font-weight-semibold mb-1">
                <a href="#" class="text-default">{{$Blog->name}}</a>
            </h4>

            <ul class="list-inline list-inline-dotted text-muted mb-3">
                <li class="list-inline-item">{{$Blog->created_at->format('d/m/Y')}}</li>
                <li class="list-inline-item"><a href="#" class="text-muted">12 comments</a></li>
                <li class="list-inline-item"><a href="#" class="text-muted"><i class="icon-heart6 font-size-base text-pink mr-2"></i>{{$Blog->view}} : Views </a></li>
            </ul>
            <div class="mb-3">
{{--                <p>{{$Problem->tool}}</p>--}}
            </div>

        </div>

        <div class="row">
            <div class="col-lg-4">

            </div>

        </div>

        <div class="mb-4">
            <h5 class="font-weight-semibold">Blog discription</h5>
            <p>{{$Blog->description}}</p>
        </div>


    </div>
</div>
<!-- /post -->


@endsection
