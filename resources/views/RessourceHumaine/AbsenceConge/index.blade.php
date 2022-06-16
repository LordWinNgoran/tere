@extends('layouts.backLayout.designadmin') @section('content')
@php($Module='Ressource Humaine') @php($titre='Gestion des absences et des
congés')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-12">
                <div class="col-sm-6">
                    <h1>{{ $titre }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">{{ $Module }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ $titre }}</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
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
                                    <h3 class="card-title">{{ $titre }}</h3>
                                </div>
                                <div class="col-2">
                                    {{-- @can('creer_contrats')
                                    <a
                                        href="{{ route('Contrats.create') }}"
                                    align="right"
                                    class="btn btn-sm btn-primary font-weight-bolder right"
                                    >
                                    <i class="la la-plus"></i>Ajouter un
                                    contrat</a>
                                    @endcan --}}
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Demande d'absence</span>
                                            <span class="info-box-number">{{
                                                $count1
                                            }}</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Demande de congé</span>
                                            <span class="info-box-number">{{
                                                $count2
                                            }}</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Absence validés</span>
                                            <span class="info-box-number">{{ $count3 }}</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Absence réfusés</span>
                                            <span class="info-box-number">{{ $count4 }}</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Box Comment -->
                                    <div class="card card-widget">
                                        <div class="card-header">
                                            <div class="user-block">
                                                <span class="username">Faire une de demande
                                                    d'absence</span>
                                            </div>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                            <!-- /.card-tools -->
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <form action="{{
                                                    route(
                                                        'absence_conges.store'
                                                    )
                                                }}" method="POST">
                                                @csrf @method('POST')
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="inputStatus">Employé</label>
                                                        <select class="form-control custom-select" name="id_employe">
                                                            @foreach ($datas as
                                                            $data)
                                                            <option value="{{ $data->id }}">
                                                                {{ $data->Nom }}
                                                                {{ $data->Prenom }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="demande" value="absence" hidden />
                                                        <label for="inputClientCompany">Date
                                                            d'absence</label>
                                                        <input type="date" class="form-control" name="Date_absence" required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputProjectLeader">Motif</label>
                                                        <input type="text" id="inputProjectLeader" name="Motif" class="form-control" required />
                                                    </div>
                                                    <input type="submit" value="Faire la demande" class="btn btn-success float-right" />
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <!-- Box Comment -->
                                    <div class="card card-widget">
                                        <div class="card-header">
                                            <div class="user-block">
                                                <span class="username">Faire une de demande de
                                                    congé</span>
                                            </div>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                            <!-- /.card-tools -->
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <form action="{{
                                                    route(
                                                        'absence_conges.store'
                                                    )
                                                }}" method="POST">
                                                @csrf @method('POST')
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="inputStatus">Employé</label>
                                                        <select class="form-control custom-select" name="id_employe">
                                                            @foreach ($datas as
                                                            $data)
                                                            <option value="{{ $data->id }}">
                                                                {{ $data->Nom }}
                                                                {{ $data->Prenom }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputClientCompany">Date de
                                                            debut</label>
                                                        <input type="date" class="form-control" name="Date_de_Debut" required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputClientCompany">Date de fin</label>
                                                        <input type="date" class="form-control" name="Date_de_Fin" required />
                                                    </div>
                                                    <input name="demande" value="conge" hidden />
                                                    <div class="form-group">
                                                        <label for="inputProjectLeader">Designation</label>
                                                        <input type="text" id="inputProjectLeader" name="Designation" class="form-control" required />
                                                    </div>
                                                    <input type="submit" value="Faire la demande" class="btn btn-success float-right" />
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="col-10">
                        <h3>Liste des absences</h3>
                    </div>
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
                                                            <th>
                                                                Date d'absence
                                                            </th>
                                                            <th>Motif</th>
                                                            <th>Validé</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($absences as
                                                        $absence)
                                                        <tr>
                                                            <td>
                                                                {{ $absence->employes->Nom }}
                                                                {{ $absence->employes->Prenom }}
                                                            </td>

                                                            <td>
                                                                {{ $absence->Date_absence }}
                                                            </td>
                                                            <td>
                                                                {{ $absence->Motif }}
                                                            </td>
                                                            <td>
                                                                {{ $absence->validé }}
                                                            </td>
                                                            <td>
                                                                <form action="{{ route('absence_conges.update',$absence->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="row">
                                                                        <div class="col-md-8">
                                                                            <select class="form-control custom-select" name="validé">
                                                                                <option value="oui">
                                                                                    Confirmer la demande
                                                                                </option>
                                                                                <option value="non">
                                                                                    Rejeter la demande
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <button class="btn btn-warning  btn-clean btn-icon" type="submit">Valider</button>
                                                                        </div>
                                                                    </div>


                                                                </form>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Employe</th>
                                                            <th>
                                                                Date d'absence
                                                            </th>
                                                            <th>Motif</th>
                                                            <th>Validé</th>
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

                    <div class="col-10">
                        <h3>Liste des congés</h3>
                    </div>
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
                                                            <th>
                                                                Date de debut
                                                            </th>
                                                            <th>Date de fin</th>
                                                            <th>Désignation</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($conges as
                                                        $conge)
                                                        <tr>
                                                            <td>
                                                                {{ $conge->employes->Nom }}
                                                                {{ $conge->employes->Prenom }}
                                                            </td>
                                                            <td>
                                                                {{ $conge->Date_de_Debut }}
                                                            </td>
                                                            <td>
                                                                {{ $conge->Date_de_Fin }}
                                                            </td>
                                                            <td>
                                                                {{ $conge->Designation }}
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('absence_conges.edit',$conge->id) }}" class="btn btn-warning  btn-clean btn-icon">Modifier</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Employe</th>
                                                            <th>
                                                                Date de debut
                                                            </th>
                                                            <th>Date de fin</th>
                                                            <th>Désignation</th>
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
