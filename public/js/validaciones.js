var formulario = document.forms[0];
var elementos = formulario.elements;
var inputnombre = document.getElementById('name');
var inputapellido = document.getElementById('surname');
var inputdni = document.getElementById('dni');
var inputemail = document.getElementById('email');
var inputcontra = document.getElementById('password');
var inputconfir = document.getElementById('password-confirm');
let inputs = document.querySelectorAll('input');

let regexEmail = (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);

//console.log(formulario);

inputnombre.onchange = function(){
  if (inputnombre.value.length <= 1) {
    inputnombre.setAttribute('class', 'form-control is-invalid');
  } else {
    inputnombre.setAttribute('class', 'form-control is-valid');
  }
}


inputapellido.onchange = function(){
  if (inputapellido.value.length <= 1) {
      inputapellido.setAttribute('class', 'form-control is-invalid');
  } else {
    inputapellido.setAttribute('class', 'form-control is-valid');
  }
}


inputemail.onchange = function() {
  if (regexEmail.test(inputemail.value) == false) {
    inputemail.setAttribute('class', 'form-control is-invalid');
  } else {
    inputemail.setAttribute('class', 'form-control is-valid');
  }

}

 // inputdni.onchange = function(){
 //   if (inputdni.value.length <= 7) {
 //     inputdni.setAttribute('class', 'form-control is-invalid');
 //   } else {
 //     inputadni.setAttribute('class', 'form-control is-valid');
 //   }
 // }

formulario.onsubmit = function(evento){
  for (input of inputs) {
    if (input.getAttribute('class') == 'form-control is-invalid') {
    evento.preventDefault()
    }
  }
  formulario.submit;
}

let divProvincias = document.getElementById('PROVar')
let selectPaises = document.getElementById('selecPais')

fetch('https:restcountries.eu/rest/v2/all')
.then(function(datos){
  return datos.json()
})
.then(function (arrayPaises){
  for (pais of arrayPaises) {
    let optionPais = document.createElement('option');
    optionPais.setAttribute('value', pais.alpha2Code)
    let nombrePais = document.createTextNode(pais.name)
    optionPais.appendChild(nombrePais)
    selecPais.appendChild(optionPais)
  }
})

selectPaises.onchange = function (){
let paisSeleccionado = selectPaises.options[selectPaises.selectedIndex].value;
  if (paisSeleccionado == "AR") {
    fetch('https://apis.datos.gob.ar/georef/api/provincias')
    .then(function(datos){
      return datos.json()
    })
    .then(function (arrayProvin){
      let labelprovincia = document.createElement('label');
      //console.log(labelprovincia);
      labelprovincia.name = "provincia";
      labelprovincia.id = "labelprovincia";
      let mensajeLabel = document.createTextNode('Selecciona Una Provincia:');
      labelprovincia.appendChild(mensajeLabel);
      let provinciados = document.createElement('select');
      provinciados.name = "provincia"
      provinciados.id = "provinciasidentificador"
      provinciados.value = arrayProvin.provincias.id
      divProvincias.appendChild(labelprovincia)
      divProvincias.appendChild(provinciados)
      for (prov of arrayProvin.provincias) {
        let optionProv = document.createElement('option');
        optionProv.setAttribute('value', prov.id)
        let nombreProv = document.createTextNode(prov.nombre)
        optionProv.appendChild(nombreProv)
        provinciados.appendChild(optionProv)
      }
      provinciados.setAttribute('class', 'form-control')
    })
} if (paisSeleccionado != "AR") {
    let remover = document.getElementById('labelprovincia')
    let removerprov = document.getElementById('provinciasidentificador')
    remover.remove();
    removerprov.remove();
}
}
