<!DOCTYPE html>
<html>
{{View::make('layout.head')}}
<body>

    <div class="text-center mt-4">
        @if(session('status'))
        {{session('status')}}
        @endif
    </div>
    <div class="d-flex justify-content-center align-items-center login-box">

            
        
        <div>
            <h3 class="text-center">login</h3>
            <form  action="login" method="POST">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" class="form-control @error('email') border border-danger @enderror" placeholder="email" value="{{old('email')}}" >
                    @error('email')<div class="text-danger mt-2 text-sm">{{$message}}</div>@enderror
                </div>
                
                <div class="form-group">
                    <input type="password" name="password" class="form-control @error('password') border border-danger @enderror " placeholder="password">
                </div>
                @error('password')<div class="text-danger mt-2 text-sm">{{$message}}</div>@enderror


                <div class="form-group">
                    <label for="remember">Remember me</label>
                    <input type="checkbox" name="remember" id="remember">
                </div>

                <div class="text-center mt-2">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>

        </div>        
    </div>

</body>
</html>
