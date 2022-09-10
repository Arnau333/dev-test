$(document).ready(function () {

$(`#mainform`).submit(function (e) { 
    e.preventDefault();   
    
    $.ajax({ 
        url: "getsomething",
        data: $('#mainform').serialize(),
        type: 'POST',
        success: function(result){
           console.log(result);

           $("#resultado").html(result);

        }
       });

});

});

