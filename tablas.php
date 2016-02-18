<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <title>tablas</title>
</head>
<body>
  <?php
	  $array =[1,2,3,"kemmer","mariana"];
	 
	   for($i=0; $i<count($array); $i++)
	   {

	      echo $array[$i];
	   }
           //array dimensional
           
           $array_without_indice= [0,2,3,1];
           $array_with_indice= array(
               "D1" => "kemmer",
               "D2" => "mariana"
           );
            //array multidimensional
           
           $array_multi=array(
               array(
                   "item"=>1,
                   "nombre"=>"mariana",
                   "codigo"=>"12345",
                   "asistencia"=>"true"
               ),
               array(
                   "item"=>2,
                   "nombre"=>"shayli",
                   "codigo"=>"1235",
                   "asistencia"=>"false"
               ),
               array(
                   "item"=>3,
                   "nombre"=>"jimena",
                   "codigo"=>"458",
                   "asistencia"=>"false"
               ),
               
               array(
                   "item"=>3,
                   "nombre"=>"jimena",
                   "codigo"=>"458",
                   "asistencia"=>"false"
               ),
               array(
                   "item"=>3,
                   "nombre"=>"jimena",
                   "codigo"=>"458",
                   "asistencia"=>"false"
               ),
                 array(
                   "item"=>3,
                   "nombre"=>"jimena",
                   "codigo"=>"458",
                   "asistencia"=>"false"
               ),
                 array(
                   "item"=>3,
                   "nombre"=>"jimena",
                   "codigo"=>"458",
                   "asistencia"=>"false"
               ),
           )
                          
 ?>

  <table border="1"align ="center">
   	 <tr> 
             <th>ITEM</th>
             <th>NOMBRE</th>
             <th>CODIGO</th>
             <th>ASISTENCIA</th>
         </tr>
         <?php for ($i=0; $i<count($array_multi);$i++){?>
         <tr>
             <th><?php echo $array_multi[$i]["item"]?></th>
             <th><?php echo $array_multi[$i]["nombre"]?></th>
             <th><?php echo $array_multi[$i]["nombre"]?></th>
             <th><?php echo $array_multi [$i]["asistencia"]?></th>
       
        </tr>
        <?php }   
        ?>
  </table>
</body>
</html>