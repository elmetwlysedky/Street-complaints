<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold"> </legend>


    <input type="hidden"name="user_id" value="{{auth()->user()->id}}">
    <input type="hidden" name="status" value="new">
{{--    <input type="hidden" name="problem_id" value="{{$this->Problem->id}}">--}}


    <div class="form-group row">
        <label class="col-form-label col-lg-3">problem name<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('name', null,['class'=>'form-control','placeholder'=>'Inter problem Name'])!!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">problem destination <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!! Form::select('problem_destination_id',$Problem_destinations , null, ['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">City <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!! Form::select('city_id',$Cities , null, ['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">Reason <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!! Form::select('reason_id',$Reasons , null, ['class'=>'form-control']) !!}
        </div>
    </div>


    <div class="form-group row">
        <label class="col-form-label col-lg-3">Problem Tool<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('tools', null,['class'=>'form-control'])!!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">problem Causing<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('causing', null,['class'=>'form-control'])!!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">problem Description<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('description', null,['class'=>'form-control','placeholder'=>'Inter problem Description'])!!}

        </div>
    </div>


    <div class="form-group row">
        <label class="col-form-label col-lg-3">problem Photo<span class="text-danger">*</span></label>
        <div class="col-lg-9">
{{--            {!!Form::file('file_name[]',null,['multiple' =>true,'class'=>'form-control'])!!}--}}
            <input type="file"  name="photos[]" multiple>
        </div>
    </div>


</fieldset>
