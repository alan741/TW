function CargarUsuario(){
    var cadena = {
        'Nombre': document.getElementById('Nombre').value,
        'Apellido': document.getElementById('Apellido').value,
        'Nickname': document.getElementById('Nickname').value,
        'Password': document.getElementById('Password').value,
    };
    
    $.ajax({
        type: 'POST',
        url: 'RegistroUsuario.php',
        data: cadena
    });
}


function cargarFuncion()
{
    $.ajax({
    // la URL para la petición
    url : 'ConsultaCajeros.php',

    // especifica si será una petición POST o GET
    type : 'GET',
    
    async:false,
    
    // el tipo de información que se espera de respuesta
    dataType : 'json',

    // código a ejecutar si la petición es satisfactoria;
    // la respuesta es pasada como argumento a la función
    success : function(json) {
        
        var tabla = document.getElementById('body');   
        tabla.innerHTML = "";
		for(var i = 0; i < json.length; i++){
		  tabla.innerHTML +=  ` 
          <tr>
            <td>${json[i].ID}</td>
          <td>${json[i].Nombre}</td>
          <td>${json[i].Apellido}</td>
          <td>${json[i].Nickname}</td>
          </tr>` ;
		}		
}   
});
}
setInterval(cargarFuncion, 5000);
