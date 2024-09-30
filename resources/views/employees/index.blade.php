@extends('layout')

@section('page-content')
<div class="container mt-4">
  <div class="search-container mb-4">
    <form class="d-flex justify-content-between align-items-center w-100" action="{{ route('employees.search') }}" method="GET">
      <div class="d-flex">
        <input class="form-control me-2 rounded-pill" type="text" placeholder="Search.." name="search" aria-label="Search">
        <button class="btn btn-outline-primary rounded-pill" type="submit">Search</button>
      </div>
      <a href="{{ route('employees.create') }}" class="btn btn-success rounded-pill">ADD</a>
    </form>
  </div>
</div>

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
        <th scope="col">Action</th>
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
        <td class="d-flex justify-content-center">
          <a href="{{ route('employees.show', $employ->id) }}"> view</a>
          <form action="{{ route('employees.destroy',$employ->id) }}" method="POST">
          @csrf
          <button type="submit" class="ms-1 btn btn-danger" onclick="return confirm('Do you want to delete it?')">DELETE</button>
          
        </form>
        </td>
      </tr>
  @endforeach
      
    </tbody>
  </table>

  {{ $employs->links() }}
@endsection