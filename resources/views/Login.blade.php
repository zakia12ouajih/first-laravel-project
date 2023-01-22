@extends('layouts.appHeader')

@section('login')
   <div class="container pt-5 bg-light">
      <div class="row justify-content-center align-items-center g-2 mt-5">
         
         <div class="col-7">
            <div class="input-group mb-2">
               <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
               <input
                  type="text"
                  class="form-control"
                  placeholder="Username / Email"
                  
               />
            </div>
         </div>
         <div class="col-7">
            <div class="input-group mb-2">
               <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock"></i></span>
               <input
                  type="text"
                  class="form-control"
                  placeholder="Password"
                  
               />
            </div>
         </div>
         <div class="col-7">
            <div class="input-group mb-3 mt-3">
               <button type="submit" class="btn btn-primary"><i class="bi bi-door-open me-2"></i>Login</button>
            </div>
         </div>
      </div>
   </div>
   
@endsection
