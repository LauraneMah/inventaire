<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('materiel_id') }}
            {{ Form::text('materiel_id', $materielSalle->materiel_id, ['class' => 'form-control' . ($errors->has('materiel_id') ? ' is-invalid' : ''), 'placeholder' => 'Materiel Id']) }}
            {!! $errors->first('materiel_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('salle_id') }}
            {{ Form::text('salle_id', $materielSalle->salle_id, ['class' => 'form-control' . ($errors->has('salle_id') ? ' is-invalid' : ''), 'placeholder' => 'salle Id']) }}
            {!! $errors->first('salle_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
