"use strict";

//click button to add value to leftOperand
var leftOperand = document.getElementsByClassName('button')
for(var i = 0; i < leftOperand.length; i++){
    leftOperand[i].addEventListener('click', function (){
        var left = document.getElementById('leftOperand');
        left.leftOperand = ('here');
    });
}
console.log(leftOperand);
//click button to add value to Operand
//click button to add value to rightOperand
//perform operation from three buttons