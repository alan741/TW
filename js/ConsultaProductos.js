function cargarFuncion()
{
    $.ajax({
    url : 'ConsultaProductos.php',
    type : 'GET',
    async:false,
    dataType : 'json',
    success : function(json) {
        
        var tabla = document.getElementById('miTabla');
	tabla.innerHTML = '<tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Configuración</th></tr>';
        for(var i = 0; i < json.length; i++){
            tabla.innerHTML +=  ` 
            <tr>
            <th>${json[i].id}</th>
            <td>${json[i].nombre}</td>
            <td>${json[i].precio}</td>
            <td><button class="btn btn-danger" id="${json[i].id}" name="${json[i].nombre}" onclick="EliminarProducto(this)">Eliminar</button></td>
            <td><button class="btn btn-warning" id="${json[i].id} name="${json[i].nombre}" onclick="ConfigurarProducto(this)">Editar</button></td>
            </tr>` ;
	}		
}   
});
}
setInterval(cargarFuncion, 5000);



function EliminarProducto(boton){
    var cadena = {
        'cadena' : `DELETE FROM producto WHERE ProductoID = ${boton.id}`
    };
    
    $.ajax({
        type: 'POST',
        url: 'EliminarVentas.php',
        data: cadena,
        async: false,
        complete: function(){
            alert(`Eliminaste el producto: ${boton.name}`);
            document.getElementById('inputNombre').value = '';
            document.getElementById('inputPrecio').value = '';
        }
    });
}

function ConfigurarProducto(boton){
    var cadena = {
        'id':boton.id 
    };
    
    $.ajax({
        type: 'POST',
        url: 'ConsultaProductoEspecifico.php',
        data: cadena,
        datatype: 'json',
        success: function(json){
            document.getElementById('inputID').value = $(json)[0].id;
            document.getElementById('inputNombre').value = $(json)[0].nombre;
            document.getElementById('inputPrecio').value = $(json)[0].precio;
        }
    });
}

function AgregarProducto()
{
        var cadena = {
        'inputNewNombre': document.getElementById('inputNewNombre').value,
        'inputNewPrecio' : document.getElementById('inputNewPrecio').value
    };
    
    $.ajax({
        type: 'POST',
        url: 'InsertarProductos.php',
        data: cadena,
        datatype: 'json',
        success: function(json){
        }
    });
}

function Actualizar()
{
        var cadena = {
        'inputNombre': document.getElementById('inputNombre').value,
        'inputID': document.getElementById('inputID').value,
        'inputPrecio' : document.getElementById('inputPrecio').value
    };
    
    $.ajax({
        type: 'POST',
        url: 'ModificarProductos.php',
        data: cadena,
        datatype: 'json',
        success: function(json){
        }
    });
}