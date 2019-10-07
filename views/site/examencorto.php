    <h1>Examen Corto</h1>
    <h3>Evalua si un numero es Primo</h3>

    <?php

    $valor = 2; //Definiendo el valor a evaluar
    $resultado = 0; //variable auxiliar

    

    if ($valor==0 or $valor==1){  //Verificando si es Cero o Uno para no proceder a evaluarlos
     	if($valor==0){
	    	 	echo "El valor a Evaluar = ".$valor." <strong>---->No es un numero primo ni compuesto (primo)</strong>";
	    	 }else{
	    	 	echo "El valor a Evaluar = ".$valor." <strong>---->No es un numero primo ni compuesto</strong>";
	     }
	    

	} else {
	    	 //Si obtenemos division exacta no es primo
    		//Si el cociente es menor que el divisor .. es primo
    		
	    	 for ($i = 1; $i < $valor; $i++) {
		        if ($valor % $i == 0) {
		            $resultado++;
		        }
	    	}
	     
		    if ($resultado >= 2) {
		        echo "El valor a Evaluar = ".$valor." <strong>---->No es un numero primo</strong>";
		    } else {
		        echo "El valor a Evaluar= ".$valor."<strong>---->Es un numero primo</strong>";
		    }
	    	 
	    }

    ?>


