<div class="form-group my-3 {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">Имя</label>
    <input type="text" name="name" class="form-control" id="name" value="{!! old('name'), $employee->name ?? '' !!}">
    {!! $errors->first('name', '<p class="help-block text-danger">:message</p>') !!}
</div>

<div class="form-group my-3 {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">Email</label>
    <input type="email" name="email" class="form-control" id="email" value="{!! old('email'), $employee->email ?? '' !!}">
    {!! $errors->first('email', '<p class="help-block text-danger">:message</p>') !!}
</div>

<div class="form-group my-3 {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="control-label">Телефон</label>
    <input type="tel" name="phone" class="form-control" id="phone" value="{!! old('phone'), $employee->phone ?? '' !!}">
    {!! $errors->first('phone', '<p class="help-block text-danger">:message</p>') !!}
</div>

<div class="form-group mb-3 {{ $errors->has('company_id') ? 'has-error' : ''}}">
    <label for="company_id" class="control-label">Компания</label>
    <select name="company_id" id="company_id" class="form-control">
        @foreach($companies as $id => $company)
            <option value="{!! old('company_id'), $company->id !!}">{{ $company->name }}</option>
        @endforeach
    </select>

    {!! $errors->first('company_id', '<p class="help-block text-danger">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Обновить' : 'Создать' }}">
</div>
