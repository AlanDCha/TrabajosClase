// * Alerts
// Sirven para dar mensajes al usuario por medio de los navegadores
alert("First");
alert("Second");
alert("Third");

// * Var, let y const
// Var es catalogada como variable global, es recomendado no usarla
var global = 38947;
// Let es catalogada como variable de alcance o local, es la mejor para controlar
// el alcance de esta misma
let scope = "Short scope";

// * Operaciones (suma, resta, multiplicacion, division)
console.log(10 + 3);
console.log(8 * 3);
console.log(3 ** 3);
console.log(6 / 2);

// * Pedido de datos
let full_name = prompt("Dime tu nombre: ");
let age = prompt("Dime tu edad: ");
let country = prompt("Dime tu pais: ");
let state = prompt("Dime tu estado civil: ");

console.log(`Tu nombre es: ${full_name}`);
console.log(`Tu edad es: ${edad}`);
console.log(`Tu pais es: ${country}`);
console.log(`Tu estado civil es: ${state}`);
