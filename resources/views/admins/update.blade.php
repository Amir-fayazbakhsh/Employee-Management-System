@extends('layout.app')
@extends('layout.head')


@section('content')

<main class="mt-5 pt-3">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="m-2">Update Admin</h4>
        </div>
      </div>
      <div class="text-center mt-4">
        @if(session('status'))
        {{session('status')}}
        @endif
    </div>
    <div class="d-flex justify-content-center align-items-center create-box">
        
        <div>
            <h3 class="text-center">Update Admin</h3>
            <form  action="{{route('update/admin')}}" method="POST">
                @csrf
                <div class="form-group  mt-4">
                    <input type="text" name="name" class="form-control  @error('name') border border-danger @enderror" placeholder="Enter name" value="{{$user->name}}">
                    @error('name')<div class="text-danger mt-2 text-sm">{{$message}}</div>@enderror
        
                </div>
                <div class="form-group  mt-4">
    
                    <input type="text" name="username" class="form-control  @error('username') border border-danger @enderror" placeholder="Enter username" value="{{$user->username}}" >
                    @error('username')<div class="text-danger mt-2 text-sm">{{$message}}</div>@enderror
                </div>
                <div class="form-group mt-4">
                    <input type="tel" name="phone" class="form-control  @error('phone') border border-danger @enderror" placeholder="Enter phone" value="{{$user->phone}})" >
                    @error('phone')<div class="text-danger mt-2 text-sm">{{$message}}</div>@enderror
                </div>
                <div class="form-group mt-4">
                    <input type="email" name="email" class="form-control @error('email') border border-danger @enderror" placeholder="Enter email" value="{{$user->email}}" >
                    @error('email')<div class="text-danger mt-2 text-sm">{{$message}}</div>@enderror
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