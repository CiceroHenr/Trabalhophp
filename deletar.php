<a href="listar.php">Listar</a><br>
<?php
$numero = $_GET['numero'];
require_once('conexao.php');
$sql = "DELETE FROM alunos WHERE numero = $numero";
$r = mysqli_query($con, $sql);
if($r){
    echo "deletado com sucesso";
}else{echo "Erro";}

?>