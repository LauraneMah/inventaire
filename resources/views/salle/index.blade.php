@extends('layouts.app')

@section('template_title')
    Salle
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salle') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('salles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Nom de la salle</th>
                                        <th>Numéro de salle</th>



                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($salles as $salle)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $salle->name }}</td>
                                            <td>{{ $salle->number }}</td>

                                            <td>
                                                <form action="{{ route('salles.destroy',$salle->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('salles.show',$salle->id) }}"><i class="fa fa-fw fa-eye"></i> Afficher</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('salles.edit',$salle->id) }}"><i class="fa fa-fw fa-edit"></i> Editer</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Supprimer</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $salles->links() !!}
            </div>
        </div>
    </div>
@endsection
