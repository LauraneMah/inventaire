@extends('layouts.app')

@section('template_title')
    Personne
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Personne') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('personnes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Name</th>
                                        <th>First Name</th>
                                        <th>Username</th>
                                        <th>Role Id</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personnes as $personne)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $personne->name }}</td>
                                            <td>{{ $personne->first_name }}</td>
                                            <td>{{ $personne->username }}</td>
                                            <td>{{ $personne->role->name }}</td>

                                            <td>
                                                <form action="{{ route('personnes.destroy',$personne->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('personnes.show',$personne->id) }}"><i class="fa fa-fw fa-eye"></i> Afficher</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('personnes.edit',$personne->id) }}"><i class="fa fa-fw fa-edit"></i> Editer</a>
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
                {!! $personnes->links() !!}
            </div>
        </div>
    </div>
@endsection
