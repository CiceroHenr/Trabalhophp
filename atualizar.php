<a href="listar.php">Listar</a>
<?php
$numero = $_POST['n'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];

$num = $_POST['numeroA'];

include_once('conexao.php');

$sql = "UPDATE alunos SET nome = '$nome', sexo = '$sexo', numero = '$numero' WHERE numero = $num";

$r = mysqli_query($con, $sql);
if($r){
    echo "Dados atualizado com sucesso";
    echo $numero.$nome.$sexo;
}else{
    echo "Erro ao atualizar";
}

?>