<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="slider.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap');
    
        *{
            font-family: "Encode Sans Expanded", sans-serif;  
            font-style: normal;
            padding: 0;
            margin: auto;
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
            
            display: flex;
            justify-content: center;
            text-align: center;
            margin-top: 5%;
            height: 300px;
       
            
        }

        form{
            width: 300px;
            padding: 50px;
            border-radius: 1rem;
            box-shadow: 7px 7px 8px 0px rgba(100,100,100,0.5);
            border: 1px solid white;
           
        }

        form input{
            margin-bottom: 20px;
            padding: 5px;
            width: 200px;
            border-radius: 1rem;
            box-shadow: 2px 1px 5px 1px rgba(71,70,71,1);
            border:none;
        }

       

        form label{
            display: flex;
            justify-content: center;
            margin-left: -165px;
            margin-bottom: 5px;
            color: white;
        }

        form label:first-child{
            margin-top: 20px;
        }
        
        #titulo{
            font-family: "Encode Sans Expanded", sans-serif;
            font-weight: 100;
            font-style: normal;
            font-size: 40px;
            margin-top:50px;
            margin-left: 30px;
        }

        #subtitulo{
            font-family: "Encode Sans Expanded", sans-serif;
            font-weight: 100;
            font-style: normal;
            font-size: 30px;
            margin-left: 30px;
        }

        #titulo, #subtitulo{
            animation: float 3s ease-in-out forwards;
        }

        @keyframes float{
    0%{
       opacity: 0;
        transform: translateY(100px);
    }
   
    50%{
        opacity: 100%;
        transform: translateY(0);
    }
}
    form input:focus{
        transition: 0.1s;
        outline-offset: 3px  ;
        background-color: #ffffff;
    }
::-webkit-input-placeholder{
    color:black;
}

#botao{
    margin-top: 20px;
    width: 100px;
    cursor: pointer;
    color: white;
    background-color:#1315ef;
    box-shadow: 2px 0px 7px 2px rgba(0,0,0,1);
    border:none;
}

#botao:hover{
    transition: 0.2s;
    background-color: #2545ef;
}

.resultado{
    margin-left: 650px;
    background-color: beige;
    border: solid white 1px;
    padding: 15px;
    width:300px;
    color: red;
    
} 


.opcoes input{
    margin-left: -210px;
    width: 10px;
}
 

    </style>
</head>
<body>
<div class="background">
    <video src="fundoo.mp4" autoplay loop muted></video>
    </div>


    <p id="titulo">Faça seu registro</p> 
    <p id="subtitulo">e aproveite a RHP Gym</p>

    <div class="container">
        
    <form action="" method="post">
        <label for="">Nome</label>
        <input type="text" placeholder="@Username" name="username">
        </br>
        <label for="">Email</label>
        <input type="text" placeholder="Email" name="email">
        </br>
        <label for="">Senha</label>
        <input type="text" placeholder="Password" name="senha">
        </br>
        
        <div class="opcoes">

        <input type="checkbox" id="scales" name="scales" checked />
        <label for="scales">Professor</label>
        
        
        <input type="checkbox" id="scales" name="scales" checked />
        <label for="scales">Aluno</label>

        </div>
        </br>
        <input id="botao" type="submit" value="Registrar" name="registrar">
       
    </form>
</body>
</html>

<
<?php
include('conexao.php');
if(isset($_POST['registrar'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "INSERT INTO cadastro (username, email, senha) VALUES ('$username', '$email', '$senha')";
    $resultado = mysqli_query($conexao,$sql); 
    if ($resultado > 0){
        echo "<div class='resultado'>";
        echo "Resgistro realizado";
        echo '<meta http-equiv="refresh" content="2;url=login.php">';
        echo "</div>";
exit();
    }
    else{
        echo "erro" . mysqli_error($conexao);
    }
}
?>
