@extends('layouts.app')

@section('template_title')
    {{ $materiel->name ?? 'Show Materiel' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Matériel</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materiels.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $materiel->description }}
                        </div>
                        <div class="form-group">
                            <strong>Type Materiel</strong>
                            {{ $materiel->typeMateriel->name }}
                        </div>

                    </div>
                </div>



                    <div class="card">
                        <div class="card-body">



                            @foreach($associatedMateriels as $associatedMateriel)
                                <li> {{ $associatedMateriel->name  }}</li>
                            @endforeach

                        </div>
                    </div>



            </div>
        </div>
    </section>
@endsection
