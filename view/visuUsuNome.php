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
      <div class="input-group-text">Nome</div>
      <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="nomeUsu" placeholder="Nome do Usuário">
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">E-mail</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
  <?php
$nomeusu = isset($_POST["nomeUsu"])? $_POST["nomeUsu"] : "";
if($nomeusu){
$dado = visuUsuarioNome($conn,$nomeusu);

foreach($dado as $nomeUsuarios):
?>
    <tr>
      <th scope="row"><?=$nomeUsuarios["idusu"]?></th>
      <td><?=$nomeUsuarios["nomeusu"]?></td>
      <td><?=$nomeUsuarios["foneusu"]?></td>
      <td><?=$nomeUsuarios["emailusu"]?></td>
      <td>
        <form action="../view/alterarform.php" method="POST">
        <input type="hidden" value="<?=$nomeUsuarios["idusu"]?>" name="codigousu">
        <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
      </td>
    </tr>
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


