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
                    <div class="card-header">Сотрудники</div>
                    <div class="card-body border-bottom">
                        <a href="{{ route('employees.create') }}" class="btn btn-success">
                            Добавить сотрудника
                        </a>
                    </div>

                    <table id="employees_table_id" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>Имя</th>
                            <th>Email</th>
                            <th>Телефон</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

{{--                    <div class="card-body table-responsive table-striped p-0 mt-4">--}}
{{--                        <div class="table-responsive">--}}
{{--                            <table class="table">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>#</th>--}}
{{--                                    <th>Имя</th>--}}
{{--                                    <th>Email</th>--}}
{{--                                    <th>Телефон</th>--}}
{{--                                    <th class="text-right d-flex justify-content-end">Действия</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                @foreach($employees as $employee)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{ $employee->id }}</td>--}}
{{--                                        <td>{{ $employee->name }}</td>--}}
{{--                                        <td>{{ $employee->email }}</td>--}}
{{--                                        <td>{{ $employee->phone }}</td>--}}
{{--                                        <td class="text-right d-flex justify-content-end gap-2">--}}
{{--                                            <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-warning btn-sm">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-eye" viewBox="0 0 16 16">--}}
{{--                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>--}}
{{--                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>--}}
{{--                                                </svg>--}}
{{--                                            </a>--}}
{{--                                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-info btn-sm">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pencil" viewBox="0 0 16 16">--}}
{{--                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>--}}
{{--                                                </svg>--}}
{{--                                            </a>--}}
{{--                                            <form method="POST" action="{{ route('employees.destroy', $employee->id) }}" accept-charset="UTF-8" style="display:inline">--}}
{{--                                                {{ method_field('DELETE') }}--}}
{{--                                                {{ csrf_field() }}--}}
{{--                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete order" onclick="return confirm('Вы уверены?')">--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">--}}
{{--                                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>--}}
{{--                                                    </svg>--}}
{{--                                                </button>--}}
{{--                                            </form>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
