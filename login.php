<!DOCTYPE html>
<html lang="pt-br
">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

@import url('https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
    font-family: "Encode Sans Expanded", sans-serif;
  font-style: normal;
  color:white;
}

.background{
    z-index: -1;
    position: fixed;
    inset: 0;
    width: 100%;
    height: 100%;
}

.background video{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.background::after{
    content: '';
    width: inherit;
    height: inherit;
    position: fixed;
    inset: 0;
    background: rgb(0,0,0);
    background: linear-gradient(162deg, rgba(0, 0, 0, 0.945) 35%, rgba(0,0,0,0.6026785714285714) 54%, rgba(0, 0, 0, 0.932) 67%);

}

.container{ 
    
    height: 500px;
    width: 1000px;
    margin-top: 130px;
    margin-left: 330px;
    border: none;
    background: linear-gradient(149deg, rgba(0, 0, 0, 0) 37%, rgba(35, 14, 224, 0) 100%);
    border-radius:16px;
    position:absolute;
    overflow: hidden;
    box-shadow: 4px 4px 13px 1px rgba(100,100,100,0.75);
    border: 1px solid white;
}
.esquerda{
    display: flex;
    height: 500px;
    width: 400px;
    background: linear-gradient(149deg, rgba(0, 0, 0, 0) 37%, rgba(35, 14, 224, 0) 100%);
    float: left;
    flex-direction: row;
    color: white;
    border-right: solid #fff 1px;
}

#titulo{
    font-size: 25px;
    margin-top: 60px;
    margin-left: 50px;
    height:0px;
    width:600px;
    font-family: "Encode Sans Expanded", sans-serif;
  font-weight: 100;
  font-style: normal;
}
#subtitulo{ 
    font-family: "Encode Sans Expanded", sans-serif;
     font-weight: 100;
  font-style: normal;
    display:flex;
    font-size: 40px;
    height: 0px;
    width:500px;
    background-color: red;
    margin-top: 150px;
    margin-left: -600px;
    
}

#texto{
    font-family: "Encode Sans Expanded", sans-serif;
  font-weight: 100;
  font-style: normal;
    display:flex;
    height: 0px;
    width: 250px;
    margin-top: 300px;
    margin-left: -480px;
}

#subtexto{
    font-family: "Encode Sans Expanded", sans-serif;
    font-weight: 100;
    font-style: normal;
    display:flex;
    justify-content:center;
    text-align: center;
    height: 0px;
    width: 150px;
    margin-top: 350px;
    margin-left: -210px;
    
}

.esquerda a{;
    color:white;  
}

.esquerda a:hover{;
    transition: 0.2s;
    color: #2545ef;
    text-decoration-color: rgba(180, 132, 235, 0.863);  
}

.form{
   height: 100%;
}

 .form input{
    background-color: #e2e2e2;
    margin-top: 30px;
    margin-left: 150px;
    padding: 10px;
    border-radius: 16px;
    width: 250px;
    box-shadow: 2px 2px 7px 2px rgba(0,0,10,1);
    color:black;

 }
 ::-webkit-input-placeholder {
   color: black;
 }

.form input:first-child{
    margin-top:150px;
}

.form input:focus{
    transition: 0.1s;
    outline-offset: 5px  ;
    background-color: #ffffff;
}

.button input{
    display:flex;
    cursor: pointer;
    border:none;
    color: white;
    box-shadow: 2px 2px 19px 2px rgba(0,0,10,1);
    justify-content: center;
    background-color:#1315ef;
    width: 200px;
    margin-left: 600px;
}

.button input:hover{
    background-color: #2545ef;

    transition: 0.2s;
}


</style>
</head>
<body>

<div class="background">
    <video src="fundoo.mp4" autoplay loop muted></video>
    </div>

    <div class="container" >
    
        <div class="esquerda">
            <p id="titulo">Bem-vindo a</p>
            <p id="subtitulo">RHP gym</p>
            <p id="texto">Acesse sua conta agora mesmo </p>
            <a href="registro.php"><p id="subtexto"> ou registre-se</p></a>
        </div>
    <form class="form" action="" method="post" target="frame">
        <input type="text" name="username" placeholder="@Username">
        </br>
        <input type="password" name="senha" placeholder="Senha">
        </br>
        <div class="button">
            <input type="submit" value="entrar" >
        </div>
<label for="html"></label><br>
    </form>
    
</div>
</body>
</html>

<div id="resul">
<?php
include('conexao.php');
if (!$conexao)
	{
		die("Falha na Conexao " .mysqli_connect_error());
	}
$login = $_POST['username'];
$senha = $_POST['senha'];
$sql = "SELECT * from tblogin WHERE login = '$login' AND senha = '$senha' " ;
$resul = $conexao->query($sql);

if (mysqli_num_rows($resul) > 0){

    echo '<script>window.location.href = "index.html";</script>';

    exit();
}


else{
    echo "login ou senha inválidos!";
}

?>

</div>