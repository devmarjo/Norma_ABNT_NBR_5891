
function round_nfs($numero, $decimais){
	$numero1 = $numero*pow(10,$decimais);
  $numero2 = floor($numero1);
  $numero3 = floatval(bcsub($numero1, $numero2,3));
	if(($numero3) < 0.5){
		return $numero2/(pow(10,$decimais));
	}
	elseif(($numero3) >= 0.5+(0.1*pow(10,$decimais))){
		return ($numero2+1)/(pow(10,$decimais));
	}else{
		if(($numero2+1)%2==0){
			return ($numero2+1)/(pow(10,$decimais));
		}else{
			return $numero2/(pow(10,$decimais));
		}
	}
}
