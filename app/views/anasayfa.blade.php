@extends('layouts.main')
@section('page-header')
<section class="content-header">
      <h1>
        Anasayfa
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li class="active">Anasayfa</li>
      </ol>
    </section>
@stop

@section('body')
  <!-- Main content -->
  <script src="includes/js/anasayfa.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <section class="content">
    
        
    </section>
    <!-- /.content -->
@stop