@extends('layouts.app')

@section('content')
  <section class="create">
    {{--<form class="form-horizontal">--}}
    {{ Form::model($stage, ['route' => ['stages.update', $stage->id], 'method' => 'put', 'class' => 'create__form form-horizontal'])  }}
    <fieldset>
      <legend>Редактирование этапа "{{ $stage->name }}"</legend>
      <div class="form-group">
        {{--<label for="name" class="col-md-2 control-label">Название этапа</label>--}}
        {{ Form::label('name', 'Название этапа', ['class' => 'col-md-3 control-label']) }}

        <div class="col-md-9">
          {{--<input type="text" class="form-control" id="name">--}}
          {{ Form::text('name', $stage->name, ['class' => 'form-control']) }}
        </div>
      </div>
      <div class="form-group">
        {{--<label for="number" class="col-md-2 control-label">Номер этапа</label>--}}
        {{ Form::label('number', 'Номер этапа', ['class' => 'col-md-3 control-label']) }}

        <div class="col-md-9">
          {{--<input type="number" class="form-control" id="number">--}}
          {{ Form::number('number', $stage->sort, ['class' => 'form-control']) }}

        </div>
      </div>

      <div class="togglebutton form-group">
        {{ Form::label('isactive', 'Активность этапа', ['class' => 'col-md-3 control-label']) }}
          <label >
            {{ Form::checkbox('isactive', 'value') }}
          </label>
      </div>

      <div class="form-group">
        <div class="col-md-10 col-md-offset-2">
          <button type="button" class="btn btn-default">Удалить</button>
          <button type="button" class="btn btn-primary">Сохранить изменения</button>
        </div>
      </div>
    </fieldset>
    </form>
  </section>
@endsection