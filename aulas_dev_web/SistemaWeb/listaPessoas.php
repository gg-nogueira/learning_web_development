 <?php 
 include_once "conexao.php";

 try {
    $sql="SELECT * FROM clientes";
    // email, endereco, cidade, estado, cep
    $result = mysqli_query($conectar, $sql);
    echo "<table border='1'><tr><td>E-mail</td></tr>";
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($linha = mysqli_fetch_assoc($result)) 
        {
        echo "<tr><td>$linha[email]</td>
        <td>$linha[endereco]</td>
        <td>$linha[cidade]</td>
        <td>$linha[estado]</td>
        <td>$linha[cep]</td>
        </tr>";
        }
        echo "</table>";    
    }
    } 
 catch (PDOException $e) {
     echo ("Erro: ". $e->getMessage());
     }
 
 ?>