<?php require_once layout . "header.php"?>

<div class="text-dark">
  <div class="container ">
    <div class="row align-items-center" style="height: 100vh;">
      <div class="col-12">
        <div class="">
          <figure class="mb-0 text-center">
            <img src="<?=_url?>/src/frontend/assets/logo.png" width="200" heigth="150" alt="logo">
          </figure>
          <p class="text-center my-4 h3">
            MiniFrame PHP - <span><a href="https://github.com/g1alexander/MiniFrame-PHP" target="_blank"
                class="text-decoration-none">Repositorio</a></span>
          </p>
        </div>
        <div class="d-flex justify-content-center">
          <h5>by
            <span>
              <a href="https://github.com/g1alexander/" target="_blank" class="text-decoration-none">
                @g1alexander</a>
            </span> - <script>
            var d = new Date()
            document.write(d.getFullYear())
            </script>
          </h5>
        </div>
        <div class="text-center mt-5">
          <h6>
            <a href="<?=_url?>demo/index" class="text-decoration-none">
              crud demostracion
            </a>
          </h6>
        </div>
      </div>
    </div>
  </div>
</div>


<?php require_once layout . "footer.php"?>