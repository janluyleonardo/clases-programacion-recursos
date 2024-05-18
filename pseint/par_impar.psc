// determinar si un numero n es par o impar, donde n es recibido como parametro

Algoritmo par_impar
	// par  2 4 6 8 0
	// impar 1 3 5 7 9 
	Escribir "hola buen dia, por favor ingrese un numero para validar si es par o impar"
	Leer numParImpar
	//variable<-numParImpar
	Si numParImpar MOD 2 = 0 Entonces
		Escribir "el número ingresado,",numParImpar," es par"
	SiNo
		Escribir "el número ingresado,",numParImpar," es impar"
	Fin Si
	
FinAlgoritmo
