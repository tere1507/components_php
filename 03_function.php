<?php
//function para mostrar los componenetes con sus detalles
function mostrarComponentes(array $componentes): void {
    echo "<h2>List of Components</h2>";
    echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse;'>";
    echo "<thead><tr style='background-color: #f2f2f2;'>
            <th>Componente</th>
            <th>Modelo</th>
            <th>Capacidad</th>
            <th>Precio (€)</th>
          </tr></thead>";
    echo "<tbody>";
    foreach($componentes as $nombre=> $detalle) {//a $nombre se asigan la clave e este caso procesador y a $detalle toda la informacion que esta dentros delnuevo array
        $modelo = $detalle['modelo'] ?? 'N/A' ;
        $capacidad =$detalle['capacidad'] ?? 'N/A';
        $precio = $detalle['precio']?? 'N/A';

           echo "<tr>
                <td>$nombre</td>
                <td>$modelo</td>
                <td>$capacidad</td>
                <td>$precio</td>
              </tr>";
    }
    echo "</tbody></table>";

        //echo "<p><strong>$nombre</strong>: Modelo : $modelo | Capacidad : $capacidad | Precio : $precio €</p>";
    }



//mostrar la lista de usuarios
function mostrarUsuarios(array $usuarios): void {
    echo "<h2>List of User</h2>";
    echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse;'>";
    echo "<thead><tr style='background-color: #f2f2f2;'>
            <th>Nombre</th>
            <th>Apellido</th>
          </tr></thead>";
    echo "<tbody>";
    foreach($usuarios as $usuario) {
        //// Separa en 2 partes: nombre y apellido
       $partes = explode(' ', $usuario, 2);

       //asign name and lastname in the var whit null and false handler(manejador)
       $name = $partes[0] ?? '';
       $lastname = $partes[1] ?? '';
    echo "<tr>
                <td>$name</td>
                <td>$lastname</td>
              </tr>";
    }
    echo "</tbody></table>";
    
}


// mostrarComponentes(): Imprime cada componente con sus detalles usando foreach.

// mostrarUsuarios(): Muestra cada usuario en un párrafo.

// Se usa ?? 'N/A' por si alguna clave no existe (buena práctica).
?>