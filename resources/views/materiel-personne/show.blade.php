@extends('layouts.app')

@section('template_title')
    {{ $materielPersonne->name ?? 'Show Materiel Personne' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Afficher liaison Materiel-Personne</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materiel-personnes.index') }}"> Retour</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Matériel Id:</strong>
                            {{ $materielPersonne->materiel_id }}
                        </div>
                        <div class="form-group">
                            <strong>Personne Id:</strong>
                            {{ $materielPersonne->personne_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
