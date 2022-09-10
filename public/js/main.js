$(document).ready(function () {

$(`#mainform`).submit(function (e) { 
    e.preventDefault();       
  if ($(`#entrada`).val() == "" || $(`#salida`).val() == "" || $(`#huespedes`).val() == ""){
    $(`#alerterror`).show();
  } else{
    $.ajax({ 
        url: "getsomething",
        data: $('#mainform').serialize(),
        type: 'POST',
            success: function(result){
              $("#resultado").html(result);
            }
       });
  }

});

});

