<?php  
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/usuariomodel.php");
?>

<div class="centroform">
<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
    <div class="input-group">
      <div class="input-group-text">E-mail</div>
      <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="emailusu" placeholder="E-mail do Usuário">
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Pesquisar</button>
  </div>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
  <?php
$emailusu = isset($_POST["emailusu"])? $_POST["emailusu"] : "";

if($emailusu){
$dado = visuUsuarioEmail($conn,$emailusu);

foreach($dado as $emailusu):
?>
    <tr>
      <th scope="row"><?=$emailusu["idusu"]?></th>
      <td><?=$emailusu["nomeusu"]?></td>
      <td><?=$emailusu["foneusu"]?></td>
      <td><?=$emailusu["emailusu"]?></td>
      <td>
        <form action="../view/alterarform.php" method="POST">
        <input type="hidden" value="<?=$emailusu["idusu"]?>" name="codigousu">
        <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
      </td>
    <td>
      <?=$emailusu["idusu"]?>
    </td>
      

      
<?php  
endforeach;
}
?>
  </tbody>
</table>
</div>
<?php
include_once("footer.php");
?>

