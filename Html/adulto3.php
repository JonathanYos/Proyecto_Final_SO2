<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap5.3.0/css/bootstrap.min.css">
    <link rel="icon" href="../Imagenes/logo.png">
</head>

<body>
    <?php
    if (isset($_GET['btnCarrito'])) {
        echo 'hola djf alsdkf asdkfasdf sdñf sdafkaldf sdfklñds f adfsdjlkfsd fsdfkl ñ';
        Reenviar();
    }
    function Reenviar()
    {
        if (isset($_GET['ddltalla'])) {
            $talla = $_GET['ddltalla'];
            if (isset($_GET['ddlcantidad'])) {
                $cantidad = $_GET['ddlcantidad'];
                header("Location: index.html");
                //die();
            }
        }
    }
    ?>
    <div align="center" class="viewZapatos">

        <div align="left" class="btnDatos">

            <a href="index.html">
                <input type="image" src="../Imagenes/volverIcono.png" style="border:none;" height="50" width="50" />
            </a>

            <a href="catalogoNinos.html">
                <input type="image" src="../Imagenes/revista.png" style="border:none;" height="50" width="50" />
            </a>

        </div>

        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../Imagenes/zapatosAdultos/3.jpg" alt="modelo1" class="d-block" style="width:70%">
                </div>
                <div class="carousel-item">
                    <img src="../Imagenes/zapatosAdultos/3.1.jpg" alt="modelo2" class="d-block" style="width:40%">
                </div>
                <div class="carousel-item">
                    <img src="../Imagenes/zapatosAdultos/3.2.jpg" alt="modelo3" class="d-block" style="width:60%">
                </div>
                <div class="carousel-item">
                    <img src="../Imagenes/zapatosAdultos/3.3.jpg" alt="modelo4" class="d-block" style="width:80%">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <div class="move-carousel">
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

        <div class="formato-preCompra">
            <p class="h3">Nike Air White and Pink Low</p>
            <p class="fs-5">Precio Q950.00</p>
        </div>
        <form method="get">
            <div class="seleccionadorTalla">
                <p class="h4">TALLA</p>
                <select name="ddltalla" id="ddltalla" class="form-select" name="select">
                    <?php
                    $servername = "localhost";
                    $database = "zapatosbd";
                    $username = "root";
                    $password = "";
                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $database);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $sql = "SELECT * FROM talla_zapatos";
                    $result = $conn->query($sql);
                    if (mysqli_num_rows($result) > 0) {

                        echo '';
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . htmlspecialchars($row['id_talla']) . '">'
                                . htmlspecialchars($row['talla'])
                                . '</option>';
                        }
                        echo '';
                    }
                    mysqli_close($conn);
                    ?>
                </select>
            </div>

            </br>

            <div class="selecionadorCantidad">
                <p class="h4">CANTIDAD</p>
                <select class="form-select" arial-label="Defualt select example" name="ddlcantidad" id="ddlcantidad">
                    <option selected></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>

            </br>
            <div class="btnDatos2">
                <input type="image" src="../Imagenes/carritoIcono.png" style="border:none;" name="btnCarrito"id="btnCarrito"
                    height="90" width="80" />
            </div>
        </form>
    </div>
    <script src="../bootstrap5.3.0/js/bootstrap.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#btnCarrito').click(function () {
            document.location('formulario.php');
        });  
    </script>
</body>

</html>