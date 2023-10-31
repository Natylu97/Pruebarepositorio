
<?php
$num=0;
echo "FOR";
echo"<br>";
if(isset($_POST['btnProceso'])){
      $num=$_POST['txtNumero'];
      for($k=1;$k<=10;$k++){
        $resul= $num*$k;
        echo $num." x ".$k." = ".$resul."<br>";
} 
}
echo"<br>";
echo"<br>";
echo"<br>";
echo"While";
echo"<br>";
$k=1;
$num=$_POST['txtNumero'];

while ($k <= 10) {
    $resul= $num*$k;
    echo $num." x ".$k." = ".$resul."<br>";
    $k++;
}
echo"<br>";
echo"<br>";
echo"<br>";

$num=$_POST['txtNumero'];

do {

    echo $num." x ".$k." = ".$num*$k."<br>";
$k++;

}while($k<=10);

?>
<h1>Tabla de multiplicar</h1>
<hr>
<div>
    <form method="post">
        <label>Ingrese Número: </label>
        <input type="text" name="txtNumero"
        placeholder="un valor entero"
        value="<?php if(isset($num)?>"
        >
        <button type="submit" name="btnProceso">Proceso</button>
    </form>

</div>

