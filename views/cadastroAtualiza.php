<?php
//Cabeçalho da página
include("../models/conexao.php");
include("blades/header.php");
?>


<?php
$query = mysqli_query($conexao, "SELECT * FROM alunos WHERE codigo = 4");
$exibe = mysqli_fetch_array($query);
?>

<form action="../controllers/atualizarAluno.php" method="post">
     <label>Nome</label><br>
     <input type="hidden" name="alunoCodigo" value="<?php echo $exibe[0]?>"><br>
     <label>Cidade</label><br> 
     <input type="text" name="alunoNome" value="<?php echo $exibe[1]?>"><br>
     <label>Cidade</label><br>
     <input type="text" name="alunoCidade" value ="<?php echo $exibe[2]?>" ><br>
     <label>Sexo</label><br>
     M<input type="radio" name="alunoSexo" value="m" <?php echo ($exibe[3] == "m")?"checked":""; ?>><br>
     F<input type="radio" name="alunoSexo" value="f"<?php echo ($exibe[3] == "f")?"checked":""; ?>><br>
     <input type="submit" value="Atualizar"><br>
</form>

<?php
include("blades/footer.php");
?>