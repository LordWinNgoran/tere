@extends('layouts.backLayout.designadmin')

@section('content')

@php($Module='Ressource Humaine')
@php($titre='Liste des contrats')

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

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-10">
                                    <h3 class="card-title">{{$titre}}</h3>
                                </div>
                                <div class="col-2">

                                    @can('creer_contrats')
                                    <a href="{{ route('Contrats.create') }}" align="right" class="btn btn-sm btn-primary font-weight-bolder right">
                                        <i class="la la-plus"></i>Ajouter un contrat</a>
                                    @endcan
                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <table id="example2" class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>type contrats</th>
                                                                <th>Employe</th>
                                                                <th>Salaire Mensuel</th>
                                                                <th>Date Debut </th>
                                                                <th>Date Fin</th>
                                                                <th>Heur de travail </th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($contrats as $contrat)
                                                            <tr>
                                                                <td>{{ $contrat->type_contrat->libelle_type_contrat }}</td>
                                                                <td>
                                                                    {{ $contrat->employe->Nom }}  {{ $contrat->employe->Prenom }}
                                                                </td>
                                                                <td>
                                                                    {{ $contrat->Salaire_Mensuel }}
                                                                </td>
                                                                <td> {{ $contrat->Date_Debut_Contrat }}</td>
                                                                <td> {{ $contrat->Date_Fin_Contrat }}</td>
                                                                <td> {{ $contrat->Nombre_Heures_de_Travail_Semaine }}</td>

                                                                <td>

                                                                    <a href="{{ route('Contrats.edit',$contrat->id) }}" class="btn btn-warning btn-xs btn-clean btn-icon" title="Modifier"> <i class="fas fa-edit"></i> </a>

                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>type contrats</th>
                                                                <th>Employe</th>
                                                                <th>Salaire Mensuel</th>
                                                                <th>Date Debut </th>
                                                                <th>Date Fin</th>
                                                                <th>Heur de travail </th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->


                                            <!-- /.card -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.container-fluid -->
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
