@extends('layouts.dashboard')
@section('company-dashboard-contents')
    <div class="container" id="singleProject">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <td>Project No</td>
                            <td>Name</td>
                            <td>Priority</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{$project->id}}</td>
                                <td>{{$project->name}}</td>
                                <td>{{$project->priority}}</td>
                                <td>
                                    {{--  <a href="{{url('/home/company/project/'.$project->id)}}"><button class="btn btn-outline-info projectID" data-id="{{$project->id}}">View</button></a>  --}}
                                    <button class="btn btn-outline-info projectID" data-id="{{$project->id}}">View</button>
                                    <a href=""><button class="btn btn-outline-success">Mark as complete</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
    {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>  --}}
    
@endsection
@section('custom-scripts')
    {{--  <script>
        $(document).ready(function(){
            console.log('Get the script');
            $(document).on('click','.projectID',function(){
                var projectID = $(this).data('id');
                console.log(projectID);
            });
        });        
    </script>  --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="{{asset('company/company.js')}}"></script>
@endsection