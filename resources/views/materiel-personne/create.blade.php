@extends('layouts.app')

@section('template_title')
    Liaison Matériel Personne
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Creation d'une liaison</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('materiel-personnes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('materiel-personne.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
