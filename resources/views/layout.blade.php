<html>
     <head>
     <title>WHN laravel</title>

    </head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="border-bottom: 1px solid #222;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/" style="margin-left: 5%;">Sample Blog Site</a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 20%;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Post Table</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user">User Table</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>


    
   
        @yield('content')
    </body>
</html>