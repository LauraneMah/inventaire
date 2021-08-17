@extends('layouts.app')

@section('template_title')
    {{ $materielSalle->name ?? 'Show Materiel Salle' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Materiel Salle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materiel-salles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>ID Matériel:</strong>
                            {{ 'materiel_id',$materielSalle->materiel_id }}
                        </div>
                        <div class="form-group">
                            <strong>Salle Id:</strong>
                            {{ $materielSalle->salle_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
