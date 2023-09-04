<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>encabezado</title>
    </head>
    <body>
        <header>
            <div class="container">
                <h1><img src=" img/logo.png"al="logo" style="width:50px;height:50px;"> Medical SysLab </h1>
                <?php  
                    if($pag != 'login'){
                ?>
                <h7>Usuario: <?php echo$_SESSION['user']; ?> Rol: 
                <?php 
                    if($_SESSION['rol'] == 1){
                        echo 'Administrador'; 
                    }if($_SESSION['rol'] == 2){
                        echo 'Medico'; 
                    }if($_SESSION['rol'] == 3){
                        echo 'Paciente'; 
                    }
                    }
                ?></h7>
            </div>
        </header>
    </body>
</html>