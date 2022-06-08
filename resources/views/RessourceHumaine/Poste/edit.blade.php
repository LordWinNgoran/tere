@extends('layouts.backLayout.designadmin')
@section('content')
@php($Module ='Ressource Humaine')
@php($titre = 'Liste des postes')
@php($soustitre ='Modifier un poste')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $soustitre }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">{{ $Module }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ $titre }}</li>
                        <li class="breadcrumb-item active">{{ $soustitre }}</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            @if ($errors->any())
            <div class="alert alert-custom alert-danger fade show" role="alert">
                <div class="alert-text">
                    <strong>Echec :</strong> Veuillez renseigner les
                    informations du formulaire !
                </div>
                <div class="alert-close">
                    <button type="button" class="btn-sx close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
            @endif
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{ $soustitre }}</h3>
                        </div>
                        <div class="multisteps-form mt-5 mb-5">
                            <div class="row">
                                <div class="col-12 col-lg-8 m-auto">
                                    <form class="multisteps-form__form" action="{{ route('Poste.update',$poste->id) }}" method="POST">
                                        @csrf @method('PUT')
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="">Departement</label>
                                                <input type="text" class="form-control" name="Departement" value="{{ $poste->Departement }}" placeholder="Departement" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="">Poste occupé</label>
                                                <input type="text" class="form-control" name="Poste_occupé" value="{{ $poste->Poste_occupé }}" placeholder="Poste occupé" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="">Superieur Hierarchique</label>
                                                <input type="text" class="form-control" name="Superieur_Hierarchique" value="{{ $poste->Superieur_Hierarchique }}" placeholder="Superieur Hierarchique" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="Vehicule_de_service">Vehicule de service</label>
                                                <input type="text" class="form-control" name="Vehicule_de_service" value=" {{ $poste->Vehicule_de_service }}" placeholder="Vehicule de service" required />
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Envoyer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
