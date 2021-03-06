@extends('admin.index')
@section('content_admin')

@if (Session::has('var'))
  {{ Session::get('var') }}
@endif

  <h2 class="sub-header">{{ Lang::get('messages.amdmin_aa') }} ({{$articles->count()}})</h2>
  <center> <a href="{{url('admin/articulo/0')}}"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>{{ Lang::get('messages.new_entry_aa') }}</button></a> </center>
  <div class="space20"></div>
  <div class="table-responsive">
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="article_table" style="font-size:15px">
      <thead style="background:#0b7297">
        <tr>
          <th>{{ Lang::get('messages.titule_aa') }}</th>
          <th>{{ Lang::get('messages.sinops_aa') }}</th>
          <th>{{ Lang::get('messages.autor_aa') }}</th>
          <th>{{ Lang::get('messages.creation_date_aa') }}</th>
        </tr>
      </thead>
      <tbody>
      @if ($articles->count())
        @foreach ($articles as $article)
          <tr>
            <td><a href="{{url('admin/articulo/' . $article->A_ID)}}">{{ $article->A_title }}</a></td>
            <td>{{ $article->A_introduction }}</td>
            <td><a href="{{url('admin/editar/' . $article->A_author)}}" target="_blank">{{ $article->author_name }}</a></td>
            <td>{{ $article->A_created_at}}</td>
           </tr>
        @endforeach
      @endif
      </tbody>
    </table>
  </div>
<div class="space20"></div>

<script>
$(document).ready(function() {
  $('#articulo').addClass('active');
  $('#article_table').dataTable();
});
</script>

@stop