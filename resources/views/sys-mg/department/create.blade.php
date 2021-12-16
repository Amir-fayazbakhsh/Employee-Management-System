@extends('layout.app')


@section('content')

<main class="mt-5 pt-3">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="m-2">Admins Management</h4>
        </div>
      </div>
      <div class="text-center mt-4">
        @if(session('status'))
        {{session('status')}}
        @endif
    </div>
    <div class="d-flex justify-content-center align-items-center create-box">
        
        <div>
            <h3 class="text-center">Create Admin</h3>
            <form  action="{{route('create/admin')}}" method="POST">
                @csrf
                <div class="form-group  mt-4">
                    <input type="text" name="name" class="form-control  @error('name') border border-danger @enderror" placeholder="Enter name" value="{{old('name')}}">
                    @error('name')<div class="text-danger mt-2 text-sm">{{$message}}</div>@enderror
        
                </div>
                <div class="form-group  mt-4">
    
                    <input type="text" name="username" class="form-control  @error('username') border border-danger @enderror" placeholder="Enter username" value="{{old('username')}}" >
                    @error('username')<div class="text-danger mt-2 text-sm">{{$message}}</div>@enderror
                </div>
                <div class="form-group mt-4">
                    <input type="tel" name="phone" class="form-control  @error('phone') border border-danger @enderror" placeholder="Enter phone" value="{{old('phone')}}" >
                    @error('phone')<div class="text-danger mt-2 text-sm">{{$message}}</div>@enderror
                </div>
                <div class="form-group mt-4">
                    <input type="email" name="email" class="form-control @error('email') border border-danger @enderror" placeholder="Enter email" value="{{old('email')}}" >
                    @error('email')<div class="text-danger mt-2 text-sm">{{$message}}</div>@enderror
                </div>
                   

                <div class="form-group  mt-4">
                    <input type="password" name="password" class="form-control  @error('password') border border-danger @enderror " placeholder="Enter password">
                    @error('password')<div class="text-danger mt-2 text-sm">{{$message}}</div>@enderror
                </div>
                <div class="form-group  mt-4">
                    <input type="password" name="password_confirmation" class="form-control  @error('password_confirmation') border border-danger @enderror " placeholder="Confirm password">
                 

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