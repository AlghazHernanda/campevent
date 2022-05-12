@extends('layouts.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
  
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive col-lg-8">

    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a>

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
       
        </tr>
      </thead>
      <tbody>

        @foreach ($events as $event)
        <tr>
          <td>{{ $loop->iteration }}</td> {{-- bawaan dari blade untuk membuat iterasi angka lebih gampang, mulai dari 1 --}}
          <td>{{ $event->title }}</td>
          <td>{{ $event->eventTypeTo->name}}</td>
          <td>
              <a href="/dashboard/events/{{ $event->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="/dashboard/events/{{ $event->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/deleteEvent/{{ $event->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('are you sure?')"><span data-feather="x-circle">DELETE</span></button>
              </form>
              
          </td>
        </tr>
            
        @endforeach
        
      </tbody>
    </table>
  </div>
@endsection