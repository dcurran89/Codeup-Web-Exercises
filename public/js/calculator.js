"use strict";

// grab operands by id
var leftOperand = document.getElementById('leftOperand');
var rightOperand = document.getElementById('rightOperand');
var operator = document.getElementById('Operator');

//click button to add value to Operand
    var numbers = document.getElementsByClassName('number');
//function listener for leftOperand
    for(var i = 0; i < numbers.length; i++){
        numbers[i].addEventListener('click', clickNumber);
    }
    function clickNumber(data) {
        var input = this.getAttribute('data-value');
        // check isLeft if not then change.value right field
            if (Operator.value == false) {
                leftOperand.value += input;
            } else {
                rightOperand.value += input;
            } 
    }

//click button to add value to operator
var operators = document.getElementsByClassName('operator');
//function listener for Operator
    for(var i = 0; i < operators.length; i++){
        operators[i].addEventListener('click', clickOperator);
    }

// function for operators
function clickOperator(data) {
    var input = this.getAttribute('data-value');
    operator.value = input;
}

// function listener for C
var clears = document.getElementById('C');
    clears.addEventListener('click', clear);

function clear (){
    leftOperand.value="";
    rightOperand.value="";
    operator.value="";
}

// //function listener for decimal
// var decimal = document.getElementById('decimal');
//     decimal.addEventListener('click', addDecimal);

// function addDecimal () {
//     var leftDecimal = leftOperand.value.indexOf('.');
//     var rightDecimal = rightOperand.value.indexOf('.');

//     if (leftDecimal == true) {

//     }
// }

//function listener for negative number
var negative = document.getElementById('negative');
    negative.addEventListener('click', addNegative);

function addNegative () {
    if(leftOperand.value > -1) {
        leftOperand.value = ('-' + leftOperand.value);
    } else if (rightOperand.value > -1) {
        rightOperand.value = ('-' + rightOperand.value);
    }
}

// //function listener for percentage
// var percentage = document.getElementById('percent');
//     percentage.addEventListener('click', changeToPercent);

// function changeToPercent () {

// }

// function listener for equal
var pressEqual = document.getElementById('equal');
    pressEqual.addEventListener('click', equals);
        function equals(data) {
// switch case on which operator was chosen
            switch(Operator.value){
                case '/':
                    var quotient = leftOperand.value/rightOperand.value;
                    leftOperand.value=quotient;
                    rightOperand.value="";
                    operator.value="";
                    break;
                case 'X': 
                    var product = leftOperand.value*rightOperand.value;
                    leftOperand.value=product;
                    rightOperand.value="";
                    operator.value="";
                    break;
                case '-':
                    var difference = leftOperand.value-rightOperand.value;
                    leftOperand.value=difference;
                    rightOperand.value="";
                    operator.value="";
                    break;
                case '+':
                    var sum = parseFloat(leftOperand.value)+parseFloat(rightOperand.value);
                    leftOperand.value=sum;
                    rightOperand.value="";
                    operator.value="";
                    break;
            }
        

    }
