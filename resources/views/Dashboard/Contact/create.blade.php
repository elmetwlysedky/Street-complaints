@extends('Dashboard.layouts.app')

@section('title')
Contact
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
        <h5 class="card-title">Send Message</h5>
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
        {!!Form::open(['route' => 'Contact.store', 'class'=>'form-validate-jquery','method'=>'post',])!!}

        <input type="hidden" name="name" value="{{auth()->user()->name}}">
        <input type="hidden" name="phone" value="{{auth()->user()->phone}}">
        <input type="hidden" name="email" value="{{auth()->user()->email}}">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group row">
            <label class="col-form-label col-lg-3">Address<span class="text-danger">*</span></label>
            <div class="col-lg-9">
                {!!Form::text('address', null,['class'=>'form-control','placeholder'=>'inter city name'])!!}

            </div>
        </div>

        <div class="form-group row">
            <label class="col-form-label col-lg-3">Message<span class="text-danger">*</span></label>
            <div class="col-lg-9">
        {!! Form::textarea('message', null, [
                'class'      => 'form-control',
                'rows'       => 1,
        ])!!}

            </div>
        </div>

        <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b>create</button>
        {!! Form::close() !!}
    </div>
</div>




@endsection
