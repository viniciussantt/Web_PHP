<?php
error_reporting(0); //para não aparecer alertas 'Warning'

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			// Início Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					// Início Gerente de Vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
					// Término Gerente de Vendas
				)
			),
			// Término Diretor Comercial
			// Início Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					// Início Gerente de Contas a Pagar
					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=>array(
							// Início Supervisor de Pagamentos
							array(
								'nome_cargo'=>'Supervisor de Pagamentos'
							)
							// Término Supervisor de Pagamentos
						)
					),
					// Término Gerente de Contas a Pagar
					// Início Gerente de Compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>array(
							// Início Supervisor de Suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos',
								'subordinados'=>array(
									array(
										'nome_cargo'=>'Funcionário'
									)
								)
							)
							// Término Supervisor de Suprimentos
						)
					)
					// Término Gerente de Compras
				)
			)
			// Término Diretor Financeiro
		)
	)
);

function exibe($cargos){ // funções recursivas tornam-se possíveis chamar elas próprias para repetição de uma tarefa

	$html = '<ul>'; //lista não ordenada

	foreach ($cargos as $cargo) { 

		$html .= '<li>'; // contatenando uma lista

		$html .= $cargo['nome_cargo']; // o valor de $cargo é o que está nas chaves 'nome_cargo'

		if(isset($cargo['subordinados']) && count($cargo['subordinados'] != 0)){  //se for definido 'subordinados' em 'nome_cargo' e nele conter valor diferente de zero

			$html .= exibe($cargo['subordinados']); //retorne a própria função de listas novamente  

		}

		$html .= '</li>';

	}

	$html.= '</ul>';

	return $html;

}

echo exibe($hierarquia);

?> 