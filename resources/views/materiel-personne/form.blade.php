<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('materiel_id') }}
            {{ Form::select('materiel_id', $materielName, ['class' => 'form-control' . ($errors->has('materiel_id') ? ' is-invalid' : ''), 'placeholder' => 'Materiel Id']) }}
            {!! $errors->first('materiel_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('personne_id') }}
            {{ Form::select('personne_id', $personneName, ['class' => 'form-control' . ($errors->has('personne_id') ? ' is-invalid' : ''), 'placeholder' => 'Personne Id']) }}
            {!! $errors->first('personne_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</div>
