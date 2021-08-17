@extends('layouts.app')

@section('template_title')
    Declassee
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Declassee') }}
                            </span>

                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>
                                        <th>Matériel</th>
                                        <th>Raison déclassement</th>



                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($declassees as $declassee)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $declassee->materiel->description }}</td>
                                            <td>{{ $declassee->motive }}</td>


                                            <td>
                                                <form action="{{ route('declassees.destroy',$declassee->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('declassees.show',$declassee->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    @csrf
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $declassees->links() !!}
            </div>
        </div>
    </div>
@endsection
