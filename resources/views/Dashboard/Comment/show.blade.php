


@extends('Dashboard.layouts.app')

@section('title') Problem
{{$Comment->Problem->name}}
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
                    <a href="#" class="text-default"></a>
                </h4>




                <div class="mb-4">
                    <h5 class="font-weight-semibold">comment : {{$Comment->user->name}}</h5>
                    <p>{{$Comment->content}}</p>
                </div>


                    <img class="rounded-circle" src="/storage/{{$Comment->file}}" width="100" height="100" alt="">






            </div>




            <h5 class="font-weight-semibold">Problem Comments</h5>

            @foreach($Comment->reply as $Reply)

                <ul class="list-inline list-inline-dotted text-muted mb-3">
                    <li class="list-inline-item"><a href="#" class="text-muted">{{$Reply->user->name}}</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted">{{$Reply->content}}</a></li>
                    <li class="list-inline-item"> <img class="rounded-circle" src="/storage/{{$Reply->file}}" width="40" height="40" alt=""></li>
                    <li class="list-inline-item">{{$Reply->created_at->diffForhumans()}}</li>

                    <td>
                        <div class="list-icons">
                            <div class="list-icons-item dropdown">
                                <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route('Reply.edit',$Reply->id)}}" class="dropdown-item"><i class="icon-pencil7"></i> Edit </a>

                                    <div class="dropdown-divider"></div>
                                    <form action="{{route('Reply.destroy',$Reply->id)}}" method="POST"  >
                                        @csrf
                                        @method('DELETE')

                                        <button class="dropdown-item" type="submit"><i class="icon-bin"> </i>move to trash</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </ul>
            @endforeach
            <div class="mb-3">




                {!!Form::open(['route' => 'Reply.store', 'class'=>'form-validate-jquery','method'=>'post','enctype'=>'multipart/form-data'])!!}

                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <input type="hidden" name="comment_id" value="{{$Comment->id}}">

                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Add Reply<span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        {!!Form::text('content', null,['class'=>'form-control'])!!}
                    </div>
                    <div class="col-lg-9">
                        <input type="file"  name="file" >
                    </div>

                </div>
                <button type="submit" class="btn bg-teal-400 btn-labeled ">create</button>
                {!! Form::close() !!}

            </div>
        </div>
        <!-- /post -->


@endsection
