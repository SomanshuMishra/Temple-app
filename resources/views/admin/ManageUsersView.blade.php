
@extends('admin/layout')
@section('title')
  Manage User
@endsection
@section('style')
a, a:hover, a:focus, a:active {
                      text-decoration: none;
                      color: inherit;
                }
@endsection

@section('content')

<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-border-color"></i>
      </span> Manage User
    </h3>
    <h3 class="page-title">
     <span class="page-title-icon bg-gradient-primary text-white mr-2">
       
       <a href="{{route('admin.addUser')}}"><i class="mdi mdi-plus"></i></a>
     </span> <a href="{{route('admin.addUser')}}">Add User</a>
    </h3>
  
  </div>


  <table id="datatable" class="display" style="width:100%">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>email</th>
                              <th>Mobile Number</th>
                              <th>Status</th>
                              <th>Edit</th>    
                          </tr>
                      </thead>
                      <tbody>
                   @foreach ($users as $row)
                   <tr>
                    <td>{{$row->users_name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->mobile}}</td>
                    <td>{{$row->status}}</td>
                    <td><a href="">Edit</a></td>
                    </tr> 
                   @endforeach       
                         </tbody>
                      </thead>
</table>




<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#datatable').DataTable({ 
    });
} );
</script>
@endsection

@section('script')
 
  

@endsection

