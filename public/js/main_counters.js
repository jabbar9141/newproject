//FUNCION PARA EL CONTADOR 1
var animInterval1;
  function startAnim1() {
    let obj = document.getElementById('counter1');
    animInterval1 = setInterval(animNumValue1, 3, obj, 834);
  }
  function animNumValue1(num, newValue) {
    valor = num.innerHTML;
    intValue = parseInt(valor);
    if (intValue >= newValue) { 
      clearInterval(animInterval1);
    } else { 
      valor++;
      num.innerHTML = valor;
    }
  }
  startAnim1();
//FIN DE LA FUNCION PARA EL CONTADOR 1
  //FUNCION PARA EL CONTADOR 2
  var animInterval2;
  function startAnim2() {
    let obj = document.getElementById('counter2');
    animInterval2 = setInterval(animNumValue2, 5, obj, 627);
  }
  function animNumValue2(num, newValue) {
    valor = num.innerHTML;
    intValue = parseInt(valor);
    if (intValue >= newValue) { 
      clearInterval(animInterval2);
    } else { 
      valor++;
      num.innerHTML = valor;
    }
  }
  startAnim2();
  //FIN DE LA FUNCION PARA EL CONTADOR 2
  //FUNCION PARA EL CONTADOR 3
var animInterval3;
function startAnim3() {
  let obj = document.getElementById('counter3');
  animInterval3 = setInterval(animNumValue3, 100, obj, 28);
}
function animNumValue3(num, newValue) {
  valor = num.innerHTML;
  intValue = parseInt(valor);
  if (intValue >= newValue) { 
    clearInterval(animInterval3);
  } else { 
    valor++;
    num.innerHTML = valor;
  }
}
startAnim3();
//FIN DE LA FUNCION PARA EL CONTADOR 3