@extends('layout')

@section('page-content')
<div class="card" style="width: 18rem;">
    <div class="card-header">
      <h4> Employee Details</h4>
       
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">ID: {{ $employs->id }}</li>
      <li class="list-group-item">Name: {{ $employs->name }}</li>
      <li class="list-group-item">JOB_T: {{ $employs->job_title }}</li>
      <li class="list-group-item">Joining_D: {{ $employs->joining_date }}</li>
      <li class="list-group-item">Salary: {{ $employs->salary }}</li>
      <li class="list-group-item">Email : {{ $employs->email }}</li>
      <li class="list-group-item">Mobile_No: {{ $employs->mobile_no }}</li>
      <li class="list-group-item">Address: {{ $employs->address }}</li>
    </ul>
  </div>
@endsection
