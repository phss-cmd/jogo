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
      <div class="input-group-text">Código</div>
      <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="codigousu" placeholder="Código do Usuário">
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
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
  <?php
$codigousu = isset($_POST["codigousu"])? $_POST["codigousu"] : "";

if($codigousu){
$dado = visuUsuarioCodigo($conn,$codigousu);

foreach($dado as $codigousu):
?>
    <tr>
      <th scope="row"><?=$codigousu["idusu"]?></th>
      <td><?=$codigousu["nomeusu"]?></td>
      <td><?=$codigousu["foneusu"]?></td>
      <td><?=$codigousu["emailusu"]?></td>
      <td><?=$codigousu["foneusu"]?></td>
      <td>
        <form action="../view/alterarform.php" method="POST">
        <input type="hidden" value="<?=$codigousu["idusu"]?>" name="codigousu">
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


