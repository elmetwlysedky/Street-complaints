

@extends('Dashboard.layouts.app')

@section('title') Problem
    {{$Problem->name}}
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
                <a href="#" class="text-default">{{$Problem->name}}</a>
            </h4>

            <ul class="list-inline list-inline-dotted text-muted mb-3">
                <li class="list-inline-item">By <a href="#" class="text-muted">{{$Problem->user->name}}</a></li>
                <li class="list-inline-item">{{$Problem->created_at->format('d/m/Y')}}</li>
                <li class="list-inline-item"><a href="#" class="text-muted">12 comments</a></li>
                <li class="list-inline-item"><a href="#" class="text-muted"><i class="icon-heart6 font-size-base text-pink mr-2"></i> 281</a></li>
            </ul>
            <div class="mb-3">
                <p>{{$Problem->tool}}</p>
            </div>




                        @foreach ($Problem ->attachment as $item )
                        <img class="rounded-circle" src="/storage/{{$item->file_name}}" width="100" height="100" alt="">
                        @endforeach





        </div>

        <div class="row">
            <div class="col-lg-4">
                <ul class="list list-unstyled">

                    <li>
                        <i class="icon-checkmark3 text-success mr-2"></i>
                        {{$Problem->city->name}}

                    </li>
                    <li>
                        <i class="icon-checkmark3 text-success mr-2"></i>
                        {{$Problem->problem_destination->name}}
                    </li>

                    <li>
                        <i class="icon-checkmark3 text-success mr-2"></i>
                        {{$Problem->Reason->name}}
                    </li>

                    <li>
                        <i class="icon-checkmark3 text-success mr-2"></i>
                        {{$Problem->tool}}
                    </li>

                    <li>
                        <i class="icon-checkmark3 text-success mr-2"></i>
                        {{$Problem->causing}}
                    </li>

                </ul>
            </div>

        </div>

        <div class="mb-4">
            <h5 class="font-weight-semibold">Problem discription</h5>
            <p>{{$Problem->description}}</p>
        </div>


        <div class="form-group row">
            <label class="col-form-label col-lg-3">Add Comment<span class="text-danger">*</span></label>
            <div class="col-lg-9">
                {!!Form::text('causing', null,['class'=>'form-control'])!!}
            </div>
                <div class="col-lg-9">
                <input type="file" accept="image/*" name="photos[]" multiple>
                </div>

        </div>


    </div>
</div>
<!-- /post -->


@endsection
