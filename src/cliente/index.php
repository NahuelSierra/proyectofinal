<?php include("db.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">

    <title>CRUD</title>
</head>
<body>
    <div class="container">
        <main>
            <div class="header">
                <div class="titulo">
                    CRUD
                </div>
                <div class="opciones">
                    <ul>
                        <li><a href="#Create">Create</a></li>
                        <li><a href="#Read">Read</a></li>
                    </ul>
                </div>
            </div>
        </main>
        <br><br><br><br><br>
        <main2>
            <div class="create" id="Create">

                <h2>CREATE</h2>
                <br><br>

                <form action="https://proyectofinal-crud.herokuapp.com/guardar.php" method="POST">
                    <ul>
                        <li><input type="text" name="legajo"  placeholder="legajo" autofocus required></li>
                        <li><input type="text" name="nombreyapellido" placeholder="nombre y apellido" autofocus required></li>
                        <li><input type="text" name="domicilio" placeholder="domicilio" autofocus required></li>
                        <li><p>Codigo Postal</p>
                        <select name="codigopostal"> 
                            <option type="text" value="Batan">Batan</option>
                            <option type="text" value="BahiaBlanca">Bahia Blanca</option>
                            <option type="text" value="MardelPlata">Mar del Plata</option>
                        </select></li>
                        <li><input type="date" name="fechanacimiento" placeholder="fecha nacimiento" autofocus required></li>
                        <li><input type="email" name="email" placeholder="email" autofocus required></li>
                        <li><input type="text" name="gruposanguineo" placeholder="grupo sanguineo" autofocus required></li>
                        <li><input type="text" name="telefonofijo" placeholder="telefono fijo" autofocus required></li>
                        <li><input type="text" name="telefonomovil" placeholder="telefono movil" autofocus required></li>
                        <li><input type="number" name="dni" placeholder="dni" autofocus required></li>
                    </ul>
                    <br>
                    <input type="submit" name="guardar" value="guardar" class="boton">
                </form>
            </div>
            <br>
            <div class="read" id="Read">

                <h2>READ</h2>

                <br><br><br>

                <div class="lecturas">
                    <form action="" method="POST" class="botones">
                        <input type="submit" name="Todos" value="Todos" class="boton">
                        <input type="submit" name="AlumnosdeBatan" value="Alumnos de Batan" class="boton">
                        <input type="submit" name="Alumnosde2002" value="Alumnos de 2002" class="boton">
                        <input type="submit" name="BatanysangreRH-" value="Batan y sangre RH-" class="boton">
                        <input type="submit" name="DNIAscendente" value="DNI Ascendente" class="boton">
                        <input type="submit" name="AlumnosdeJBJusto" value="Alumnos de JBJusto" class="boton">
                    </form>
                </div>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="scroll">
                <table class="leer">
                    <thead>
                        <tr>
                            <th>LEGAJO</th>
                            <th>NOMBRE Y APELLIDO</th>
                            <th>DOMICILIO</th>
                            <th>CODIGO POSTAL</th>
                            <th>FECHA NACIMIENTO</th>
                            <th>EMAIL</th>
                            <th>GRUPO SANGUINEO</th>
                            <th>TELEFONO FIJO</th>
                            <th>TELEFONO MOVIL</th>
                            <th>DNI</th>
                            <th>OPCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                            if(isset($_POST['Todos'])){

                                $query = "SELECT * FROM alumnos";
                                $result = mysqli_query($conn, $query);

                                while($row = mysqli_fetch_array($result)) { ?>
                                    <tr>
                                        <td><?php echo $row['legajo']?></td>
                                        <td><?php echo $row['nombreyapellido']?></td>
                                        <td><?php echo $row['domicilio']?></td>
                                        <td><?php echo $row['codigopostal']?></td>
                                        <td><?php echo $row['fechanacimiento']?></td>
                                        <td><?php echo $row['email']?></td>
                                        <td><?php echo $row['gruposanguineo']?></td>
                                        <td><?php echo $row['telefonofijo']?></td>
                                        <td><?php echo $row['telefonomovil']?></td>
                                        <td><?php echo $row['dni']?></td>
                                        <td>
                                            <a href="editar.php?legajo=<?php echo $row['legajo']?>">Editar</a>
                                            <a href="borrar.php?legajo=<?php echo $row['legajo']?>">Borrar</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>

                            <?php
                            if(isset($_POST['AlumnosdeBatan'])){

                                $query = "SELECT * FROM alumnos WHERE codigopostal = 'Batan' ";
                                $result = mysqli_query($conn, $query);

                                while($row = mysqli_fetch_array($result)) { ?>
                                    <tr>
                                        <td><?php echo $row['legajo']?></td>
                                        <td><?php echo $row['nombreyapellido']?></td>
                                        <td><?php echo $row['domicilio']?></td>
                                        <td><?php echo $row['codigopostal']?></td>
                                        <td><?php echo $row['fechanacimiento']?></td>
                                        <td><?php echo $row['email']?></td>
                                        <td><?php echo $row['gruposanguineo']?></td>
                                        <td><?php echo $row['telefonofijo']?></td>
                                        <td><?php echo $row['telefonomovil']?></td>
                                        <td><?php echo $row['dni']?></td>
                                        <td>
                                            <a href="editar.php?legajo=<?php echo $row['legajo']?>">Editar</a>
                                            <a href="borrar.php?legajo=<?php echo $row['legajo']?>">Borrar</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>

                            <?php
                            if(isset($_POST['Alumnosde2002'])){

                                $query = "SELECT * FROM alumnos WHERE fechanacimiento LIKE '2002%' ";;
                                $result = mysqli_query($conn, $query);

                                while($row = mysqli_fetch_array($result)) { ?>
                                    <tr>
                                        <td><?php echo $row['legajo']?></td>
                                        <td><?php echo $row['nombreyapellido']?></td>
                                        <td><?php echo $row['domicilio']?></td>
                                        <td><?php echo $row['codigopostal']?></td>
                                        <td><?php echo $row['fechanacimiento']?></td>
                                        <td><?php echo $row['email']?></td>
                                        <td><?php echo $row['gruposanguineo']?></td>
                                        <td><?php echo $row['telefonofijo']?></td>
                                        <td><?php echo $row['telefonomovil']?></td>
                                        <td><?php echo $row['dni']?></td>
                                        <td>
                                            <a href="editar.php?legajo=<?php echo $row['legajo']?>">Editar</a>
                                            <a href="borrar.php?legajo=<?php echo $row['legajo']?>">Borrar</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>

                            <?php
                            if(isset($_POST['BatanysangreRH-'])){

                                $query = "SELECT * FROM alumnos WHERE codigopostal = 'Batan' AND gruposanguineo = 'RH-' ";
                                $result = mysqli_query($conn, $query);

                                while($row = mysqli_fetch_array($result)) { ?>
                                    <tr>
                                        <td><?php echo $row['legajo']?></td>
                                        <td><?php echo $row['nombreyapellido']?></td>
                                        <td><?php echo $row['domicilio']?></td>
                                        <td><?php echo $row['codigopostal']?></td>
                                        <td><?php echo $row['fechanacimiento']?></td>
                                        <td><?php echo $row['email']?></td>
                                        <td><?php echo $row['gruposanguineo']?></td>
                                        <td><?php echo $row['telefonofijo']?></td>
                                        <td><?php echo $row['telefonomovil']?></td>
                                        <td><?php echo $row['dni']?></td>
                                        <td>
                                            <a href="editar.php?legajo=<?php echo $row['legajo']?>">Editar</a>
                                            <a href="borrar.php?legajo=<?php echo $row['legajo']?>">Borrar</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>

                            <?php
                            if(isset($_POST['DNIAscendente'])){

                                $query = "SELECT * FROM alumnos ORDER BY dni ASC ";
                                $result = mysqli_query($conn, $query);

                                while($row = mysqli_fetch_array($result)) { ?>
                                    <tr>
                                        <td><?php echo $row['legajo']?></td>
                                        <td><?php echo $row['nombreyapellido']?></td>
                                        <td><?php echo $row['domicilio']?></td>
                                        <td><?php echo $row['codigopostal']?></td>
                                        <td><?php echo $row['fechanacimiento']?></td>
                                        <td><?php echo $row['email']?></td>
                                        <td><?php echo $row['gruposanguineo']?></td>
                                        <td><?php echo $row['telefonofijo']?></td>
                                        <td><?php echo $row['telefonomovil']?></td>
                                        <td><?php echo $row['dni']?></td>
                                        <td>
                                            <a href="editar.php?legajo=<?php echo $row['legajo']?>">Editar</a>
                                            <a href="borrar.php?legajo=<?php echo $row['legajo']?>">Borrar</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>

                            <?php
                            if(isset($_POST['AlumnosdeJBJusto'])){

                                $query = "SELECT * FROM alumnos WHERE domicilio LIKE '%JBJusto%' ";
                                $result = mysqli_query($conn, $query);

                                while($row = mysqli_fetch_array($result)) { ?>
                                    <tr>
                                        <td><?php echo $row['legajo']?></td>
                                        <td><?php echo $row['nombreyapellido']?></td>
                                        <td><?php echo $row['domicilio']?></td>
                                        <td><?php echo $row['codigopostal']?></td>
                                        <td><?php echo $row['fechanacimiento']?></td>
                                        <td><?php echo $row['email']?></td>
                                        <td><?php echo $row['gruposanguineo']?></td>
                                        <td><?php echo $row['telefonofijo']?></td>
                                        <td><?php echo $row['telefonomovil']?></td>
                                        <td><?php echo $row['dni']?></td>
                                        <td>
                                            <a href="editar.php?legajo=<?php echo $row['legajo']?>">Editar</a>
                                            <a href="borrar.php?legajo=<?php echo $row['legajo']?>">Borrar</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
            </div>
        </main2>
    </div>

    <script src="js/index.js"></script>
</body>
</html>
