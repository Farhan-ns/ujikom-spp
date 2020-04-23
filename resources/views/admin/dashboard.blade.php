@extends('layouts.admin-app')

@section('title')
    {{ config('app.name') }}
@endsection
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
    <div class="card h-75">
        <div class="card-body">
            <h5 class="card-title">
                Dashboard
            </h5>
            <p class="card-text">
                Welcome!
            </p>
        </div>
    </div>
@endsection

