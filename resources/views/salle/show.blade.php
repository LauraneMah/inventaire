@extends('layouts.app')

@section('template_title')
    {{ $salle->name ?? 'Show Salle' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Salle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nom de la salle : </strong>
                            {{ $salle->name }}
                        </div>
                        <div class="form-group">
                            <strong>Numéro salle : </strong>
                            {{ $salle->number }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
