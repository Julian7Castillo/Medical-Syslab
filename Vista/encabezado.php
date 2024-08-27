<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <header>
            <div class="flex space">
                <h1>
                    <a class="titulo" href="index.php?pag=inicio">
                    <img src="Vista/img/logoMS.png"al="logo" style="width:80px;height:80px;"> Medical SysLab 
                    </a>   
                </h1>
                <?php  
                    if (!(isset($_SESSION["ccMedicalSyslab"]))) {
                ?>
                        <a class="registro titulo" href="index.php?pag=login"><button class="btn btn-primary btn-lg"> Iniciar Sesión</button></a>
                    <?php 
                    }else {
                        ?>
                        <div class="flex botonPerfil">
                            <button type="button" class="btn btn-outline-danger botonPerfil flex" >
                            <a class="botonPerfil flex" href="index.php?pag=perfil">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                </svg>
                                <div class="spaceMargin">
                                    <h7>Usuario: <?php echo$_SESSION['userMedicalSyslab']; ?><br>
                                    Rol: 
                                    <?php 
                                        if($_SESSION['rolMedicalSyslab'] == 1){
                                            echo 'Administrador'; 
                                        }if($_SESSION['rolMedicalSyslab'] == 2){
                                            echo 'Medico'; 
                                        }if($_SESSION['rolMedicalSyslab'] == 3){
                                            echo 'Paciente'; 
                                        }else{

                                        }
                                    ?></h7>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </header>
    </body>
</html>