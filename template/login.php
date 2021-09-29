<?php include 'header.html';?>

<?php include'assets/conecta.php'; ?>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.svg" alt="logo">
              </div>
              <h4>Olá! Seja bem-vindo(a)</h4>
              <h6 class="fw-light">Para continuar informe.</h6>
              <form class="pt-3" action="login/verify_login.php" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="user" id="exampleInputEmail1" placeholder="Usuário">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Senha">
                </div>
                <div class="mt-3">
                	<button type="submit" class="btn btn-primary me-2">Entrar</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                       
                    </label>
                  </div>
                  <a href="register.php" class="auth-link text-black">Cadastrar</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<?php include 'footer.html';?>