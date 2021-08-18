<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('materiel_id') }}
            {{ Form::select('materiel_id', $materielName, ['class' => 'form-control' . ($errors->has('materiel_id') ? ' is-invalid' : ''), 'placeholder' => 'Materiel Id']) }}
            {!! $errors->first('materiel_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('salle_id') }}
            {{ Form::select('salle_id', $salleName, ['class' => 'form-control' . ($errors->has('salle_id') ? ' is-invalid' : ''), 'placeholder' => 'salle Id']) }}
            {!! $errors->first('salle_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
