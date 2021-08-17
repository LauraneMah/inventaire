@extends('layouts.app')

@section('template_title')
    Mise à jour du matériel
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Mettre à jour le matériel</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('materiels.update', $materiel->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('materiel.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
