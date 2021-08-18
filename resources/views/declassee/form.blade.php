<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('motive') }}
            {{ Form::text('motive', $declassee->motive, ['class' => 'form-control' . ($errors->has('motive') ? ' is-invalid' : ''), 'placeholder' => 'Motive']) }}
            {!! $errors->first('motive', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materiel_id') }}
            {{ Form::text('materiel_id', $declassee->materiel_id, ['class' => 'form-control' . ($errors->has('materiel_id') ? ' is-invalid' : ''), 'placeholder' => 'Materiel Id']) }}
            {!! $errors->first('materiel_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
