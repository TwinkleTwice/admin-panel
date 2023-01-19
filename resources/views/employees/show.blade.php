@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mb-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body d-flex gap-4">
                    <a href="{{ route('employees.index') }}" class="btn btn-warning btn-sm d-flex align-items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                        </svg>
                        Назад
                    </a>
                    <h3 class="m-0 mx-auto">Информация о сотруднике</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="panel panel-danger">
                <ul class="list-group h5">
                    <li class="list-group-item"><b>Имя:</b> {{ $employee->name }}</li>
                    <li class="list-group-item"><b>Email:</b> {{ $employee->email }}</li>
                    <li class="list-group-item"><b>Телефон:</b> {{ $employee->phone }}</li>
                    <li class="list-group-item"><b>ID компании:</b> {{ $employee->company->id ?? '-' }}</li>
                    <li class="list-group-item"><b>Название компании:</b> {{ $employee->company->name ?? '-' }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
