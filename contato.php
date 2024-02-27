<?php 
include_once('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios(nome, email) values ('$nome' , '$email')";
$query = mysqli_query($conexao, $sql);

    echo "<script>
        window.location.replace('../isabela/index.html');
        
    </script>"
 
?>