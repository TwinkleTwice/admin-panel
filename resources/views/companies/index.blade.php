@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex gap-5 mb-3">
            <a href="{{ route('companies.index') }}" class="h5 text-dark">Компании</a>
            <a href="{{ route('employees.index') }}" class="h5 text-dark">Сотрудники</a>
        </div>

        <div class="flex justify-content-center">
            <div>
                <div class="card">
                    <div class="card-header">Компании</div>
                    <div class="card-body border-bottom">
                        <a href="{{ route('companies.create') }}" class="btn btn-success">
                            Добавить компанию
                        </a>
                    </div>

                    <table id="table_id" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>Имя</th>
                            <th>Email</th>
                            <th>Логотип</th>
                            <th>Адрес</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

