@extends('layouts.backLayout.designadmin')

@section('content')

@php($Module='Ressource Humaine')
@php($titre='Liste des fiche des employés')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-12">
                <div class="col-sm-6">
                    <h1>{{$titre}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{$Module}}</a></li>
                        <li class="breadcrumb-item active">{{$titre}}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>



    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
            @endif
            @foreach ($fiche as $fiche_emp)
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Main content -->
                            <div class="invoice p-3 mb-3">
                                <!-- title row -->
                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            Données professionnelles
                                            <small class="float-right">Date: {{ Now() }}</small>
                                        </h4>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">

                                        <tbody>
                                            <tr>

                                                <td><strong>Nom et prenom : </strong></td>
                                                <td>{{ $fiche_emp->employe->Nom }} {{ $fiche_emp->employe->Prenom }}.</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>

                                                <td><strong>Entreprise: </strong></td>
                                                <td>{{ $fiche_emp->employe->Entreprise }}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>

                                                <td><strong>Type contrat: </strong></td>
                                                <td>{{ $fiche_emp->type_contrat->libelle_type_contrat }}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>

                                                <td><strong>Telephone : </strong></td>
                                                <td>{{ $fiche_emp->employe->Telephone }}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email : </strong></td>
                                                <td>{{ $fiche_emp->employe->Email }}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Diplôme : </strong></td>
                                                <td>{{ $fiche_emp->employe->Diplôme }}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Spécialité : </strong></td>
                                                <td>{{ $fiche_emp->employe->Spécialité }}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Poste : </strong></td>
                                                <td>{{ $fiche_emp->employe->postes->Departement }}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td><strong>Poste : </strong></td>
                                                <td>{{ $fiche_emp->employe->postes->Poste_occupé }}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td><strong>Superieur Hierarchique : </strong></td>
                                                <td>{{ $fiche_emp->employe->postes->Superieur_Hierarchique }}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Vehicule de service : </strong></td>
                                                <td>{{ $fiche_emp->employe->postes->Vehicule_de_service }}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-12 mt-4">
                                    <h4>
                                        Données personnelles

                                    </h4>
                                </div>
                                <table class="table table-striped">

                                    <tbody>
                                        <tr>

                                            <td><strong>Nationalité : </strong></td>
                                            <td>{{ $fiche_emp->employe->Nationalité }} </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>

                                            <td><strong>Numero CNI: </strong></td>
                                            <td>{{ $fiche_emp->employe->Numero_CNI }}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                        <tr>

                                            <td><strong>Numero Passport: </strong></td>
                                            <td>{{ $fiche_emp->employe->Numero_Passport }}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>

                                            <td><strong>Date de Naissance : </strong></td>
                                            <td>{{ $fiche_emp->employe->Date_de_Naissance }}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Lieu de Naissance : </strong></td>
                                            <td>{{ $fiche_emp->employe->Lieu_de_Naissance }}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Lieu de residence : </strong></td>
                                            <td>{{ $fiche_emp->employe->Lieu_de_residence }}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Sexe : </strong></td>
                                            <td>{{ $fiche_emp->employe->Sexe }}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Statut Matrimonial : </strong></td>
                                            <td>{{ $fiche_emp->employe->Statut_Matrimonial }}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <td><strong>Nombre enfants : </strong></td>
                                            <td>{{ $fiche_emp->employe->Nombre_enfants }}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>


                                    </tbody>
                                </table>

                                <div class="col-12 mt-4">
                                    <h4>
                                        Contrat
                                    </h4>
                                </div>
                                <table class="table table-striped">

                                    <tbody>
                                        <tr>

                                            <td><strong>Salaire Mensuel : </strong></td>
                                            <td>{{ $fiche_emp->Salaire_Mensuel }} </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>

                                            <td><strong>Date_Debut_Contrat : </strong></td>
                                            <td>{{ $fiche_emp->Date_Debut_Contrat }}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                        <tr>

                                            <td><strong>Date_Fin_Contrat : </strong></td>
                                            <td>{{ $fiche_emp->Date_Fin_Contrat }}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>

                                            <td><strong>Nombre_Heures_de_Travail_Semaine: </strong></td>
                                            <td>{{ $fiche_emp->Nombre_Heures_de_Travail_Semaine }} heure(s)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- /.row -->

                                <!-- this row will not appear when printing -->
                                <div class="row no-print">
                                    <div class="col-12">

                                        <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                            <i class="fas fa-download"></i> Generate PDF
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.invoice -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            @endforeach

            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


</div>





@endsection
