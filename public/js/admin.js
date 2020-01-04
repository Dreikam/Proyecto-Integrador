window.onload = function(){
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

}
