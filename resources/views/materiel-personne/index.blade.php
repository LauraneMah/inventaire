@extends('layouts.app')

@section('template_title')
    Materiel Personne
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Materiel Personne') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('materiel-personnes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                                        <th>Matériel</th>
                                        <th>Personne relié</th>


                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materielPersonnes as $materielPersonne)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $materielPersonne->materiel->description }}</td>
                                            <td>{{ $materielPersonne->personne->name }}</td>

                                            <td>
                                                <form action="{{ route('materiel-personnes.destroy',$materielPersonne->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('materiel-personnes.show',$materielPersonne->id) }}"><i class="fa fa-fw fa-eye"></i> Afficher</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('materiel-personnes.edit',$materielPersonne->id) }}"><i class="fa fa-fw fa-edit"></i> Editer</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $materielPersonnes->links() !!}
            </div>
        </div>
    </div>
@endsection
