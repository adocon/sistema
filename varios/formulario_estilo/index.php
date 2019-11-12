<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<h1> EJEMPLO FORMULARIO BOOTSTRAP </h1>

<form id="form1" name="form1" method="post" action="">
 

   <div class="form-group">
      <label class="sr-only" for="nombre">Nombre</label>
      <input type="text" class="form-control mb-2 mb-sm-0" id="nombre" placeholder="Ingrese equipo">
    </div>
     <div class="form-group">
      <label class="sr-only" for="anio">A&ntilde;o</label>
      <input type="number"  min="1900" max="2017" class="form-control mb-2 mb-sm-0" id="anio" placeholder="Ingrese el a&ntilde;o de fundaci&oacute;n">
    </div>
    <div class="form-group">
      <label class="sr-only" for="pais">Pais</label>
      <input type="tesxt" class="form-control mb-2 mb-sm-0" id="pais" placeholder="Ingrese el pais">
    </div>    
 
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  
</form>

<h1> OTROS EJEMPLOS </h1>

<form>

     <div class="form-group">
    <label for="email">Email </label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingresar email">
    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu mail con nadie.</small>
  </div>
  <div class="form-group">
    <label for="passwd">Password</label>
    <input type="password" class="form-control" id="passwd" placeholder="Password">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" id="unCheck">
      Checkbox de ejemplo
    </label>
  </div>
    <div class="form-group">
      <div class="form-check mb-2 mb-sm-0">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" id="recordatorio"> Enviarme mail de recordatorio
        </label>
      </div>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    
</form>


</body>
</html>