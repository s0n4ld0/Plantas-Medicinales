
$(document).on('click','#AK',function(e){

    var U = $('input[name="usuario"]').val();

    var C = $('#Correo').val();

    var CO = $('#Contra').val();

    var D = $('#D').val();

    $.ajax({
      
       type:'POST',

       url:'Sesion/Register.php',

       dataType: 'json',

       data:{usuario:U,Correo:C,Contra:CO,Direccion:D},

       success:function(response)
       {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: true,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'Registro con exito'
        }).then(() => {

            setTimeout(() => {
                window.location.href = 'Login.php';
            }, 800);
        })
       },

       error:function(error)
       {
    
         const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: true,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.onmouseenter = Swal.stopTimer;
              toast.onmouseleave = Swal.resumeTimer;
            }
          });
          Toast.fire({
            icon: "error",
            html: error.responseJSON.error
          });
       }

    });

});


