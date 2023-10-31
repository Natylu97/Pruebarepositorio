<div>
    <form method="post">
        <div>
            <label>Fecha Venta: </label>
            <input type="date" name="txtFecha">
        </div>
        <div>
            <label>Cliente : </label>
            <select name="cboCliente">
                <option value="Alan">Damián</option>
                <option value="Zuley.">Elizabeth</option>
                <option value="Shirley">Natalia</option>
                <option value="Maximiliano">Francisco</option>
            </select>
        </div>
        <div>
            <label>Producto: </label>
            <select name="cboProducto">
                <option value="Tallarín">Tallarín</option>
                <option value="Atún">Atún</option>
                <option value="Deja">Deja</option>
                <option value="Pan">Pan</option>
                <option value="Caramelos">Caramelos</option>
            </select>
        </div>
        <div>
            <label>Cantidad: </label>
            <input type="number" name="txtCantidad">
        </div>
        <div>
            <label>Precio: </label>
            <input type="text" name="txtPrecio">
        </div>
        <button>Calcualar: </button>
    </form>
    <div>
        <hr>
        <h1>Resultado: </h1>
        <?php
        if (isset($_POST['btnCalcular'])) {
            $Fecha = $_POST['txtFecha'];
            $Cliente = $_POST['cboCliente'];
            $Producto = $_POST['cboProducto'];
            $Cantidad = $_POST['txtCantidad'];
            $Precio = $_POST['txtPrecio'];
            $subTot = $Cantidad * $Precio;
            $Iva = $subTot * 0.12;
            $Desc = 0;
            if ($subTot < 50) {
                $desc = $subTot * 0.05;
                $regalo = "No tiene Regalo";
            } else {
                if ($subTot >= 50 && $subTot < 100) {
                    $desc = $subTot * 0.07;
                    $regalo = "Pelota";
                } else {
                    if ($subTot >= 100 && $subTot < 200) {
                        $desc = $subTot * 0.10;
                        $regalo = "Licuadora";
                    } else {
                        $desc = $subTot * 0.15;
                        $regalo = "Viaje a Venezuela";
                    }
                }
            }
            $totPagar = $subTot + $iva - $desc;
            // **** mostrar resultado ***/
            echo "Fecha :" . $Fecha . "<br>";
            echo "Cliente :" . $Cliente . "<br>";
            echo "Producto :" . $Producto . "<br>";
            echo "Subtotal :" . $subTot . "<br>";
            echo "iva 12% :" . $Iva . "<br>";
            echo "Descuento :" . $Desc . "<br>";
            echo "Total a Pagar :" . $totPagar . "<br>";
            echo "Regalo :" . $regalo . "<br>";
        }

        ?>
    </div>
</div>