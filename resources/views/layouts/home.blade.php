@extends('layouts.master')

@section('content')
  <div class="card">
  <div class="card-header">
    <h4>Dashboard</h4>
  </div>
  <div class="card-body">
    <h4 class="card-title">Welcome</h4>
    <p class="card-text">Thank you for Signing {{ Auth::user()->name }}</p>
    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
  </div>
</div>
@endsection
