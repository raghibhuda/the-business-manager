@extends('layouts.dashboard')
@section('company-dashboard-contents')
    <div class="container"id="singleProject">
        {{--  <div class="row">
            <div class="col-lg-4">
               <div class="card">
                   <div class="card-header">
                        <h3>Title:{{$project->name}}</h3>
                   </div>
                   <div class="card-body">
                        <p class="card-text">{{$project->description}}</p>
                    </div>
               </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Deadline</h3>
                    </div>
                    <div class="card-body">
                        @if($project->deadline==null)
                            <p class="card-text">Set the deadline</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Total Xp</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{$project->totalxp}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 p-t-20">
                <div class="card">
                    <div class="card-header">
                        <h3>Assign employee</h3>
                        <button class="btn btn-outline-info pull-right"><i class="zmdi zmdi-account-add"></i></button>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{$project->description}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 p-t-20">
                <div class="card">
                   <div class="card-header">
                        <h3>Task in {{$project->id}}</h3>
                   </div>
                   <div class="card-body">
                        <p class="card-text">{{$project->description}}</p>
                    </div>
               </div>
            </div>
        </div>  --}}
    </div>

@endsection

@section('custom-scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="{{asset('company/company.js')}}"></script>
@endsection
