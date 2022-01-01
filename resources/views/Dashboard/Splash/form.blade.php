<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold"></legend>



    <div class="form-group row">
        <label class="col-form-label col-lg-3">Description<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('description', null,['class'=>'form-control','placeholder'=>'inter Item name'])!!}

        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">Splash Photo<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::file('photo',null,['class'=>'form-control'])!!}

        </div>
    </div>

</fieldset>

