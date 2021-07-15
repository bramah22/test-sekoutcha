@extends('layout')

@section('content')

    <div class="content">
        <div class="animated fadeIn mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-left">
                            <strong class="card-title">Annuaire Sekoutcha</strong>
                            <a href="/create"
                                type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#mediumModal" style="float: right">
                                <i class="fa fa-plus"></i> Ajouter une adresse
                            </a>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Telephone</th>
                                    <th>email</th>
                                    <th>Pays</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($annuaires as $a)
                                    <tr>
                                        <td>{{$a->nom}}</td>
                                        <td>{{$a->prenom}}</td>
                                        <td>{{$a->telephone}}</td>
                                        <td>{{$a->adresse}}</td>
                                        <td>{{$a->pays}}</td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#mediumModal">
                                                <i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="modifier les informations"></i> Modifier
                                            </a>
                                            <a href="" class="btn btn-info btn-sm" >
                                                <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Détails du Pays"></i> Infos
                                            </a>
                                            <a href="{{$a->id}}/delete" class="btn btn-danger btn-sm" >
                                                <i class="fa fa-delete-circle" data-toggle="tooltip" data-placement="top" title="Supprimer le Pays"></i> Supprimer
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Voulez-vous vraiment supprimer ?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
