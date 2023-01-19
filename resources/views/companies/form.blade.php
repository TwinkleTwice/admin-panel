<div class="form-group my-3 {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">Имя</label>
    <input type="text" name="name" class="form-control" id="name" value="{!! old('name'), $company->name ?? '' !!}">
    {!! $errors->first('name', '<p class="help-block text-danger">:message</p>') !!}
</div>

<div class="form-group my-3 {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">Email</label>
    <input type="email" name="email" class="form-control" id="email" value="{!! old('email'), $company->email ?? '' !!}">
    {!! $errors->first('email', '<p class="help-block text-danger">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('logo') ? 'has-error' : ''}}">
    <label for="logo" class="control-label">Логотип</label>
    <input type="file" name="logo" id="logo" class="form-control">
    {!! $errors->first('logo', '<p class="help-block text-danger">:message</p>') !!}
</div>

<div class="form-group my-3 {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">Адрес</label>
    <input type="text" name="address" class="form-control" id="address" value="{!! old('address'), $company->address ?? '' !!}">
    {!! $errors->first('address', '<p class="help-block text-danger">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Обновить' : 'Создать' }}">
</div>
