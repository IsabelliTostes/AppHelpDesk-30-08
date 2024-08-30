<!DOCTYPE html>
    <head> 
        <meta charset="utf-8" />
        <title>App Help Desk</title>
    </head>

<body> 

    <?php
        session_start();
        $_SESSION ['X']='Seção oficialmente aberta';
        print_r($_SESSION['X']);
        echo'<hr>';

        $usuario_autenticator=false; 

            foreach ($usuarios2 = $user){ 
                if($email = $_POST ['email'];
                $senha = password_hash ($_POST['senha'])) {
                $usuarios2=true;
                 }
            } 

            if($usuario_autenticator) {
                echo "Usuario Autenticado";
                $_SESSION['autenticado'] = 'SIM';
                header('Location: home.php');
            }
            else{
                header('Location: index.php?login=erro');
                $_SESSION['autenticado'] = 'NAO';
            }

    ?>
</body>
    
</html>