function btn_guardar_datos(params) {
    var titulo = $('#titulo').val();
    var contenido = $('#contenido').val();
    var imagen = $('#imagen').val();
    var direccion = $('#direccion').val();

    // alert(titulo + " - " + contenido + " - " + imagen + " - " + direccion);
    var obj = { titulo: titulo, contenido: contenido, imagen: imagen, direccion: direccion };

    $ajax({
        type: "POST",
        URL: "../modelo/modeloRegistrarDatos.php",
        data: obj,
        beforeSend: function(objeto) {

        },
        success: function(data) {
            $("#panel_respuesta").html(data);
        }
    });
}