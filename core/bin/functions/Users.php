<?php
function Users(){
    $db = new Conexion();
    $sql = $db->query("SELECT * FROM alumno;");
    if($db->rows($sql) > 0){
        while($d = $db->recorrer($sql)) {
      $users[$d['matricula']] = array(
        'matricula' => $d['matricula'],
        'nombre' => $d['nombre'],
        'password' => $d['password'],
        'email' => $d['email']
      );
    }

    }else{
        $users = false;
    }
    $db->liberar($sql);
    $db->close(); 
    
    return $users;
}
?>