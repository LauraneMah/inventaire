<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('material_id') }}
            {{ Form::text('material_id', $declassee->material_id, ['class' => 'form-control' . ($errors->has('material_id') ? ' is-invalid' : ''), 'placeholder' => 'Material Id']) }}
            {!! $errors->first('material_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group" style="display: none;">
            {{ Form::label('stock') }}
            {{ Form::text('stock', $declassee->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('motive') }}
            {{ Form::text('motive', $declassee->motive, ['class' => 'form-control' . ($errors->has('motive') ? ' is-invalid' : ''), 'placeholder' => 'Motive']) }}
            {!! $errors->first('motive', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</div>
