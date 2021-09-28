<!doctype html>
<html>
  <head>
        <meta charset="utf-8">  
		<meta name="viewport" content="width=device-width, initial-scale=1">  
		<link rel="icon" type="image/x-icon" href="icon.ico" />  
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 
        <title>Tela de Cadastro</title>
  </head>
 
    <body style="background-color:#ffffff;">
	
		
		<div class="teste" style="display: inline-table; background-color:#007bff; width:100%;" role="alert">
	  
			<center><p style="margin-top:14px; color:white;"><b>Tela de Cadastro</b></p></center>
		</div>

        <center><form action="addLogin.php" method="post" style=" padding-top:12px;">  
            <br>
			<label>Nome: </label>
            <input type="text" style="max-width:400px;" name="nome" id="nome" placeholder="Seu nome" required>
            <br>
			<label>E-mail: </label>
            <input type="email"  style="max-width:400px;" name="email" id="email" placeholder="Seu e-mail" required>
            <br>
			<label>Senha: </label>
            <input type="password"  style="max-width:400px;"  name="password" id="password" placeholder="Sua senha" required>

            <br><br>
		    <button type="submit" value="Cadastrar" class="btn btn-primary mb-2">Salvar</button>
            
        </form>
		</br>
		<a href="../Aula2/index.php">Login!</a>
		</center>
		
      </div>
    </body>
</html>