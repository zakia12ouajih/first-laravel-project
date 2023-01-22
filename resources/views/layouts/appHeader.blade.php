<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @vite(['resources/sass/app.scss', 'resources/js/app.js'])

   <title></title>
</head>
<body>
   
   
   <div class="container ">

      <nav class="navbar navbar-expand bg-light d-flex justify-content-between">
         <ul class="navbar-nav ">
               <a class="navbar-brand me-3" href="#">AppStart</a>
               <li class="nav-item ms-2">
                  <a class="nav-link " aria-current="page" href="#">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Servives</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
               </li>
         </ul>
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link btn" href="/login">
                  <i class="bi bi-person"></i>
                  Login
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link btn" href="/register">
                  <i class="bi bi-box-arrow-in-right"></i>
                  Register
               </a>
            </li>
            
         </ul>
      </nav>
      
   </div>

   
   @yield('login')
   @yield('register')
</body>
</html>