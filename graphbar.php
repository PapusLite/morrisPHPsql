<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Graph BAR</title>
</head>
<body>

<?php
require_once "conexion.php";
$connect= conexion();
$query = "SELECT * FROM cuenta";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ año:'".$row["año"]."', ganancia:".$row["ganancia"].", compra:".$row["compra"].", venta:".$row["venta"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>

<div id="gráfica_de_barras">
</div>

<script>
    
Morris.Bar({
 element : 'gráfica_de_barras',
 data:[<?php echo $chart_data; ?>],
 xkey:'año',
 ykeys:['ganancia', 'compra', 'venta'],
 labels:['Ganancias', 'Compras', 'Ventas'],
 hideHover:'auto',
 stacked:true
});

</script>
</body>
</html>