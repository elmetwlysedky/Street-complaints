<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold"></legend>



    <div class="form-group row">
        <label class="col-form-label col-lg-3">Condition<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!! Form::textarea('condition', null, [
                'class'      => 'form-control',
                'rows'       => 1,
        ])!!}

        </div>
    </div>

</fieldset>


