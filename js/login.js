$('#btn-login').on('click', (e) => {
    e.preventDefault()
    var formulario = $('#form').serialize()
    $.ajax({
        type: 'POST',
        data: formulario,
        url: 'login.php',
        beforeSend: function(){
            $('#btn-login').html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>'+
                         '<span class="visually-hidden">Loading...</span>' +
                         ' &nbsp;Verificando datos ')
            $('#btn-login').attr('disabled', 'disabled')
        },
        success: function(response){
            if(response != 'error'){
                $('#usuario-id').removeClass('is-invalid')
                $('#password-id').removeClass('is-invalid')
                $('#alerta').addClass('d-none')
                $('#btn-login').html('Iniciar sesión')
                $('#btn-login').removeAttr('disabled')
                alert(response)
            } else {
                $('#usuario-id').addClass('is-invalid')
                $('#password-id').addClass('is-invalid')
                $('#alerta').removeClass('d-none')
                $('.card-body').effect('shake')
                $('#btn-login').html('Iniciar sesión')
                $('#btn-login').removeAttr('disabled')
            }
        }
    }) 
})