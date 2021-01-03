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
       
      <form action="" method="post">
      @csrf
        <div class="form-group">
            <label for="summary">Summary</label>
            <input type="text" name="summary" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="descrb" cols="" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" name="status">
              <option value="Open">Open</option>
              <option value="Close">Close</option>
              <option value="In Progress">In Progress</option>

            </select>
        </div>
        <button class="btn btn-success" type="submit">Add</button>
        <a class="btn btn-secondary" href="/home">Back</a>
      </form>
      
          

      @endsection