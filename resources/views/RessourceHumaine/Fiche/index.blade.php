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
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Telephone</th>
                                        <th>Poste</th>
                                        <th>Nationalité</th>
                                        <th>Sexe</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($emp as $employe)
                                    <tr>
                                        <td>{{ $employe->Nom }}</td>
                                        <td>
                                            {{ $employe->Prenom }}
                                        </td>
                                        <td>
                                            {{ $employe->Telephone }}
                                        </td>
                                        <td> {{ $employe->id_poste }}</td>
                                        <td> {{ $employe->Nationalité }}</td>
                                        <td> {{ $employe->Sexe }}</td>
                                        <td>
                                            <a href="{{ route('fiche_employe.show',$employe->id) }}" class="btn btn-info  btn-clean btn-icon" title="Modifier"> <i class="fas fa-folder"></i> voir la fiche</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Telephone</th>
                                        <th>Poste</th>
                                        <th>Nationalité</th>
                                        <th>Sexe</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
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
