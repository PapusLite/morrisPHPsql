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
   <div id="carga_grafica_Bar"></div>
  </div>
 </body>
</html>
<script>
        $(document).ready(function(){
        $('#carga_grafica_Bar').load('graphbar.php');
        //$('#loadarea').load('area.php');
    });
</script>