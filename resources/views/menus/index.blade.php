@extends('layouts.backLayout.designadmin')

@section('content')

    @php($Module='Parametre')
    @php($titre='Liste des modules')

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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-10">
                                        <h3 class="card-title">{{$titre}}</h3>
                                    </div>
                                    <div class="col-2">

                                        @can('role-create')

                                        <a href="{{ route('menus.create') }}" align="right" class="btn btn-sm btn-primary font-weight-bolder right">
                                            <i class="la la-plus"></i>Ajouter un menu</a>
                                        @endcan
                                    </div>
                                </div>


                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Libellé</th>
                                        <th >Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($data as $key => $menu)
                                    <tr>
                                        <td>{{ $menu->id_menu }}</td>
                                        <td>{{ $menu->menu }}</td>
                                        <td align="center">
                                            @can('role-edit')
                                            <a href="{{ route('menus.edit',$menu->id_menu) }}" class="btn btn-warning btn-xs btn-clean btn-icon"
                                               title="Modifier"> <i class="fas fa-edit"></i> </a>

                                            @endcan
                                            @can('role-delete1')
                                            {!! Form::open(['method' => 'DELETE','route' => ['menus.destroy', $menu->id_menu],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
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
