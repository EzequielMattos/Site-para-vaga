php
// Header 

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light"> Novo Usuário </h3>
    <form action="create.php" method="POST">
        <div class="input-field col s12">
          <input type="text" name="Nome" id="Nome">
          <label for="nome">Nome</label>
        </div>  

        <div class="input-field col s12">
          <input type="text" name="Nascimento" id="Nascimento">
          <label for="nome">Nascimento</label>
        </div>  

        <div class="input-field col s12">
          <input type="text" name="Cidade" id="Cidade">
          <label for="nome">Cidade</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="UF" id="UF">
          <label for="nome">UF</label>
        </div>  

        <div class="input-field col s12">
          <input type="text" name="Email" id="Email">
          <label for="nome">Email</label>
        </div>  

        <div class="input-field col s12">
          <input type="text" name="Senha" id="Senha">
          <label for="nome">Senha</label>
        </div> 

        <div class="input-field col s12">
          <input type="text" name="Observação" id="Observação">
          <label for="nome">Observação</label>
        </div>  

        <div class="input-field col s12">
          <input type="text" name="Ativo" id="Ativo">
          <label for="nome">Ativo</label>
        </div>

        <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
        <a href="index.php" class="btn"> Lista de Usuários </a>

    <form>
  </div>
</div> 
