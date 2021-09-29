<?php include 'header.html' ?>

<body style="background: #F4F5F7;">
    <!-- partial -->
      <!-- partial -->
      <div class="container main-panel ">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Registro</h4>
                  <p class="card-description">
                    Cadastro de usuários
                  </p>
                  <form class="forms-sample" action="contact/register_usu.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputName1">Nome</label>
                      <input type="text" class="form-control" id="nome" name="username" required="required" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email</label>
                      <input type="email" class="form-control" id="email" name="email" required="required"  placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Senha</label>
                      <input type="password" class="form-control" id="senha" name="senha" required="required"  placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Tipo de acesso</label>
                        <select class="form-control" id="exampleSelectGender" name="role">
                          <option value="A">Aluno</option>
                          <option value="P">Professor</option>
                          <option value="ADM">Administrador</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Cadastrar</button>
                    <button class="btn btn-light">Cancelar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php include 'footer.html';?>
