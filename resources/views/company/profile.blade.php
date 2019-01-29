@extends('layouts.dashboard')
@section('company-dashboard-contents')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center">
             @if($company != null)   
                <h1>Company: {{$company->name}}</h1>
                <h3>Email: {{$company->email}}</h3>
                <h3>Project Manager: {{Auth::user()->name}}</h3>
            @else
                <h1>Add your company first</h1>
            @endif
            </div>
            <div class="col-lg-4">
                
            </div>
        </div>
    </div>
@endsection