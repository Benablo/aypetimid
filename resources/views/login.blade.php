@extends('base')

@section('content')
<br><br><br>
<div class="row">
    <div class="col-md-4 offset-md-4 ">
        <div class="card shadow text-white bg-dark">
            <div class="card-header ">
                <h3 class="card-tittle text-center">
                    Login
                </h3>
            </div>
            <div class="card-body shadow">
                <form action="" method="post">
                    {{csrf_field()}}
                   
                    <div class="mb-3 ">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                     <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control " required>
                    </div>
                    <button class="btn btn-light text-dark" style="margin-left:35%; letter-spacing:8px;">Login</button>
                    <p class="text-center text-light mt-5 mb-0">No Account? Click <a href="register" class=" text-white"><u>Register</u>.</a></p>
<br>
                </form>
            </div>
        </div>
</div>
</div>
@stop 
