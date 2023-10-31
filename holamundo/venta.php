<?php
$regalo = 0;
$cliente = " DAMIÁN ";
$producto = " MORAS ";
$canti = 9;
$precio = 7;
$subTot = $canti * $precio;
$iva = $subTot * 0.12;
$desc = 0;
if ($subTot < 50) {
   $desc = $subTot * 0.05;
   $regalo = " No hay regalo";
} else {
   if ($subTot >= 51 && $subTot < 100) {
      $desc = $subTot * 0.07;
      $regalo = " Cuaderno";
   } else {
      if ($subTot >= 101 && $subTot < 200) {
         $desc = $subTot * 0.10;
         $regalo = " Lonchera";
      } else {
         if ($subTot > 200) {
            $desc = $subTot * 0.15;
            $regalo = " Mochila de dora la exploradora";
         }
      }
   }
}
$totPagar = $subTot + $iva - $desc;
?>
<label>RESULTADOS</label><br>
<label>Cliente :</label><?php echo $cliente; ?><br>
<label>Producto :</label><?php echo $producto; ?><br>
<label>Total :</label><?php echo $totPagar; ?><br>
<label>Sub Total :</label><?php echo $subTot; ?><br>
<label>Descuento :</label><?php echo $desc; ?><br>
<label>Regalo :</label><?php echo $regalo; ?><br>