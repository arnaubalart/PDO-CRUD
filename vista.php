<?php
include_once 'cabecera.html';
include 'ver.php';
echo "<h1>Administrar personas</h1>";
echo "<td><a type='button' class='btn btn-success'href='crear.php'>Crear</a></td>";
echo "<table class='table table-light'>";
echo "<tr>";
echo "<th>email</th>";
echo "<th>nombre</th>";
echo "<th>apellido</th>";
echo "<th>edad</th>";
echo "<th>Actualizar</th>";
echo "<th>Borrar</th>";
echo "</tr>";

foreach ($listaAlumnos as $alumno) {

    echo "<tr>";
    echo "<td>{$alumno['email']}</td>";
    echo "<td>{$alumno['nombre']}</td>";
    echo "<td>{$alumno['apellido']}</td>";
    echo "<td>{$alumno['edad']}</td>";

    echo "<td><form action='actualizar.php' method='POST'><input type='submit' value='Actualizar' class='btn btn-primary' onclick=\"return confirm('¿Estás seguro de actualizar?')\"></input><input type='hidden' name='email' value='{$alumno['email']}'></form></td>";

    echo "<td><form action='borrar.php' method='POST'><input type='submit' value='Borrar' class='btn btn-danger' onclick=\"return confirm('¿Estás seguro de borrar?')\"></input><input type='hidden' name='email' value='{$alumno['email']}'></form></td>";

    echo '</tr>';
}

echo "</table>";
echo "</html>";