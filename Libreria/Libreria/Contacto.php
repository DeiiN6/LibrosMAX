<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Contacto</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet">
        <!-- Fonts CSS-->
        <link rel="stylesheet" href="css/heading.css">
        <link rel="stylesheet" href="css/body.css">
    </head>

 <body id="page-top">
       <nav class="navbar navbar-expand-lg bg-dark fixed-top" id="mainNav">
            <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">Contacto</a>
                <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
					<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Autor.php">Autores</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Libros</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">ABOUT</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Inicio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                  <div class="card">
                       <div class="card-body">
                            <form action="Enviar.php" method="POST" > 
                                <div class="mb-3 mt-3">
                                <label for="asunto">id:</label>
                                <input type="text" class="form-control" id="" placeholder="" name="asunto">
                                </div>
                                <div class="mb-3 mt-3">
                                <label for="asunto">Fecha:</label>
                                <input type="text" class="form-control" id="asunto" placeholder="Ejemplo: 1/1/1999" name="asunto">
                                </div>
                                <div class="mb-3 mt-3">
                                <label for="asunto">Correo:</label>
                                <input type="email" class="form-control" id="asunto" placeholder="Ejemplo: Name123@none.com" name="asunto">
                                </div>
                                <div class="mb-3 mt-3">
                                <label for="asunto">Nombre:</label>
                                <input type="text" class="form-control" id="asunto" placeholder="" name="asunto">
                                </div>
                                <div class="mb-3 mt-3">
                                <label for="asunto">Asunto:</label>
                                <input type="text" class="form-control" id="asunto" placeholder="Asunto" name="asunto">
                                </div>
                                <div class="mb-3">
                                <label for="comentario">Comentario:</label>
                                <textarea class="form-control" rows="5" id="comentario" name="comentario"></textarea>
                                </div>

                                <button type="submit" class="btn btn-danger">Enviar</button>

                                <?php
                                    if(isset($_POST['id'])&& isset($_POST['Fecha'])&& isset($_POST['Correo'])&& isset($_POST['Nombre'])&& isset($_POST['Asunto'])&& isset($_POST['Comentario']))
                                    require_once "conectcontact.php";

                                ?>
                            </form>

                            
                        </div>
                   </div>
               </div>
            </div>
        </section>
 </body>
</html>


