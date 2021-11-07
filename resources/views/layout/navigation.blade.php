<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">    
<div>
    <ul class="nav nav-pills justify-content-center bg-dark">
        <li class="nav-item">
            <a class="nav-link @if($title == "car table"){{"active"}}@endif" href="/carTable">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if($title == "service table"){{"active"}}@endif" href="/serviceTable">service</a>
          </li>
    </ul>
</div>

 
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom justify-content-center ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
    </div>
  </nav>