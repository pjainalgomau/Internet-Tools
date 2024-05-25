function square(a){
    return function (b){
        return a*b;
    };
}
let squareIt = square(5);
alert(`The square of 5 is ${squareIt(5)}`);