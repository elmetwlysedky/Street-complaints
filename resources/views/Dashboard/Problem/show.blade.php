
{{--                @foreach ($category->courses as $course )--}}
{{--                <tr>--}}
{{--                    <td>{{$course->en_name}}</td>--}}
{{--                    <td>{{$course->en_description}}</td>--}}
{{--                    <td>{{$course->price}}</td>--}}
{{--                    <td>--}}
{{--                        <a href="/admins/global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">--}}
{{--                            <img src="/admins/global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">--}}
{{--                        </a>--}}
{{--                    </td>--}}



{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <div class="list-icons">--}}
{{--                            <div class="list-icons-item dropdown">--}}
{{--                                <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">--}}
{{--                                    <i class="icon-menu9"></i>--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                    <a href="{{route('course.edit',$course->id)}}" class="dropdown-item"><i class="icon-pencil7"></i> Edit category</a>--}}

{{--                                    <div class="dropdown-divider"></div>--}}
{{--                                    <form action="{{route('course.destroy',$course->id)}}" method="POST"  >--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}

{{--                                    <button class="dropdown-item" type="submit"><i class="icon-bin"> </i>move to trash</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                @endforeach--}}

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
                <li class="list-inline-item">By <a href="#" class="text-muted">Eugene</a></li>
                <li class="list-inline-item">{{$Problem->created_at->format('d/m/Y')}}</li>
                <li class="list-inline-item"><a href="#" class="text-muted">12 comments</a></li>
                <li class="list-inline-item"><a href="#" class="text-muted"><i class="icon-heart6 font-size-base text-pink mr-2"></i> 281</a></li>
            </ul>
            <div class="mb-3">
                <p>{{$Problem->tool}}</p>
            </div>

            <div class="card card-body bg-light rounded-left-0 border-left-3 border-left-warning">
                <blockquote class="blockquote d-flex mb-0">
                    <div class="mr-3">
                        <img class="rounded-circle" src="/admins/global_assets/images/placeholders/placeholder.jpg" width="46" height="46" alt="">
                    </div>

                    <div>
                        <p class="mb-1">Dear far dove lynx inaudibly between after under after on some far warthog.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </div>
                </blockquote>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <ul class="list list-unstyled">
                    <li>
                        <i class="icon-checkmark3 text-success mr-2"></i>

                    </li>
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
                </ul>
            </div>

        </div>

        <div class="mb-4">
            <h5 class="font-weight-semibold">Problem discription</h5>
            <p>{{$Problem->description}}</p>
        </div>

        <div>
            <h5 class="font-weight-semibold">Out believe has request not how comfort evident</h5>

            <p class="mb-3">Up delight cousins we feeling minutes. Genius has looked end piqued spring. Down has rose feel find man. Learning day desirous informed expenses material returned six the. She enabled invited exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age out full gate bed day lose.</p>


        </div>
    </div>
</div>
<!-- /post -->


@endsection
