
<form action="" method="post">
    <input type="text" name="user" id="user" placeholder="Usuário">
    <input type="password" name="senha" id="senha" placeholder="Senha">
    <input type="submit" value="Enviar">
</form>

<style>
    [type="submit"]  { 
        background: orange;
        color: ;
    }
    input { 
        padding: 10px 5px;
        margin: 3px 0;
        font-size: 16px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    form{
        display: flex;
        flex-direction: column;
        width: 400px;
        justify-content: center;
        margin: 0 auto;

    }
    body {
         background: #4c4c4c;
         display: flex;
         align-items: center;
    }
</style>

<?php 
    session_start();

    if(isset($_POST['user']) && isset($_POST['senha'])){
        
        $user = $_POST['user'];
        $senha = $_POST['senha']; 

        if($user == 'painel_busca3' && $senha == '123'){


            $_SESSION['user'] = $user;
            $_SESSION['senha'] = $senha;
            header('location: '. $row['url'] . '/admin');
         
        }
        else{

            $_SESSION['loginErro'] = 'Você precisa estar logado para acessar essa pagina ';
            
        }

    }

   
?> 


