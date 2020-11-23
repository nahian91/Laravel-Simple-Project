@extends('dashboard.layouts.common')

@section('title', 'Dashboard')

@section('common')
    <div class="row">
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h4>Total Services</h4>
                    <hr>
                    <h2>{{ $total_services->count() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h4>Total Portfolios</h4>
                    <hr>
                    <h2>{{ $total_portfolio->count() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h4>Total About</h4>
                    <hr>
                    <h2>{{ $total_about->count() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h4>Total Teams</h4>
                    <hr>
                    <h2>{{ $total_teams->count() }}</h2>
                </div>
            </div>
        </div>
    </div>
@endsection