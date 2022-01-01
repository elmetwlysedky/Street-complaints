<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold"></legend>



    <div class="form-group row">
        <label class="col-form-label col-lg-3">URL Facebook<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('facebook', null,['class'=>'form-control','placeholder'=>'Inter URL Facebook'])!!}

        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">URL Twitter<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('twitter', null,['class'=>'form-control','placeholder'=>'Inter URL Twitter'])!!}

        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">URL Instagram<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('instagram', null,['class'=>'form-control','placeholder'=>'Inter URL Instagram'])!!}

        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">URL Snapchat<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('snap', null,['class'=>'form-control','placeholder'=>'Inter URL Snapchat'])!!}

        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">URL Whatsapp<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('whatsapp', null,['class'=>'form-control','placeholder'=>'Inter URL Whatsapp'])!!}

        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">Phone Number<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::number('phone', null,['class'=>'form-control','placeholder'=>'Inter Phone Number'])!!}

        </div>
    </div>

</fieldset>


