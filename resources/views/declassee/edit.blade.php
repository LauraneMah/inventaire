@extends('layouts.app')

@section('template_title')
    Modifications des déclassements
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Modification d'un déclassement</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('declassees.update', $declassee->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('declassee.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
