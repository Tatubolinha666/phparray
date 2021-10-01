<html>

<body>
<?php 
$salarios=array('Rayssa' => 6000 ,'Yuri' => 2000, 'José' => 1000  );

echo "Salário de Rayssa é ".$salarios['Rayssa']."<br/>";
echo "Salário de Yuri é ".$salarios['Yuri']."<br/>";
echo "Salário de José é ".$salarios['José']."<br/>";

$salarios['José']="Baixo";
$salarios['Yuri']="Médio";
$salarios['Rayssa']="Alto";

echo "Salário de Rayssa é ".$salarios['Rayssa']."<br/>";
echo "Salário de Yuri é ".$salarios['Yuri']."<br/>";
echo "Salário de José é ".$salarios['José']."<br/>";


 ?>




</body>
</html>