@extends('layout')

@section('content')
    <div class="content">
        <div class="mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-left">
                            <strong class="card-title">Enregistrement</strong>
                        </div>
                        <div class="card-body">
                            <form action="/create" method="post" >
                                @csrf
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="form-control-label text-left">Nom : </label>
                                        <input type="text" class="form-control" value="{{old('nom')}}" name="nom">
                                        @if($errors->has('nom'))
                                            <p class="help is-danger"> {{ $errors->first('nom') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="form-control-label text-left">Prenom : </label>
                                        <input type="text" class="form-control" value="{{old('prenom')}}" name="prenom">
                                        @if($errors->has('prenom'))
                                            <p class="help is-danger"> {{ $errors->first('prenom') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="form-control-label text-left">Numero de téléphone : </label>
                                        <input type="text" class="form-control" value="{{old('telephone')}}" name="telephone">
                                        @if($errors->has('telephone'))
                                            <p class="help is-danger"> {{ $errors->first('telephone') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="form-control-label text-left">Adresse email : </label>
                                        <input type="email" class="form-control" value="{{old('adresse')}}" name="adresse">
                                        @if($errors->has('adresse'))
                                            <p class="help is-danger"> {{ $errors->first('adresse') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="form-control-label text-left">Pays : </label>
                                        <input type="text" class="form-control" value="{{old('pays')}}" name="pays">
                                        @if($errors->has('pays'))
                                            <p class="help is-danger"> {{ $errors->first('pays') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <a href="/" class="btn btn-secondary">Retourner à la liste</a>
                                <button type="reset" class="btn btn-danger">Réinitialiser</button>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
