<?php require_once layout . "header.php"?>

<div class="container d-flex flex-column justify-content-center" style="height: 100vh;">
  <div>
    <a href="<?=_url?>" class="text-dark">
      <i class="fas fa-arrow-left"></i></a>
  </div>
  <div>
    <h1 class="text-center mb-5">CRUD de datatable en MiniFrame-PHP
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fas fa-plus"></i>
      </button>
    </h1>
  </div>
  <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
    <thead>
      <tr>
        <th>id</th>
        <th>nombre</th>
        <th>email</th>
        <th>acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($user = $users->fetch_object()): ?>
      <tr>
        <td><?=$user->id?></td>
        <td><?=$user->name?></td>
        <td><?=$user->email?></td>
        <td><a href="<?=_url?>demo/delete&id=<?=$user->id?>"
            onclick="return confirmDelete('¿Quieres eliminar el registro?')" class="btn btn-danger mr-2"><i
              class="far fa-trash-alt"></i></a>
          <form action="<?=_url?>demo/edit" class="d-inline-block" method="POST">
            <input type="hidden" value="<?=$user->id?>" name="id">
            <button type="submit" class="btn btn-info text-white mr-2 form-edit" data-toggle="modal"
              data-target="#staticBackdrop">
              <i class="far fa-edit"></i>
            </button>
          </form>
        </td>
      </tr>
      <?php endwhile;?>
    </tbody>
    <tfoot>
      <tr>
        <th>id</th>
        <th>nombre</th>
        <th>email</th>
        <th>acciones</th>
      </tr>
    </tfoot>
  </table>
  <!-- Modal -->
  <?php require_once components . "table/form.php"?>
</div>

<?php require_once components . "table/alerts.php"?>

<?php require_once layout . "footer.php"?>