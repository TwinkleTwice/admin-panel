@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex gap-5">
        <a href="{{ route('companies.index') }}" class="h5 text-dark">Компании</a>
        <a href="{{ route('employees.index') }}" class="h5 text-dark">Сотрудники</a>
    </div>
</div>
@endsection
