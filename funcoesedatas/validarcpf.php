<?php

class Validador{

	private $numeracao;

	public function getNumeracao(){
		
		return $this->numeracao;

	}

	public function setNumeracao($numero){

		$this->numeracao = $numero;

	}

	public static function validarCPF($cpf):bool{  //utilizando metodo estático

		if (empty($cpf)){ //Verifica se a variável é vazia
			return false;
		}

		//Varrendo possíveis erros de padronização do formato de um CPF
		$cpf = preg_replace('[^0-9]', '', $cpf);
		$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

		if (strlen($cpf) != 11){ //validando quantidade de números
			return false;
		}
		else if ($cpf == '00000000000' ||
			$cpf == '11111111111' ||
			$cpf == '22222222222' ||
			$cpf == '33333333333' ||
			$cpf == '44444444444' ||	//Verificando se existe alguma sequência como essas
			$cpf == '55555555555' ||
			$cpf == '66666666666' ||
			$cpf == '77777777777' ||
			$cpf == '88888888888' ||
			$cpf == '99999999999') {

			return false;
			
		}else{
				//Verificando se o CPF é válido pelos digitos de verificação
				//dois últimos 

			for ($i = 9; $i < 11; $i++){
				for ($j = 0, $l = 0; $l < $i; $l++){

					$j += $cpf{$l} * (($i + 1) - $l);
				
				}
				$j = ((10 * $j) % 11) % 10;

				if ($cpf{$l} != $j){
					throw new Exception("Este CPF não é válido!", 1);
				}

			}

			return true;
		}

	}
}

var_dump(Validador::validarCPF("08079558507")); //usando chamada de método estático

?>