
$(document).on('click','#Kill',function(e){


    $.ajax({
            url:'Sesion/Destruir.php',

            type:'POST',

            success:function(response)
            {
                location.reload();
            }
    });
});