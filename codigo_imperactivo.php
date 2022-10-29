<?php
#codigo imperativo o espagueti
$auto1 = (object)["marca"=>"nissan", "modelo"=>"corolla","placa"=>"1"];
$auto2 = (object)["marca"=>"bmw","modelo"=>"135wm","placa"=>"2"];
$auto3 = (object)["marca"=>"windy","modelo"=>"wmrgd","placa"=>"3"];
function enseña($auto){
echo "<p>Hola! soy un $auto->marca, modelo $auto->modelo, con placa $auto->placa</p>";
}
#mostrar el resultado del afuncoon enseña 
enseña($auto1);
enseña($auto2);
enseña($auto3);

?>
