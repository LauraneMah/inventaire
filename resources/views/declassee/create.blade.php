@extends('layouts.app')

@section('template_title')
    Déclasser du matériel
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('declassees.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('declassee.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
