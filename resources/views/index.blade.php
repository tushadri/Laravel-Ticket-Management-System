@extends('layout.main')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ticket</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

    

    
      <div class="table-responsive">
      <a class="btn btn-primary" href="create">Add New Ticket</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              
              <th>ID</th>
              <th>Summary</th>
              <th>Description</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
          @foreach($ticket as $item)
              <tr>
                 <td>{{$item['id']}}</td>
                <td>{{$item['summary']}}</td>
                <td>{{$item['description']}}</td>
                <td>{{$item['status']}}</td>
                <td><a class='btn btn-warning' href="update/{{$item['id']}}">Update</a></td>
                <td>
                  <a class='btn btn-danger' href="delete/{{$item['id']}}">Delete</a>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
     <span>{{$ticket->links()}}</span>
      </main>
@endsection
<style>
  .w-5{
    display:none;
  }
</style>
