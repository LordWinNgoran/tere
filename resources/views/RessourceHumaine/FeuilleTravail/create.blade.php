@extends('layouts.backLayout.designadmin')
@section('content')
@php($Module ='Ressource Humaine')
@php($titre = 'Liste des feuilles des travailleurs')
@php($soustitre ='Ajouter une feuille de travailleur')

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
                                    <form class="multisteps-form__form" action="{{ route('feuille_travail.store') }}" method="POST">
                                        @csrf @method('POST')
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Employés</label>
                                                <select class="form-control select2"  name="id_employe" style="width: 100%;">
                                                    @foreach ($emp as $employe)
                                                    <option value="{{ $employe->id }}">{{ $employe->Nom }} {{ $employe->Prenom }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Description de l'activité</label>
                                                <input type="text" class="form-control" name="Description_de_activité" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Date du jour:</label>
                                                <div class="input-group date" >
                                                    <input type="date" name="Date_du_jour" class="form-control datetimepicker-input"  />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Tranche_horaire</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                  </div>
                                                  <input type="text" name="Tranche_horaire" class="form-control float-right" id="reservationtime">
                                                </div>
                                                <!-- /.input group -->
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
