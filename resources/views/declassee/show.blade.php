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
                            <span class="card-title">Show Declassee</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('declassees.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Material Id:</strong>
                            {{ $declassee->materiel_id }}
                        </div>

                        <div class="form-group">
                            <strong>Motive:</strong>
                            {{ $declassee->motive }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
