<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap5.3.0/css/bootstrap.min.css">
    <title>Formulario de Contacto</title>
    <link rel="icon" href="../Imagenes/logo.png">
</head>

<body>
    <?php
    if (isset($_GET['Enviar'])) {
        Reenviar();
    }
    function Reenviar()
    {
        if (isset($_GET['Nombre'])) {
            $nombre = $_GET['Nombre'];
            $apellido = $_GET['Apellido'];
            $direccion = $_GET['Direccion'];
            $departamento = $_GET['Departamento'];
            $NIT = $_GET['NIT'];
            $Correo = $_GET['Correo'];
            $Telefono = $_GET['Telefono'];

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

            $sql = "INSERT INTO clientes 
                    VALUES ('".$nombre."', '".$apellido."', '".$direccion."','".$departamento."','".$NIT."','".$Correo."','".$Telefono."')";

            if ($conn->query($sql) === TRUE) {
                echo "Registro realizado con exito";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }

    ?>
    <header>
        <nav class="navbar navbar-light bg-secondary">
            <a href="#" class="navbar-brand text-white border-rounded">
                <img src="../Imagenes/logo1.png" class="ml-2 rounded-circle p-2 bg-white mt" width="50" alt="" />
                ShoesOnlineGt
            </a>
        </nav>
    </header>
    <main class="container">
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-12">
                <h1>Formulario de Contacto</h1>
            </div>
            <div class="col-6">
                <label for="lblNombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="lblNombre" name="Nombre" maxlength="50" required>
                <div class="invalid-feedback">
                    Debe llenar este campo
                </div>
            </div>
            <div class="col-6">
                <label for="lblApellido" class="form-label">Apelido</label>
                <input type="text" class="form-control" id="lblApellido" name="Apellido" maxlength="50" required>
                <div class="invalid-feedback">
                    Debe llenar este campo
                </div>
            </div>
            <div class="col-6">
                <label for="lblDireccion" class="form-label">Dirección Exacta</label>
                <input type="text" class="form-control" id="lblDireccion" name="Direccion" maxlength="200" required>
                <div class="invalid-feedback">
                    Debe llenar este campo
                </div>
            </div>
            <div class="col-6">
                <label for="lblDepartamento" class="form-label">Departamento</label>
                <select class="form-control" id="lblDepartamento" name="Departamento" required>
                    <option value="0"></option>
                    <option value="1">Alta Verapaz</option>
                    <option value="2">Baja Verapaz</option>
                    <option value="3">Chimaltenango</option>
                    <option value="4">Chiquimula</option>
                    <option value="5">El Progreso</option>
                    <option value="6">Escuintla</option>
                    <option value="7">Departamento de Guatemala</option>
                    <option value="8">Huehuetenango</option>
                    <option value="9">Izabal</option>
                    <option value="10">Jalapa</option>
                    <option value="11">Jutiapa</option>
                    <option value="12">Petén</option>
                    <option value="13">Quetzaltenango</option>
                    <option value="14">Quiché</option>
                    <option value="15">Retalhuleu</option>
                    <option value="16">Sacatepéquez</option>
                    <option value="17">San Marcos</option>
                    <option value="18">Santa Rosa</option>
                    <option value="19">Sololá</option>
                    <option value="20">Suchitepéquez</option>
                    <option value="21">Totonicapán</option>
                    <option value="22">Zacapa</option>
                </select>
                <div class="invalid-feedback">
                    Debe llenar este campo
                </div>
            </div>
            <div class="col-6">
                <label for="lblNIT" class="form-label">NIT</label>
                <input type="text" class="form-control" id="lblNIT" name="NIT" maxlength="13" required>
                <div class="invalid-feedback">
                    Debe llenar este campo
                </div>
            </div>
            <div class="col-6">
                <label for="lblCorreo" class="form-label">E-Mail</label>
                <input type="email" class="form-control" id="lblCorreo" name="Correo" maxlength="100" required>
                <div class="invalid-feedback">
                    Debe llenar este campo
                </div>
            </div>
            <div class="col-6">
                <label for="lblTelelefono" class="form-label">Teléfono</label>
                <input type="number" class="form-control" id="lblTelelefono" name="Telefono" maxlength="8" required>
                <div class="invalid-feedback">
                    Debe llenar este campo
                </div>
            </div>
            <div class="col-6" style="text-align: right; ">
                    <button type="submit" class="btn btn-success mt-4 w-100" name="Enviar"><i class="fas fa-paper-plane"></i>
                        Enviar</button>
            </div>
        </form>
    </main>
    <script src="../bootstrap5.3.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/ece2b7997c.js" crossorigin="anonymous"></script>
</body>

</html>