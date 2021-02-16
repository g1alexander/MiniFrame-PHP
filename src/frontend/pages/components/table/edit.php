<?php require_once layout . "header.php"?>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <a href="<?=_url?>demo/index" class="btn-close" aria-label="Close"></a>
      </div>
      <div class="modal-body">
        <div class="container">

          <form action="<?=_url?>demo/save&id=<?=$user->id?>" method="POST">
            <div class="row">
              <div class="col-12 mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" value="<?=isset($user) && is_object($user) ? $user->name : "";?>"
                  class="form-control" name="name" required>
              </div>
              <div class="col-12">
                <label for="email" class="form-label">Correo</label>
                <input type="email" value="<?=isset($user) && is_object($user) ? $user->email : "";?>"
                  class="form-control" name="email" required>
              </div>
              <div class="col-12 mt-3 text-end">
                <button type="submit" class="btn btn-info">Guardar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
  <a href="<?=_url?>demo/index" class="btn btn-info text-white">
    <i class="fas fa-home"></i> Inicio
  </a>
</div>

<?php require_once layout . "footer.php"?>