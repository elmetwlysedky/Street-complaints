@extends('Dashboard.layouts.app')

@section('title')
Blog
@endsection

@section('js')
<!-- Theme JS files -->
<script src="admin/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
<script src="admin/assets/js/app.js"></script>
<script src="admin/global_assets/js/demo_pages/form_inputs.js"></script>
<!-- /theme JS files -->
@endsection

@section('content')



<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Add Blog</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <p class="mb-4"> <strong></strong> <code></code>  </p>
        {!!Form::open(['route' => 'Blog.store', 'class'=>'form-validate-jquery','method'=>'post','enctype'=>'multipart/form-data'])!!}



        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <input type="hidden" name="view" value="1">

            @include('dashboard.Blog.form')

                <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b>create</button>
                {!! Form::close() !!}
    </div>
</div>




@endsection
