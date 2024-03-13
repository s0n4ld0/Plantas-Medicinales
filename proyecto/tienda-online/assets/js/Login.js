
$(document).on('click','#M4',function(e){

    var U = $('input[name="usuario"]').val();

    var CO = $('#Contra').val();

    console.log(U +' ' + CO);

    console.log("A");

    $.ajax({
      
       type:'POST',

       url:'Sesion/Login.php',

       data:{usuario:U,Contra:CO},

       success:function(response)
       {
             
                window.location.href = 'index.php';
       },

       error:function(error)
       {
    
         const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.onmouseenter = Swal.stopTimer;
              toast.onmouseleave = Swal.resumeTimer;
            }
          });
          Toast.fire({
            icon: "error",
            title: 'Inicio de session incorrecto'
          });
       }

    });

});


