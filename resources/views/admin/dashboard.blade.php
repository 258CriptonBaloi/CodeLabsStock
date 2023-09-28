@extends('layouts.admin')

@section('content')

<div class="pagetitle">
    @if(session('message'))
      <h1 class="alert alert-success">{{(session('message'))}}</h1>
      @endif
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    

@endsection
