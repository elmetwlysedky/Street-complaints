

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
                <li class="list-inline-item"><a href="#" class="text-muted"><i class="icon-comment font-size-base "></i> : {{$Blog->blog_comment->count()}}</a></li>
                <li class="list-inline-item"><a href="#" class="text-muted"><i class="icon-eye font-size-base "></i> : {{$Blog->view}}</a></li>
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

        <h5 class="font-weight-semibold">Blog Comments</h5>
        @foreach($Blog->Blog_comment as $Comment)

            <ul class="list-inline list-inline-dotted text-muted mb-3">
                <li class="list-inline-item"><a href="#" class="font-weight-semibold">{{$Comment->user->name}}</a></li>
                <li class="list-inline-item"><a href="{{route('Blog_comment.edit',$Comment->id)}}" class="text-muted">{{$Comment->comment}}</a></li>
                <li class="list-inline-item">{{$Comment->created_at->diffForhumans()}}</li>
            </ul>
        @endforeach
        <div class="mb-3">


            {!!Form::open(['route' => 'Blog_comment.store', 'class'=>'form-validate-jquery','method'=>'post','enctype'=>'multipart/form-data'])!!}

            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            <input type="hidden" name="blog_id" value="{{$Blog->id}}">

            <div class="form-group row">
                <label class="col-form-label col-lg-3">Add Comment<span class="text-danger">*</span></label>
                <div class="col-lg-9">
                    {!!Form::text('comment', null,['class'=>'form-control'])!!}
                </div>


            </div>
            <button type="submit" class="btn bg-teal-400 btn-labeled ">create</button>
            {!! Form::close() !!}



    </div>
</div>
<!-- /post -->


@endsection
