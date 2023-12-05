<?php
  require_once("validador_acesso.php");
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Cadastrar Vaga
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="cadastrar_vaga.php">
                    <div class="form-group">
                      <label>Título da vaga</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Ex.: Desenvolvedor Full-Stack">
                    </div>

                    <div class="row">
                      <div class="form-group col-6">
                        <label>Modalidade</label>
                        <select name="modalidade" class="form-control">
                          <option>Home Office</option>
                          <option>Presencial</option>
                        </select>
                      </div>
                    
                      <div class="form-group col-6">
                        <label>Salário</label>
                        <input name="salario" type="number" class="form-control">
                        <!--<div class="form-text">Informe o salário.</div>-->
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>
                    

                    <div class="row mt-5">
                      <div class="col-6">
                        <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Cadastrar</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>