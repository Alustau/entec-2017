@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Doctor list

                    <a href="{{ route('doctor.create') }}">
                        <span class="pull-right glyphicon glyphicon-plus">
                        </span>
                    </a>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Specialty</th>
                                    <th>Registry</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <td>
                                            <a href="{{ route('doctor.edit', ['doctor' => $doctor->id]) }}">
                                                {{ $doctor->id }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('doctor.edit', ['doctor' => $doctor->id]) }}">
                                                {{ $doctor->name }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('doctor.edit', ['doctor' => $doctor->id]) }}">
                                                {{ $doctor->specialty }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('doctor.edit', ['doctor' => $doctor->id]) }}">
                                                {{ $doctor->registry }}
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-warning btn-xs" href="{{ route('doctor.edit', ['doctor' => $doctor->id]) }}">
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </a>
                                            <a class="btn btn-danger btn-xs" href="{{ route('doctor.delete', ['doctor' => $doctor->id]) }}">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
