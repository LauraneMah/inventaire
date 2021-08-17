@extends('layouts.app')

@section('template_title')
    Matériel
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Materiel') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('materiels.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
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
                                        <th>Objet</th>
                                        <th>Type Matériel</th>


                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materiels as $materiel)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $materiel->description }}</td>
                                            <td>{{ $materiel->typeMateriel->name }}</td>


                                            <td>
                                                <form action="{{ route('materiels.destroy',$materiel->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('materiels.show',$materiel->id) }}"><i class="fa fa-fw fa-eye"></i> Afficher</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('materiels.edit',$materiel->id) }}"><i class="fa fa-fw fa-edit"></i> Editer</a>
                                                    <a class="btn btn-danger btn-sm" href="{{ route('declassees.create', $materiel->id) }}"><i class="fa fa-fw fa-trash"></i>Déclasser</a>
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
                {!! $materiels->links() !!}
            </div>
        </div>
    </div>
@endsection
