<?php

$hierarquia = array( 


	array(
		  'nome_cargo'=> 'CEO',
		  'subordinados'=> array(    
		   //inicio: Diretor comercial
           array(
                 'nome_cargo'=> 'Diretor Comercial',
                 'subordinados'=> array(
           		                        //Inicio: Gerente de vendas
           	                             array(
                                               'nome_cargo'=> 'Gerente de Vendas',
                                                                                  )
           	                                                                      //Término: Gerente de vendas
           	                                                                     )
                                                                                
                                                                                ),
                                                    //termino: Diretor comercial
                        //Inicio: Diretor Financeiro
                        array(
                              'nome_cargo' => 'Diretor Financeiro',
           	                  'subordinados'=> array(
                                                     //Inicio: Gerente de contas a pagar
                                                     array(
           	   		                                       'nome_cargo'=>'Gerente de contas a pagar',
           	   		                                       'subordinados'=> array(
           	   			                                                          //Inicio: Supervisor de pagamentos
                                                                            array(
                                                                	              'nome_cargo'=>'Supervisor de pagamentos'
                                                                                                                          )
           	   		                                            //Término: Supervisor de pagamentos
                                                              )

           	   		                                        ),
           	   	         //Término: Gerente de contas a pagar
                         //Inicio: Gerente de compras
                         array(
                         	'nome_cargo'=>'Gerente de compras',
                         	'subordinados'=>array(
                                //Inicio: Supervisor de suprimentos
                         		array(
                         			'nome_cargo'=>'Supervisor de suprimentos'
                                      )
                         		//Término: Supervisor de suprimentos

                         	)

                         )
                         //Término: Gerente de compras
                                                          )

           	                                            )
                         //Término: Diretor Financeiro 
                                                      )
		                                         
		                                            ) 
                                                
                                                  );

 function exibe($cargos){       //criando uma função chamada "exibe", dentro de "exibe" se tem a variavel $cargos

  $html = '<ul>';     //usando tag de html para criar uma lista nao ordenada

  foreach ($cargos as $cargo) {  // foreach para criar um laço de repetiçao, percorre todas as informaçoes dentro do array, criei a variavel $cargo para aderir informaçoes passadas dentro do foreach


  	$html .= "<li>"; //tag de html para criar um parametro de lista
  	$html .= $cargo['nome_cargo'];  // incrementando a tag na variavel $cargo

  	if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0 ) { //usando isset para verificar se a variavel $cargo eta definida para retornar um valor booleano, 0 para nao e 1 para sim, dentro da $cargo, usei colchetes para definir a função que eu quero dentro do array, no caso, 'subordinados', os && seria uma outra condiçao equivale a "e", a funçao "count" conta os elementos dentro do array, do elemento da matriz referida, logo, se tiver qualquer valor será maior que 0, aplicando o que eu defini dentro do if.

  		$html .= exibe($cargo['subordinados']); //entao se o valor retornar maior que 0 no if, sera exibido o que eu estou pedindo, todos os itens  definidos em 'subordinados' dentro do array

  	}              //count faz a contagem de quantos itens tem dentro do array
  	$html .= "</li>";


  }

  $html .='</ul>'; //usando tag de html para definir o fim da lista nao ordenada

  return $html; // usando return para retornar as definiçoes para a function "exibe"

 }

 echo exibe($hierarquia);

?>