$(document).ready(function(){
    $('#btnAgregar').click(function(){
        var datos = $('#miForma').serialize();
        $.ajax({
           type:"POST",
           url:"InsertarProductos.php",
           data: datos,
           success:function(variable){
               //alert(variable);
           }
        });
        //Para evitar que recargue la página
        return false;
    });
});
