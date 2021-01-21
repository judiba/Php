<?php 

  /* 
  *  
  *  
  *  
  *  
  */

// estabelecemos conexão com o banco de dados
mysql_connect('localhost','root','') or die(mysql_error());

// criamos o banco de dados atraves do script php
$create_base = mysql_query("CREATE DATABASE IF NOT EXISTS banco_exemplo;") or die(mysql_error());

// seleciona o banco de dados
mysql_select_db('banco_exemplo') or die(mysql_error());

if($create_base) {

 // criamos a tabela no banco de dados
 mysql_query("CREATE TABLE IF NOT EXISTS perguntas (
 id INT(11) AUTO_INCREMENT,
 pergunta VARCHAR(100) NOT NULL,
 resposta FLOAT NOT NULL,
 PRIMARY KEY(id)
 );") or die(mysql_error());

 // verifica se existe registros no banco
 $query = mysql_query("SELECT id, pergunta, resposta FROM perguntas");

 // se não existir registros então insere os valores abaixo
 if(empty($query)) {
 // insere alguns dados para os exemplos
 mysql_query("
 INSERT INTO perguntas(pergunta, resposta) VALUES
 ('Notebook', '2800'),
 ('Nobreak', '800'),
 ('Roteador Wireless', '180');
 ") or die(mysql_error());
 }
}

echo 'O Banco e a tabela já foram criados.';
  $pergunta1 = $_GET['pergunta1']; // vai vir o que está no value do radio

  if (isset($_GET['pergunta1'])) {
        $pergunta1 = $_GET['pergunta1'];
      }

  $multi = $_GET['escolhas']; // por eu ter colocado escolhas[] no form ele vai vir como um array.

  echo "Sua escolha foi... " . $opcao;
  echo "<br /><br />";

  echo "E sua outras escolhas... <br />";
  for($i = 0; $i < count($multi); $i++) {
    echo " Escolha " . $i . ": " . $multi[$i] . "<br />";
  {
    $resposta = $_POST['resposta'];
    $resposta_implode = implode(",",$resposta);
    
    $sql = "INSERT INTO form_teste (pergunta1, pergunta2, pergunta3, escolha1, escolha2, escolha3, resposta1, resposta2, resposta3, comentario ) VALUES('$pergunta1', '$pergunta2', '$pergunta3', '$escolha1', '$escolha2', '$escolha3', '$resposta1', '$resposta2', '$resposta3', '$comentario')";
        $resultado = mysqli_query($conexao, $sql);
  }      
?>