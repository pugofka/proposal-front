@extends('layouts.app')
{{--{{ dd($stages) }}--}}
@section('content')
<section class="questions">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      {{ Form::model(['route' => ['questions.store'], 'method' => 'post'])  }}
      <input type="text" name="question" placeholder="Stage name">
      <input type="text" name="stage_id" placeholder="stage id">
      <input type="submit" value="send">
      <input name="csrf-token" type="hidden" value="{{ csrf_token() }}">

      {{Form::close()}}
    </div>
  </div>
</div>


  @foreach($stages as $stage)
<form class="form-horizontal">
  <input type="hidden" name="stage_id" value="{{ $stage->id }}">
<legend class="questions__step questions__step--active js-open-form">{{ $stage->name }}</legend>
  <fieldset>
  <div class="questions__form">
    <div class="form-group questions__wrap">
      <label for="" class="control-label">Задача</label>

      <div class="">
        <input type="text" name="question[]" class="form-control" id="1" placeholder="">
      </div>
      <a href="javascript:void(0)" class="questions__btn btn btn-warning btn-fab"><i class="material-icons">
      	<img src="{{URL::asset('/img/plus.svg')}}" alt="">
      </i></a>
    </div>
    <div class="form-group  questions__wrap">
      <label for="" class="control-label">Варианты</label>

      <div class="questions__del">
        <input type="text" class="form-control" id="">
        <a href="javascript:void(0)" class="questions__btn btn btn-warning btn-fab"><i class="material-icons">
        <img src="{{URL::asset('/img/minus.svg')}}" alt="">
         </i></a>
      </div>

      <div class="questions__del">
        <input type="text" class="form-control" id="">
        <a href="javascript:void(0)" class="questions__btn btn btn-warning btn-fab"><i class="material-icons">
        <img src="{{URL::asset('/img/minus.svg')}}" alt="">
        </i></a>
      </div>
      <a href="javascript:void(0)" class="questions__btn btn btn-warning btn-fab"><i class="material-icons">
      <img src="{{URL::asset('/img/plus.svg')}}" alt="">
      </i></a>
    </div>
    <div class="form-group  questions__wrap">
      <label for="" class="control-label">Шаблоны</label>
      <div class="">
        <select id="" multiple="" class="form-control">
          <option>Лендинг</option>
          <option>Интернет-магазин</option>
          <option>Сервис</option>
          <option>Корпоративный сайт</option>
        </select>
      </div>
    </div>
    <a href="javascript:void(0)" class="questions__btn btn btn-warning btn-fab"><i class="material-icons">
    	<img src="{{URL::asset('/img/minus.svg')}}" alt="">
    	 </i></a>
    </div>
      </fieldset>
</form>
@endforeach
</section>
@endsection