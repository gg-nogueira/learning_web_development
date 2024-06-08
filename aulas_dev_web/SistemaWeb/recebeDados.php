<?php
//ambiente php
//variável de memória: $nomeVariavel
//get -->  variável superglobal $_GET
//post --> variável superglobal $_POST
//banco de dados: bancoEmpresa
//CREATE DATABASE bancoEmpresa
//USE bancoEmpresa
//CREATE TABLE clientes
//tabela: clientes
//nome varchar(80) não nulo
//nasc date não nulo
//endereco varchar(100) não nulo 
//genero char não nulo
//novosProdutos varchar(3) não nulo
//ofertas varchar(3) não nulo

//importando programa de conexao.php
include_once "conexao.php";
try {
    $nome=$_POST["fNome"];
    $nasc=$_POST["fNasc"];
    $end=$_POST["fEnd"];
    $genero=$_POST["fGenero"];
    //função empty verifica se variável está vazia
    if (empty($_POST["fInfo1"]))
    {
        $novosProdutos="nao";
    }
    else
    {
        $novosProdutos=$_POST["fInfo1"];
    }
    //verificando se variável fInfo2 está vazia
    if (empty($_POST["fInfo2"]))
    {
        $ofertas="nao";
    }
    else
    {
        $ofertas=$_POST["fInfo2"];
    }
    //tratando das informações recebidas do formulário
    $nome=strtoupper($nome);
    //$nome=strtolower($nome);
    //exibindo o conteúdo das variáveis
    //concatenação  .
    /*
    echo "<h1 style='text-align:center;color:blue;'>Estamos no PHP</h1>";
    echo 'Nome digitado: '.$nome;
    echo "<br><br>";''''
    echo "Nome digitado: $nome";  //obrigatório aspas duplas
    echo "<br><br>";
    echo "Data nascimento: ".$nasc."<br><br>";
    echo "Endereço: ".$end."<br><br>";
    echo "Gênero: ".$genero."<br><br>";
    echo "Novos produtos: ".$novosProdutos."<br><br>";
    echo "Nossas ofertas: ".$ofertas."<br><br>";*/
    $sql=$conectar->prepare("USE bancoEmpresa;INSERT INTO clientes (nome,nasc,endereco,genero,novosprodutos,ofertas)
    values ('$nome','$nasc','$end','$genero','$novosProdutos','$ofertas')");
  
    $sql->execute();
    header("location: index.html");
 }
catch (PDOException $e) 
{
    echo("Falha na gravação do registro!".$e->getMessage());
}

?>