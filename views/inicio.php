<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?= base_url() ?>static/bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>static/fontawesome/css/all.min.css">

  <script src="<?= base_url() ?>static/js/jquery-3.4.1.min.js"></script>
  <script src="<?= base_url() ?>static/bootstrap4/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?= base_url() ?>static/css/stilo.css">
  <SCRIPT src="<?= base_url() ?>static/js/inicio.js"></SCRIPT>

  <script>
    var base_url = "<?= base_url() ?>";
  </script>
  <title>CACECA</title>
</head>
<style>
  body {
    background-color: white;
  }
</style>

<body>
  <center>
    <img style="width: 450px;" src="<?php echo base_url('static/images/logo.png'); ?>" />
  </center>
  <div id="logreg-forms">
    <form class="form-signin">
      <p style="text-align:center">Inicia sesión </p>
      <input type="email" id="correo" class="form-control" placeholder="Correo" required="" autofocus="">
      <input type="password" id="contrasenia" class="form-control" placeholder="Contraseña" required="">
      <br />
      <button type="button" class="btn btn-success btn-block" id="btn-entrar" data-toggle="modal" data-target="#modal-mensaje"><i class="fas fa-sign-in-alt"></i> Entrar</button>


      <div class="modal fade" id="modal-mensaje">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <DIV id="mensaje"></DIV>
            </div>
          </div>
        </div>
      </div>
  </div>
  </form>
</body>

</html>