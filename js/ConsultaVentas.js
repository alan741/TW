function cargarFuncion()
{
    $.ajax({
    // la URL para la petición
    url : 'ConsultaVentas.php',

    // especifica si será una petición POST o GET
    type : 'GET',
    
    async:false,
    
    // el tipo de información que se espera de respuesta
    dataType : 'json',

    // código a ejecutar si la petición es satisfactoria;
    // la respuesta es pasada como argumento a la función
    success : function(json) {
        
        var tabla = document.getElementById('miTabla');
	tabla.innerHTML = '<tr><th>ID</th><th>Cantidad</th><th>Fecha</th><th>Config</th></tr>';
      
		for(var i = 0; i < json.length; i++){
		  tabla.innerHTML +=  ` 
          <tr>
          <th>${json[i].id}</th>
          <td>${json[i].nombre}</td>
          <td>${json[i].password}</td>
          
          <td><button class="btn btn-danger" id="${json[i].id}" name="${json[i].nombre}" onclick="CancelarVenta(this)" data-toggle="modal" data-target="#ventana7">Eliminar</button></td>
          </tr>` ;
		}		
}   
});
}
setInterval(cargarFuncion, 5000);

function CancelarVenta(boton){
    
    var a ={
        'id':boton.id
    }; 
    
    $.ajax({                        
    type: "GET",
    url: 'ObtenerUltimoCaja.php',                     
    datatype:'json',
    success: function(json){
        
        var caja=0.0;
        
        if(!$.isEmptyObject(json)){
            caja= json[0].id;
        }
        
    var datos = {
    "caso": '2',
    "cantidad" : boton.name,
    "caja": caja,
    "descripcion": "Cancelación de venta",
    "empleado": "10"
    };      
                $.ajax({                        
                   type: "POST",                 
                   url: 'ActualizarCaja.php',                     
                   data: datos,
                   success: function(){ 
                }
                 });
           }
       });  
    
        $.ajax({
         type : 'POST',
         url : 'CancelarVenta.php',
         data: a, 
         async:false,
         complete : function(){
    }   
    });
}

function EliminarHistorialVentas(){
    
    var cadena={
        'cadena': "DELETE FROM ventas"
    };
    $.ajax({
        type: 'POST',
        data: cadena,
        url: 'EliminarVentas.php',
        async: false,
        complete: function(){
        }
    });
}
                

                
                
