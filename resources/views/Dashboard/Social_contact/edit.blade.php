@extends('Dashboard.layouts.app')

@section('title')
Edit Social Contact

@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Form Edit </h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <p class="mb-4"> <strong></strong> <code></code> </p>
        {!!Form::model($Social_contact, ['route' => ['Social_contact.update', $Social_contact->id],'class'=>'form-validate-jquery' ,'method'=>'PATCH'])!!}


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @include('dashboard.Social_contact.form')


                <button type="submit" class="btn bg-teal-300 btn-labeled btn-labeled-right"> update</button>
                {!! Form::close() !!}
    </div>
</div>

@endsection
