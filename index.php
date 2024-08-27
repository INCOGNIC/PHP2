<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Compra en PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   <div class="container">
       <h1>Compras</h1>
   
       <form method="post" action="">
           <div class="producto">
               <h3>Producto 1</h3>
               <label for="precio1">Precio:</label>
               <input type="number" name="precio1" step="0.01" required>
               <label for="cantidad1">Cantidad:</label>
               <input type="number" name="cantidad1" required>
           </div>
           <div class="producto">
               <h3>Producto 2</h3>
               <label for="precio2">Precio:</label>
               <input type="number" name="precio2" step="0.01" required>
               <label for="cantidad2">Cantidad:</label>
               <input type="number" name="cantidad2" required>
           </div>
           <div class="producto">
               <h3>Producto 3</h3>
               <label for="precio3">Precio:</label>
               <input type="number" name="precio3" step="0.01" required>
               <label for="cantidad3">Cantidad:</label>
               <input type="number" name="cantidad3" required>
           </div>
           <button type="submit">Calcular</button>
       </form>

       <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
           $precio1 = $_POST['precio1'];
           $cantidad1 = $_POST['cantidad1'];
           $precio2 = $_POST['precio2'];
           $cantidad2 = $_POST['cantidad2'];
           $precio3 = $_POST['precio3'];
           $cantidad3 = $_POST['cantidad3'];

           $subtotal = ($precio1 * $cantidad1) + ($precio2 * $cantidad2) + ($precio3 * $cantidad3);
           $tasaImpuesto = 0.18;
           $tasaDescuento = 0.10;

           $impuestos = $subtotal * $tasaImpuesto;
           $descuento = $subtotal * $tasaDescuento;
           $totalFinal = $subtotal + $impuestos - $descuento;

     
           echo "<div class='resultados'>";
           echo "<h2>Resultados de la Compra</h2>";
           echo "<p>Subtotal: S/ " . number_format($subtotal, 2) . "</p>";
           echo "<p>Impuestos (18%): S/ " . number_format($impuestos, 2) . "</p>";
           echo "<p>Descuento (10%): -S/ " . number_format($descuento, 2) . "</p>";
           echo "<p>Total Final: S/ " . number_format($totalFinal, 2) . "</p>";
           echo "</div>";
       }
       ?>
   </div>
</body>
</html>
