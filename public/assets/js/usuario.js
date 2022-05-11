$(document).on('click', '.create-user', function(event){
    $('#CrearUsuario').modal('show');
});

$(document).on('submit', '.crearUsuarioForm', function(event){
    event.preventDefault();
    var tipoDocumento = $('#tipo_documento').val();
    var numeroDocumento = $('#numero_documento').val();
    var nombre = $('#nombre').val();
    var apellido = $('#apellido').val();
    var email = $('#email').val();
    var correo_institucional = $('#correo_institucional').val();
    var password = $('#password').val();
    var password_confirmation = $('#password_confirmation').val();
    var telefono = $('#telefono').val();
    var nivel_programa = $('#nivel_programa').val();
    var programa = $('#programa').val();
    var estado = $('#estado').val();
    var rol = $('#rol').val();

    $.ajax({
        type: 'POST',
        url : '/usuario',
        data: {tipoDocumento: tipoDocumento, numeroDocumento: numeroDocumento,
        nombre: nombre, apellido: apellido, email: email, correo_institucional: correo_institucional,
        password: password, password_confirmation: password_confirmation, telefono: telefono,
        nivel_programa: nivel_programa, programa: programa, estado: estado, rol: rol},
        dataType: 'json',
        success: function(){
            if (result.success) {
                $('#CrearUsuario').modal('hide');
                setTimeout(function () {
                  location.reload();
                }, 1500);
              }
        },
        error: function(){
            alert('mal');
        },
    })
});
