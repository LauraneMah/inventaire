@extends('layouts.app')

@section('template_title')
    Update Materiel Personne
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Materiel Personne</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('materiel-personnes.update', $materielPersonne->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('materiel-personne.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
