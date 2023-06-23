# Actividad 5: Programación orientada a objetos

Bienvenido a la quinta actividad llamada “Impuestos”, en esta ocasión se brindará un ejercicio práctico para que logres aplicar los conceptos vistos en la clase sobre programación orientada a objetos.
Qué aprenderé

## Descripción del problema

Los asesores en los bancos se enfrentan a una pregunta común de parte de los ciudadanos: ¿Debo pagar impuestos por tener dinero en el banco? Muy bien, el día de hoy vamos a escribir un programa para dar respuesta a esta inquietud.

Implementa un programa con una clase llamada Persona que contenga dos atributos: nombre y edad. Además, que contenga un método llamado imprimir que devuelva el nombre y la edad.

Después, crea otra clase llamada Ciudadano que herede de la clase Persona y agregue un atributo llamado depósito. Además, contendrá el método llamado imprimir para mostrar el depósito. 

Así mismo cree otro método llamado impuestos y si el depósito es superior a 3000 usd muestre que SI debe pagar, caso contrario no deberá pagar. 

Los datos para este ejercicio son los siguientes:

|Nombre|edad|Deposito|
|------|-----|--------|
|Mariano|25|5700|
|Leonel|56|3500|
|Yaneth|34|8400|
|Martín|45|2500|

 
## Cómo empezar

Observa el siguiente instructivo, donde se explicara el porqué, el cómo y el paso a paso de cada línea de código que escribirás:

1. Ingrese a Visual Studio Code y en la carpeta “Actividades” cree un nuevo archivo con el nombre **“actividad_poo.php”.**


2. Cree la clase llamada Persona con los atributos públicos $nombre y $edad. 


3. Defina el método imprimirDatos(), el cual devolverá el nombre y la edad de la persona.

4. Cree la clase Ciudadano y extiende las funcionalidades de la clase Persona. Además, defina el atributo $deposito y cree el constructor de la clase, recuerde que no es necesario volver a escribir los atributos de la clase Persona, simplemente use el parent::__construct y pase los parámetros.
 
5. Defina el método imprimir para obtener el depósito del usuario, pero como necesitamos el nombre y edad que vienen de la clase padre debemos colocar la función parent::imprimirDatos()

6. Define el método de impuestos para devolver si el usuario debe o no pagar impuestos.

7. Cree el objeto con el nombre ciudadano y llame a los métodos, imprimir e impuestos.

8. Realice un comentario multilínea dentro del programa e indique si los ciudadanos: Mariano, Leonel, Yaneth y Martin deben pagar impuestos.

Por último, recuerde que una vez realice la actividad, usted deberá anexar su código en la opción **"Suba su respuesta aquí".** 