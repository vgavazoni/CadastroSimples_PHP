<html>
  <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="icon.ico" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
 
        <title>Tela de Cadastro</title>
  </head>
 
    <body style="background-color:#ffffff;">
	
		
		<div class="blabla" style="    display: inline-table; background-color:#007bff; width:100%;" role="alert">
	  
			<center><p style="margin-top:14px; color:white;"><b>Tela de Cadastro</b></p></center>
		</div>
<center>

<?php
 
 

$nome = isset($_POST['nome']) ? $_POST['nome'] : null;   
$email = isset($_POST['email']) ? $_POST['email'] : null;   
$password = isset($_POST['password']) ? $_POST['password'] : null;    
 


if (empty($nome) || empty($email) || empty($password))  
{
    echo "Volte e preencha todos os campos!";
    exit;
}

	    $password = password_hash($_POST['password'] , PASSWORD_DEFAULT); 

		$conn = new mysqli('localhost', 'root', '', 'aulas');  

            if(! $conn ) {  
            die('Não foi possivel conectar: ' . mysqli_error());
         }

         $sql = "SELECT * FROM aula where email ='". $email ."'"; 
		 
         $result = mysqli_query($conn, $sql);  

         if (mysqli_num_rows($result) > 0) {  
           echo "Erro:<b style='color:red'> E-mail já cadastrado anteriormente!</b>"; 
		   exit();
            } else {
            echo "E-mail válido!<br>"; 
         }
         
   
		$sql2 = "INSERT INTO `aula`(id, nome, email, password) VALUES ('','".$nome."', '".$email."', '".$password."')"; 

            if (mysqli_query($conn, $sql2)) {  
               echo "<b style='color:green'>Cadastrado com Sucesso!</b>";  
			   echo "<br><a href='index.php'>Voltar</a>"; 
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn); 
            }
            $conn->close();  
         
   
   ?></center>
   
   
   
  