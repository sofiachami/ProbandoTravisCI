<? php

namespace numeros;
class NumeroRomano{
     
     function Convert_dec_to_rom($valor){
	$n= "";
 	$parcialfinal="";
	
	$posiblesnumeros=array(1000,500,100,50,10,5,1);
	$posiblesletras=array("M"=>1000,"D"=>500,"C"=>100,"L"=>50,"X"=>10,"V"=>5,"I"=>1);
	$letrasromanas=array_keys($posiblesletras);
 
	while($numero)
	{
		for($pos=0;$pos<=6;$pos++)
		{
			$resultado=$numero/$posiblesnumeros[$pos];
			if($resultado>=1)
			{
				$n = $n . str_repeat($letrasromanas[$pos],floor($resultado)); #repito las letras tantas veces como sea el resto
				$numero = $numero - (floor($resultado)*$posiblesnumeros[$pos]);
			}
		}
	}
	#verificar que no se repitan mas de tres veces las letras 
	$numcambios=1;
	while($numcambios)
	{
		$numcambios=0;
		for($i=0;$i<strlen($n);$i++) 
		{
			$parcial=substr($n,$i,1);
			if($parcial==$parcialfinal&&$parcial!="M")
			{
				$ap++;
			}else{
				$parcialfinal=$parcial;
				$ap=1;
			}
			# 4 letras iguales.
			if($ap==4)
			{
				$primeraletra=substr($n,$i-4,1); #vuelve puntero
				$letra=$parcial; #letra repetida
				$pos=busca($letra,$letrasromanas); #busca la letra en las posibles letras romanas

				if($letrasromanas[$pos-1]==$primeraletra) #si tengo XXXX lo reemplazo por XL
				{
					$ant=$primeraletra.str_repeat($letra,4);
					print $ant;
					$nuev=$letra.$letrasromanas[$pos-2];
				}else{
					$ant=str_repeat($letra,4);
					$nuev=$letra.$letrasromanas[$pos-1];
				}
				$numcambios++;
				$n=str_replace($ant,$nuev,$n); 
				#str_replace(a,b,c) reemplazo todas las a por b en c (tiene en cuenta el orden es decir 1 1 )
				#	$vocales = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
				#	$reemp = array ("1","2","3","4","5")
				#	$onlyconsonants = str_replace($vocales, $reemp, "Hello World of PHP");
				#   Produce: H2ll4 W4rld 4f PHP

			}
		}
	}
	return $n;
}
 
function busca($nuev,$array)
{
	foreach($array as $contenido)
	{	$pos=0;
		if($contenido==$nuev)
		{
			return $pos;
		}
		$pos++;
	}
}
