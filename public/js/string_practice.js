// create two string variables for first name and last name
var firstName = "Daniel";
var lastName = "Curran";

console.log(firstName);
console.log(firstName + lastName);

// concatenate them together with a space
var fulllName = firstName + " " + lastName;

// find index of the n in first name variable
var indexOfN = firstName.indexOf('n');

// select the two r's from last name with substring and substr
var indexOfR = lastName.indexOf('r');
var indexOfSecondR = lastName.indexOf('r', indexOfR + 1);
var indexOfSecondR = lastName.lastIndexOf('r');

console.log(lastName.substring(indexOfR, indexOfSecondR + 1));
console.log(indexOfSecondR);
;

console.log(indexOfR);

