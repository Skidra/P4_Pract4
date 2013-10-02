<html>
<body>
<?php
   $pais = array();
   $pais["Mexico"]=array("Guadalajara","Edo. Mexico","Veracruz","Guerrero","Nayarit");
   $pais["Argentina"]=array("Buenos Aires","Cordoba","La Plata","Mar de Plata","Santa Fe");
   $pais["Bolivia"]=array("Cochabamba","Guayaramerin","Montero","Potosi","Trinidad");
   $pais["Canada"]=array("Burnaby","Charlottetown","Hamilton","Ottawa","Quebec");
   $pais["Egipto"]=array("Alejandria","Banha","El Cairo","Giza","Suhaj");
   $pais["Francia"]=array("Burdeos","Cannes","Paris","Sedan","Versalles");
   $pais["Grecia"]=array("Atenas","Creta","Delfos","Esparta","Olimpia");
   $pais["Mexico"]=array("Guadalajara","Edo. Mexico","Veracruz","Guerrero","Nayarit");
   $pais["Inglaterra"]=array("Londres","Liverpool","Nottingham","Edimburgo","Bristol");
   $pais["Suiza"]=array("Ginebra","Berna","Lucerna","Zurich","Basilea");


   foreach ($pais as $nombre=>$ciudades){
      echo"<ul>";
      echo"<li>".$nombre."</li><br>";
      echo "<ol>";
      for($i=0;$i<count($pais[$nombre]);$i++){
	 echo "<li>".$pais[$nombre][$i]."</li>";
      }

      echo "</ol>";
      echo "</ul>";
   }

?>
</body>
</head>