<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/css/painel.css" />
  <?php include "../assets/icoBarraNavegacao.php" ?>
  <title>Painel</title>
</head>

<body>
  <header>
    <h1 id="logo">Logo aqui</h1>
  </header>
  <div class="aside-section">
    <aside>
      <div id="user-conectado">
        <p id="conectado">Usuário conectado</p>
        <p>João Pedro Maciel</p>
      </div>
      <div>
        <p>Cadastro ID</p>
        <p>1234</p>
      </div>
    </aside>

    <div id="lado-direito">
      <div class="title">
        <h1>Olá João Pedro!</h1>
        <p>Acesse alguma das configurações</p>
      </div>
      
    
      <section id="cadastro-section">
        <div id="cadastro-usuario">
          <img src="../assets/img/user.png" alt="">
          <button class="btnUsuario">Cadastrar usuário</button>
        </div>
        
        <div id="cadastro-funcionario">
          <img src="../assets/img/user.png" alt="">
          <button id="btnFuncionario">Cadastrar funcionario</button>
        </div>
      </section>

      <section id="relatorios-section">
        <div id="cadastro-usuario">
          <img src="../assets/img/user.png" alt="">
          <button class="btnUsuario">Receita</button>
        </div>
        
        <div id="cadastro-funcionario">
          <img src="../assets/img/user.png" alt="">
          <button id="btnFuncionario">Passageiros por operador</button>
        </div>

        <div id="cadastro-funcionario">
          <img src="../assets/img/user.png" alt="">
          <button id="btnFuncionario">Lista de funcionarios</button>
        </div>
      </section>

      <section id="modal-cadastrar-usuario">
        <div id="modal-cadastrar-usuario-container">
          <form action="">
            <h1>Cadastrar Usuário</h1>
            <label for="">Nome</label>
            <input type="text" placeholder="Digite o nome">
            <label for="">Email</label>
            <input type="text" placeholder="Digite o email">
            <label for="">Senha</label>
            <input type="text" placeholder="Digite a senha">
            <input type="submit" value="Cadastrar">
            <button id="closeModal">Voltar</button>
          </form>
        </div>
      </section>
      <section id="modal-cadastrar-funcionario">
        <div id="modal-cadastrar-funcionario-container">
          <form action="">
            <h1>Cadastrar Usuário</h1>
            <label for="">Nome</label>
            <input type="text" placeholder="Digite o nome">
            <label for="">Email</label>
            <input type="text" placeholder="Digite o email">
            <label for="">Senha</label>
            <input type="text" placeholder="Digite a senha">
            <input type="submit" value="Cadastrar">
            <button id="closeModalFuncionario">Voltar</button>
          </form>
        </div>
      </section>
    </div>
  </div>
  <script src="../assets/js/modal.js"></script>
</body>

</html>