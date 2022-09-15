$(document).ready(function () {

$(`#mainform`).submit(function (e) {
e.preventDefault();
if ($(`#entrada`).val() == "" || $(`#salida`).val() == "" || $(`#huespedes`).val() == ""){
  $(`#alerterror`).show();
} else{
    if ($("#resultado").html()!=''){$("#resultado").hide('slower');}
    let entrada = $(`#entrada`).val();
      entrada=entrada.replace("-", "");
      entrada=entrada.replace("-", "");
    let salida = $(`#salida`).val();
      salida=salida.replace("-", "");
      salida=salida.replace("-", "");
    let huespedes = $(`#huespedes`).val();
      $.ajax({
        url: "https://cmspro.h10hotels.com/_vti_bin/H10_WebServices/H10_Booking.svc/GetRoomPrices/HAL/3082?&fe="+entrada+"&fs="+salida+"&h=HAL&d=Madrid&cp=&c=WEBH10&sc=WEBH10&nh="+huespedes+"&h1Ad=2&h1ni=0&ip=62.174.217.38&u=&agenciacode=&agenciauser=&agenciapassword=&_=1663190941002",
        data: $('#mainform').serialize(),
        type: 'GET',
            success: function(result){
                    $.ajax({
                      url: "https://cmspro.h10hotels.com/_vti_bin/H10_WebServices/H10_Booking.svc/GetBudget/"+result+"/0/3082/undefined?_=1663190941003",
                      data: $('#mainform').serialize(),
                      type: 'GET',
                      success: function(resultcall2){
                            let index = 0;
                             $("#resultado").html('');
                             $("#resultado").show('slower');                             
                            do {
                              $("#resultado").html($("#resultado").html()+"<br><h2><b>"+resultcall2.RoomTypes[index]['Key']+":</h2></b>"+JSON.stringify(resultcall2.RoomTypesInfo[index]));
                              index++;
                            } while (resultcall2.RoomTypes[index]);               
                      },
                      error: function(resultcall2){
                        $("#resultado").html('Error');

                      }
              });
            }
       });
  }
});
});