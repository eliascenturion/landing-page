<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/head.php'); ?>
</head>
<body>
<div class="container ">
  <div class="row titulo">
    <div class="col-sm-12">
      <div class="">
        <h1>Landing page</h1>
      </div>
    </div>
  </div>
  
  <div class="fondo-img ">
    <img src="img/5.jpg" alt="">
    <div class="menu">
      <div class="row ">
        <div class="col-sm-8 mx-auto ">
          <ul class="nav nav-pills ">
            <li class="nav-item">
              <a class="nav-link " href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Much longer nav link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> 
          </ul>
        </div>  
      </div>
    </div> 
    <div class="row justify-content-center z-index">
      <div class="col-md">
        <div class="panel">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ea corporis et corrupti alias molestiae, aliquam voluptas. Quia neque optio obcaecati unde pariatur autem! Iste facilis atque itaque vel necessitatibus.</p>
        </div>
      </div>
      <div class="col-md">
        <div class="panel">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ea corporis et corrupti alias molestiae, aliquam voluptas. Quia neque optio obcaecati unde pariatur autem! Iste facilis atque itaque vel necessitatibus.</p>
        </div>
      </div>
      <div class="col-md">
        <div class="panel">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ea corporis et corrupti alias molestiae, aliquam voluptas. Quia neque optio obcaecati unde pariatur autem! Iste facilis atque itaque vel necessitatibus.</p>
        </div>
      </div>
    </div> 
    <div class="row justify-content-center ">
      <div class="contenido z-index">
        
        <form class="formulario "> 
          <h4>Contactame</h4>
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="textarea" class="form-control" id="inputEmail4" placeholder="Nombre">
            </div>
            <div class="form-group col-md-6">
              <input type="textarea" class="form-control" id="inputEmail4" placeholder="Apellido">
            </div>
          </div>
          <div class="from-row">
            <div class="form-group ">
              <input type="textarea" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
          </div>
          <div class="from-row">
            <div class="form-group col-md-8 mx-auto">
              <input type="password" class="form-control " id="inputPassword4" placeholder="Telefono">
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary ">Enviar</button>
          </div>
        </form>
      </div>  
    </div>
  </div>


<?php include('includes/footer.php'); ?>
</body>
</html>