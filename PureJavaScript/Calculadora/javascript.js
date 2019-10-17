//Inicializa
var num1 = 0;
 var operador = false; 
 var num2 = 0;
 var aux1 = 0;
 var auxP = false;
 var auxT = false;

//aparece e pega op
function aparece(op){

 		var valor = document.getElementById('numero');
		valor.value += op;
		if(aux1==0){
		num1 = num1+""+ op;
		}
		if(aux1>0){
		num2= num2+""+ op;
	}

		if(auxP){
			auxP = false;
			valor.value = op;
			aux1 = 0;
			num2 = 0;
			operador = 0;
			num1 = op;
			resultado =0;
		}	
}
function igual(){
	if(operador=='+'){
	  resultado = parseInt(num1) + parseInt(num2);
	}

	if(operador=='-'){
	  resultado = parseInt(num1) - parseInt(num2);
	}
	if(operador=='*'){
	  resultado = parseInt(num1) * parseInt(num2);
	}


	if(operador=='/'){
	  resultado = parseInt(num1) / parseInt(num2);
	}
	
	var valor = document.getElementById('numero');
	valor.value = resultado;
	auxP = 1;
}
	function Operador(op){
		var valor = document.getElementById('numero');
		valor.value += op;
		if(operador){
	
		igual();
		operador = op;
		valor.value += op;
		}
		operador = op;
		aux1 +=1;
		if(aux1 > 1){
		auxP = false;
		num1 = resultado;
		num2 = 0;
		}

	
	

}





function limpa(){
window.location.reload()
	
}


