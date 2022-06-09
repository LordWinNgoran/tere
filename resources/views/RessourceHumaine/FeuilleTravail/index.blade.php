@extends('layouts.backLayout.designadmin')

@section('content')

@php($Module='Ressource Humaine')
@php($titre='Liste des feuilles des travailleurs')

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
                                    @can('creer_feuille_travail')
                                    <a href="{{ route('feuille_travail.create') }}" align="right" class="btn btn-sm btn-primary font-weight-bolder right">
                                        <i class="la la-plus"></i>Ajouter une feuille de travail</a>
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

                                                                <th>Employe</th>
                                                                <th>Departement/service</th>
                                                                <th>Date du jour </th>
                                                                <th>Description de l'activité</th>
                                                                <th>Tranche_horaire </th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($datas as $data)
                                                            <tr>

                                                                <td>
                                                                    {{ $data->employes->Nom }}  {{ $data->employes->Prenom }}
                                                                </td>
                                                                <td>
                                                                    {{ $data->employes->postes->Departement }}
                                                                </td>
                                                                <td> {{ $data->Date_du_jour }}</td>
                                                                <td> {{ $data->Description_de_activité }}</td>
                                                                <td> {{ $data->Tranche_horaire }}</td>
                                                                <td>
                                                                    <a href="{{ route('feuille_travail.show',$data->id) }}" class="btn btn-warning btn-xs btn-clean btn-icon" title="Modifier"> Voir la feuille </a>
                                                                    <a href="{{ route('feuille_travail.edit',$data->id) }}" class="btn btn-warning btn-xs btn-clean btn-icon" title="Modifier"> <i class="fas fa-edit"></i> </a>

                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Employe</th>
                                                                <th>Departement/service</th>
                                                                <th>Date du jour </th>
                                                                <th>Description de l'activité</th>
                                                                <th>Tranche_horaire </th>
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
