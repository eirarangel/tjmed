@extends('admin.index')
@section('content_admin')

@if (Session::has('var'))
  {{ Session::get('var') }}
@endif

<?php 
  $pre = "";
  $name = "";
?>

@if( $specialty->S_ID == 0)
  <?php
    $name = "Agregar especialidad";
    ?>
@else
  <?php
    $name = $specialty->S_name;
    $pre = "Editar especialidad: ";
  ?>
@endif

<ol class="breadcrumb">
  <li>{{ link_to('admin/especialidades', 'Categorías médicas') }}</li>
  <li>{{ link_to('admin/categoria/' . $specialty->S_id_category, 'Perfil Categoría') }}</li>
  <li class="active" style="color:#083D5C">{{ $name }}</li>
</ol>

<h2 class="sub-header">{{$pre . $name }}</h2>

{{ Form::open(array('url' => 'specialty/update')) }}
{{ Form::hidden('curr_spe', $specialty->S_ID) }}

<div class="alert alert-success" role="alert">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>¡Importante!</strong> Llenar todos los datos, tanto en inglés como en español para el cambio
  de idioma.
</div>
<div class="row">
  <div class="form-group">
    <div class="col-md-6">
      <h3> En español </h3>
    </div>
    <div class="col-md-6">
      <h3> En inglés </h3>
    </div>
  </div>
</div>

<div class="row">
  <div class="form-group">
    {{ Form::label('title_es', 'Nombre en español', array('class' => 'col-md-2 control-label')) }}
    <div class="col-md-4" class="error">
      {{ Form::text('title_es', $specialty->S_name, array('class' => 'form-control focus')) }}
      <span class="error_msg">{{ $errors->first('S_name') }}</span>
    </div>
    {{ Form::label('title_en', 'Nombre en inglés', array('class' => 'col-md-2 control-label')) }}
    <div class="col-md-4">
      {{ Form::text('title_en', $specialty->S_name_en, array('class' => 'form-control')) }}
      <span class="error_msg">{{ $errors->first('S_name_en') }}</span>
    </div>
  </div>
</div>

<br>
<h5> Llenar una descripción introductoria de la especialidad en 150 caracteres máximo </h5>
<div class="row">
  <div class="form-group">
    {{ Form::label('introduction_es', 'Introducción en español', array('class' => 'col-md-2 control-label')) }}
    <div class="col-md-4" class="error">
      {{ Form::textarea('introduction_es', $specialty->S_introduction, ['class' => 'form-control', 'size' => '1x5', 'maxlength' => '150']) }}
      <span class="error_msg">{{ $errors->first('S_introduction') }}</span>
    </div>
    {{ Form::label('introduction_en', 'Introducción en inglés', array('class' => 'col-md-2 control-label')) }}
    <div class="col-md-4">
      {{ Form::textarea('introduction_en', $specialty->S_introduction_en, ['class' => 'form-control', 'size' => '1x5', 'maxlength' => '150']) }}
      <span class="error_msg">{{ $errors->first('S_introduction_en') }}</span>
    </div>
  </div>
</div>

<br>

<h5> Llenar una descripción detallada y extensa de esta categoría</h5>
<div class="row">
  <div class="form-group">
    {{ Form::label('description_es', 'Descripción en español', array('class' => 'col-md-2 control-label')) }}
    <div class="col-md-4" class="error">
      {{ Form::textarea('description_es', $specialty->S_description, ['class' => 'form-control', 'size' => '1x5']) }}
      <span class="error_msg">{{ $errors->first('S_description') }}</span>
    </div>
    {{ Form::label('description_en', 'Descripción en inglés', array('class' => 'col-md-2 control-label')) }}
    <div class="col-md-4">
      {{ Form::textarea('description_en', $specialty->S_description_en, ['class' => 'form-control', 'size' => '1x5']) }}
      <span class="error_msg">{{ $errors->first('S_description_en') }}</span>
    </div>
  </div>
</div>

<br>

<div class="row">
   <div class="form-group">
    {{ Form::label('category', 'Categoría', array('class' => 'col-md-2 control-label')) }}
    <div class="col-md-3">
      {{ Form::select('category', $cat, $specialty->S_id_category, ['class' => 'form-control', 'id' => 'category']) }}
    </div>
</div>

<br>

<div class="space30"></div>

<div class="row">
  <div class="form-group">
    <div class="col-md-5"></div>
    <div class="col-md-2">
      <input type="submit" class="form-control btn btn-primary" name="submit" id="submit" value="Guardar">
    </div>
  </div>
</div>
<div class="col-md-4"></div>
{{ Form::close() }}

<script>
  $('#especialidades').addClass('active');
</script>
@stop