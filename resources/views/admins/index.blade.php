@extends('layout.app')



@section('content')
<?php 
use Carbon\Carbon;
 ?>
<main class="mt-5 pt-3">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="m-2">Admins Management</h4>
        </div>
      </div>
        <div class="row">
            <div class="col-md-12 mb-3">
              <div class="card">
                <div class="card-header">
                  <span><i class="bi bi-table me-2"></i></span> Admins
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table
                      id="example"
                      class="table table-striped data-table"
                      style="width: 100%"
                    >
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Username</th>
                          <th>Phone number</th>
                          <th>Email</th>
                          <th>Created at</th>
                          <th>Operation</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if($users->count())
                          @foreach($users as $user)

                            <tr>
                              <td>{{$user->name}}</td>
                              <td>{{$user->username}}</td>
                              <td>{{$user->phone}}</td>
                              <td>{{$user->email}}</td>
                             <?php $carbon = new Carbon($user->created_at);?>
                              <td>{{$carbon->diffForHumans();}}</td>
                              <td>
                                <div class="d-flex">
                                  <form method="POST" action="{{route('admin/delete',$user)}}">
                                    @csrf 
                                    @method('DELETE')
                                    <button class="btn text-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                  </form>                                
                                  
                                    <button class="btn text-primary" type="submit"><a href="{{route('admin/update',$user)}}"><i class="fa fa-refresh" aria-hidden="true"></i></a></button>

                                </div>
                            </td>
                            </tr>
                          @endforeach
                          
                        @endif
                      </tbody>
                      <tfoot>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <a href="admins-create"> <button class="btn btn-primary rounded m-3">Create Admin</button></a>
            </div>
          </div>
  </div>
</main>
@endsection