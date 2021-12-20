@extends('layout.app')



@section('content')
<?php 
use Carbon\Carbon;
 ?>
<main class="mt-5 pt-3">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="m-2">Departments Management</h4>
        </div>
      </div>
        <div class="row">
            <div class="col-md-12 mb-3">
              <div class="card">
                <div class="card-header">
                  <span><i class="bi bi-table me-2"></i></span> Departments
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
                          <th>Departments</th>
                          <th>Created at</th>
                          <th>Update at</th>
                          <th>Operation</th>
                        </tr>
                      </thead>
                       <tbody>
                        @if($data->count())
                          @foreach($data as $dept)

                            <tr>
                              <td>{{$dept->name}}</td>
                             <?php $carbon = new Carbon($dept->created_at);?>
                               <td>{{$carbon->diffForHumans(); }}</td>
                              
                             <?php $carbon = new Carbon($dept->updated_at);?>
                              <td>{{$carbon->diffForHumans(); }}</td>
                                <td>
                                <div class="d-flex">
                                  <form method="POST" action="{{route('department/delete',$dept)}}">
                                    @csrf 
                                    @method('DELETE')
                                    <button class="btn text-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                  </form>                                
                                  
                                    <button class="btn text-primary" type="submit"><a href="{{route('department/datails',$dept)}}"><i class="fa fa-refresh" aria-hidden="true"></i></a></button>

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
              <a href="Departments-create"> <button class="btn btn-primary rounded m-3">Add Department</button></a>
            </div>
          </div>
  </div>
</main>
@endsection