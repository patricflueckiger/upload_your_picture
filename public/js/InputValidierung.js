function validateInput() {
  var inputs = document.getElementsByClassName("input");
  var counter = 0; //wenn die variable auf 3 ist, gibt diese Funkition true zurück und das form wird sumbited

  //durch die input felder loopen, und prüfen welche leer sind
  for (var i = inputs.length; i > 0; i--) {
    if (inputs[i - 1].value == "") {
      inputs[i - 1].style.borderColor = "red";
      document.getElementById('fehler-meldung').innerHTML = "Alle Felder müssen ausgefüllt sein!";
      console.log("works");
    } else {
      inputs[i - 1].style.borderColor = "";
      document.getElementById('fehler-meldung').innerHTML = "";
      counter++
    }
  }

  if (counter == 3) {
    return true;
  } else {
    return false;
  }
}
