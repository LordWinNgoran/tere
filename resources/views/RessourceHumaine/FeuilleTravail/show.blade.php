@extends('layouts.backLayout.designadmin')

@section('content')

@php($Module='Ressource Humaine')
@php($titre='feuille de travail')

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
                        <li class="breadcrumb-item active">{{$titre}} de {{ $data->employes->Nom }}</li>
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

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-10">
                                    <h3 class="card-title">{{$titre}} </h3>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
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
                                                            Feuille de travail de {{ $data->employes->Nom }}
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
                                                                <td>{{ $data->employes->Nom }} {{ $data->employes->Prenom }}</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>

                                                                <td><strong>Entreprise: </strong></td>
                                                                <td>{{ $data->employes->Entreprise }}</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>

                                                                <td><strong>Data du jour : </strong></td>
                                                                <td>{{ $data->Date_du_jour }}</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>

                                                                <td><strong>Description de l'activité : </strong></td>
                                                                <td>{{ $data->Description_de_activité }}</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <tr>

                                                                    <td><strong>Tranche horaire: </strong></td>
                                                                    <td>{{ $data->Tranche_horaire }}</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>

                                                                <td><strong>Telephone : </strong></td>
                                                                <td>{{ $data->employes->Telephone }}</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>

                                                                <td><strong>Telephone : </strong></td>
                                                                <td>{{ $data->employes->Telephone }}</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Email : </strong></td>
                                                                <td>{{ $data->employes->Email }}</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <td><strong>Poste : </strong></td>
                                                                <td>{{ $data->employes->postes->Departement }}</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <td><strong>Poste : </strong></td>
                                                                <td>{{ $data->employes->postes->Poste_occupé }}</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <td><strong>Superieur Hierarchique : </strong></td>
                                                                <td>{{ $data->employes->postes->Superieur_Hierarchique }}</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>



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
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


</div>





@endsection
