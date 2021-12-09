@extends('layouts.app')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

@section('content')
<div class="card mx-auto" style="width: 38rem;">
    <i class="fas fa-user"></i>
    <div class="card-body">
      <h5 class="card-title">Welcome, User, you just logged in as {{ Auth::user()->Role->role }}!</h5>
      <p class="card-text">welcome to TDC ITS's website</p>
      <a href="/home/dashboard" class="btn btn-primary">Database</a>
    </div>
  </div>
@endsection
