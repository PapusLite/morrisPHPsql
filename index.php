<?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "morris");
$query = "SELECT * FROM cuenta";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ año:'".$row["año"]."', ganancia:".$row["ganancia"].", compra:".$row["compra"].", venta:".$row["venta"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Tutorial de Webslesson | Cómo usar el gráfico Morris.js con PHP y Mysql</title>
  <link rel="stylesheet" href="morrisLibs/morris.css">
  <script src="jqueryLibs/jquery-3.5.1.min.js"></script>
  <script src="raphaelLibs/raphael-min.js"></script>
  <script src="morrisLibs/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">Gráfico de Morris.js con PHP y Mysql</h2>
   <h3 align="center">Datos de ganancias, compras y ventas de los últimos 10 años</h3>   
   <br /><br />
   <div id="gráfica_de_barras"></div>
  </div>
 </body>
</html>

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