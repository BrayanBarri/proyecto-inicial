<?php
header("Content-type: application/xlsx");
header("Content-Disposition: attachment; filename = RepotesDeArticulos.xls");
?>

<!DOCTYPE html>
<html lang="es-co">
    <head>
      
   <style>
 main-containert{
            margin: 550px auto;
            width: auto;
}
table{
    background-color: white ;
    text-align: left;
    border-collapse: collapse;
    width: auto;
    
}
th, td{
   
    padding: 20px;
}
.esta{
    background-color:#59ab6e ;
    border-bottom: solid 5px #0f0f0f;
    color:white;
}

tbody {
    background-color: #ddd;

}
tr:hover td{
    background-color:#369681 ;
    color: white;
}

    </style>

    <style media="print">
@page{
    size: A4;
    margin: 0;

}
.boton{
    display: none;
    visibility: none;
}
    </style>


        
</head>
<body >
    
<center>


<?php
       include_once("conex.php");
       $sql="SELECT * FROM articulo WHERE idArticulo ORDER BY nombre ASC ";
       $resultado=mysqli_query($conex,$sql);
?>



<h1>lista de articulos</h1>

<div class="main-containert">
<table>
    <thead class="esta">
       <tr>
        <th>idArticulo</th>
        <th>idCategoria</th>
        <th>idEmpresa</th>
        <th>nombre</th>
        <th>precioVenta</th>
        <th>stock</th>
        <th>descripcion</th>
        <th>foto</th>
        <th>Acciones</th>
       </tr>
    </thead>
    
    <tbody>
       <?php
       while($filas=mysqli_fetch_assoc($resultado)){

       

       ?>
       <tr>
        <td><?php echo $filas['idArticulo'] ?></td>
        <td><?php echo $filas['idCategoria'] ?></td>
        <td><?php echo $filas['idEmpresa'] ?></td>
        <td><?php echo $filas['nombre'] ?></td>
        <td><?php echo "$"?><?php echo $filas['precioVenta'] ?></td>
        <td><?php echo $filas['stock'] ?></td>
        <td><?php echo $filas['descripcion'] ?></td>
        <td><?php echo $filas['fotos'] ?></td>
        

        <td><?php echo "<a href='editarArtculo.php?idArticulo=".$filas ['idArticulo']."'><button>EDITAR</button></a>"; ?>
        -
        <?php echo "<a href='eliminarArticulo.php?idArticulo=".$filas ['idArticulo']."'><button>ELIMINAR</button> </a>";  ?>
        </td>
       </tr>
       <?php
       }
       ?>
    </tbody>
    
</table>
</div>
<?php 
mysqli_close($conex);
?>
</center>
           
     <br><br><br><br><br><br><br><br><br><br>
	<div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; proyecto bajo supervicion del <a rel="sponsored" href="https://www.sena.edu.co/es-co/Paginas/default.aspx" target="_blank">SENA</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

	<script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" 
    referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>


  <script>
    $('#myTable thead th').each( function () {
        var title = $('#myTable tfoot th').eq( $(this).index() ).text();
        //$(this).html( '&amp;lt;input type=&amp;quot;text&amp;quot; placeholder=&amp;quot;Search '+title+'&amp;quot; /&amp;gt;' );
    } );
 
    // DataTable
    var table = $('#myTable').DataTable();
 
    // Apply the search
    table.columns().eq( 0 ).each( function ( colIdx ) {
        $( 'input', table.column( colIdx ).header() ).on( 'keyup change', function () {
            table
                .column( colIdx )
                .search( this.value )
                .draw();
        } );
    } );

    

  </script>



      
    <!-- Close login -->
</body>
</html>

