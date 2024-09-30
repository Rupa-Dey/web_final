@extends('layout')

@section('page-content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Job_Title</th>
        <th scope="col">Joining_Date</th>
        <th scope="col">Salary</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile_No</th>
        <th scope="col">Address</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($employs as $employ)
      <tr>
        <td>{{$employ->id  }}</td>
        <td>{{$employ->name }}</td>
        <td>{{ $employ->job_title }}</td>
        <td>{{$employ->joining_date  }}</td>
        <td>{{$employ->salary }}</td>
        <td>{{$employ->email }}</td>
        <td>{{$employ->mobile_no }}</td>
        <td>{{$employ->address }}</td>
      </tr>
  @endforeach
      
    </tbody>
  </table>

  {{ $employs->links() }}
@endsection