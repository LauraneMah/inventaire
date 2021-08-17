@extends('layouts.app')

@section('template_title')
    {{ $declassee->name ?? 'Show Declassee' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Afficher déclassement</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('declassees.index') }}"> Retour</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Matériel : </strong>
                            {{ $declassee->materiel->description }}
                        </div>
                        <div class="form-group">
                            <strong>Raison : </strong>
                            {{ $declassee->motive }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
