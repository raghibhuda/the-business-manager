@extends('layouts.dashboard')
@section('company-dashboard-contents')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Create a new Project</h1>
        </div>
        <div class="card-block">
            <form method="post" action="{{url('/home/company/create-task')}}">
                @csrf
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label class="form-control-label" for="form-group-input">Project Name:</label>
                        <input type="text" class="form-control" id="form-group-input" name="name">
                    </div>
                    <div class="form-group col-lg-2">
                        <label class="form-control-label" for="form-group-input">Total Xp:</label>
                        <input type="number" class="form-control" id="form-group-input" name="totalxp">
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label class="form-control-label" for="form-group-input">Description</label>
                    <textarea class="form-control" id="form-group-input" name="description" rows="6"></textarea>
                </div>
                <div class="form group">
                    <button class="btn btn-success " type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection