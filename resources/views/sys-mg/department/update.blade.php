@extends('layout.app')


@section('content')

<main class="mt-5 pt-3">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="m-2">Departments Management -> Update</h4>
        </div>
      </div>
      <div class="text-center mt-4">
        @if(session('status'))
        {{session('status')}}
        @endif
    </div>
    <div class="d-flex justify-content-center align-items-center create-box">
        
        <div class="mt-5">
            <h3 class="text-center">Update Department</h3>
            <form action="{{route('department/update',$dept)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group  mt-4">
                    <input type="text" name="name" class="form-control  @error('name') border border-danger @enderror" placeholder="Enter name" value="{{$dept->name}}">
                    @error('name')<div class="text-danger mt-2 text-sm">{{$message}}</div>@enderror
        
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>

        </div>        
    </div>
  </div>
</main>
@endsection