<?php 
  
  include_once("templates/header.php");  

?>

<div class="container">
  <?php include_once("templates/backbtn.html"); ?>   
  <h1 id="main-title">Criar Contato</h1>

  <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      

      <div class="form-group">
          <label for="name">Nome do contato:</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Escreva seu nome" required>
      </div>
      
      <div class="form-group">
        <label for="phone">Telefone do contato:</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Escreva seu telefone" required>
      </div>
      
      <div class="form-group">
        <label for="observations">Observações:</label>
         <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" cols="30" rows="3"></textarea>
      </div>
      
      <button id="btn" type="submit" class="btn btn-info">Cadastrar</button>
  </form>
</div>


<?php 

include_once("templates/footer.php");

?>