
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">
        <link rel="stylesheet" href="css/style-home.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">  
    </head>    

    <body>
        <header>
            <div class="text-center">
                <img src="img/logoits.png" class="img-fluid">
            </div>             
        </header>       

        <body class="d-flex flex-column h-100">
            <div class="container-fluid">                      
                <div class="container justify-content-center">
                    <form action="index.php" method="POST" name="form_login">
                        <div id="login-row" class="row justify-content-center align-items-center">
                            <div id="login-column" class="col-md-12">
                                <div id="login-box" class="col-md-12">
                                    <h4 class="text-center">Control de Inventario</h4>
                                    <div class="form-group">
                                        <i class="far fa-trash-alt"></i> <input type="text" name="nombreUsuario" id="nombreUsuario" class="form-control" placeholder="Nombre de usuario">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña" class="form-control" required>
                                    </div>
                                        <input type="submit" class="btn btn-primary" name="save_record" value="Ingresar">
                                </div>
                                                              
                            </div> 
                        </div>    
                    </form>                   
                </div>                
            </div>        

        </body>

        <footer>                  
            <img src="img/logotelefonica.png" width="400" height="300">
            <p class="copyright">Planilla Bodega Telefonica - © ITS-Infocom</p>        
        </footer>
    </body>    

</html>