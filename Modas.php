<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modas</title>
    <link rel="stylesheet" type="text/css" href="Estilos.css">
    <script src="https://kit.fontawesome.com/32bfe0633a.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- barra menu-->
    <header>
        <nav>
            <img src="Imagenes/Logom-verde.png" class="barramenu" alt="">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Mujeres</a></li>
                <li><a href="#">Hombres</a></li>
                <li><a href="#">Cesta</a></li>
                
         <?php
                    // Verificar si hay una sesión activa
                    if (isset($_SESSION["correo"])) {
                        // Mostrar el correo del usuario
                        echo $_SESSION["correo"];
                        
                        // Verificar si el usuario tiene un rol de administrador (rol == 1)
                        if (isset($_SESSION["rol"]) && $_SESSION["rol"] == 1) {
                ?>
                            <p>Hola Admin</p>
                            <a href="views/admin_user.php"><button class="btniniciar">Gestión</button></a>
                            <a href="cerrarsesion.php"><button class="btniniciar">Cerrar Sesión</button></a>
                <?php
                        } else {
                            // Si el usuario no es administrador, solo mostrar el botón de cerrar sesión
                ?>
                            <a href="cerrarsesion.php"><button class="btniniciar">Cerrar Sesión</button></a>
                <?php
                        }
                    } else {
                        // Si no hay una sesión activa, mostrar el botón para iniciar sesión
                ?>
                        <a href="registro.php"><button class="btniniciar">Iniciar Sesión</button></a>
                <?php
                    }
                ?>


            </ul>
        </nav>
    </header>
    

    <!------------------------banner------------------------------>
 <section class="section-banner">   
    <div class="banner">
        <img src="Imagenes/banner.jpg" alt="Banner">
        <div class="texto-banner">
            <p> Novedades</p>
            <h1><strong>Los colores<br>del verano</strong></h1>
            <button class="buttonbanner1">Comprar ahora</button>
        </div>
    </div>
</section>

    <!-----------------------Slider de productos------------------------->
    <section class="product">
        <h2 class="product-category">Novedades destacadas</h2>
        <button class="pre-btn"><img src="Imagenes/arrow.png" class="arrow" alt=""></button>
        <button class="nxt-btn"><img src="Imagenes/arrow.png" class="arrow"  alt=""></button>
        <div class="product-container">

            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="Imagenes/card1.png" class="product-thumb" alt="">
                    <button class="card-btn">Agregar a la Cesta</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Camiseta</h2>
                    <span class="price">$20.000</span><span class="actual-price">$40.000</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="Imagenes/card2.png" class="product-thumb" alt="">
                    <button class="card-btn">Agregar a la Cesta</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Chaqueta</h2>
                    <span class="price">$40.000</span><span class="actual-price">$80.000</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="Imagenes/card3.png" class="product-thumb" alt="">
                    <button class="card-btn">Agregar a la Cesta</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Camiseta algodón</h2>
                    <span class="price">$30.000</span><span class="actual-price">$60.000</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="Imagenes/card4.png" class="product-thumb" alt="">
                    <button class="card-btn">Agregar a la Cesta</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Chaqueta tweed</h2>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="Imagenes/card5.png" class="product-thumb" alt="">
                    <button class="card-btn">Agregar a la Cesta</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Chaqueta de traje</h2>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="Imagenes/card6.png" class="product-thumb" alt="">
                    <button class="card-btn">Agregar a la Cesta</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">chaqueta gris</h2>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>

        </div>
    </section>

<script src="script.js"></script>
</body>


<!------Pie de pagina--------->
<footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="Imagenes/Logom-azul.png" alt="">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, porro.</P>
        </div>
        <div class="box">
            <H2>SIGUENOS</H2>
            <div class="red-social">
                <a href="https://es-la.facebook.com/" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
            </div>
        </div>  
    </div>
    <div class="grupo-2">
        <small>&copy; 2024 <b>Modas</b> - Todos los derechos reservados</small>
    </div>
</footer>

</html>