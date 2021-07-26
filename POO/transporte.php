<?php

class transporte{ // declaración de la propiedad

private $largo=" 2 ";  // declaración de un método
private $ancho=" 1 ";


public function mostrarvar(){ 
    
    // la pseudovariable $this está disponible cuando un método es invocado
// dentro del contexto de un objeto. $this es una referencia al objeto invocador.

echo $this->largo;
echo $this->ancho;


}




/**
 * Get the value of largo
 */ 
public function getLargo()
{
return $this->largo;
}

/**
 * Set the value of largo
 *
 * @return  self
 */ 
public function setLargo($largo)
{
$this->largo = $largo;

return $this;
}

/**
 * Get the value of ancho
 */ 
public function getAncho()
{
return $this->ancho;
}

/**
 * Set the value of ancho
 *
 * @return  self
 */ 
public function setAncho($ancho)
{
$this->ancho = $ancho;

return $this;
}
}


$mostrar = new transporte();
$mostrar -> mostrarvar();

?>