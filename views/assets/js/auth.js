// validar  cedula ingresada
$("#authForm").submit(function(e){
  e.preventDefault();
  // validar que el campo no este vacio
  if ($("#name--form").val()!="") {
    $.ajax({
      url:"validar-documento",
      type:"post",
      dataType:"json",
      data:({data:$("#name--form").val()}),
      success:function(result){
        if (result==true) {
          // si el usuario exite
          location.reload();
        }else{
          // si el usuario no existe mostrara un mensaje
          $("div.message-alert").remove();
          $("#name--form").after("<div class='message-alert'>Este usuario no existe.</div>");
          setTimeout(function(){$("div.message-alert").remove();},4000);
        }
      },
      error:function(result){console.log(result);},
    });
  }else{
    // si el campo esta vacio mostrara una alerta
    $("div.message-alert").remove();
    $("#name--form").after("<div class='message-alert'>Campo requerido.</div>");
    setTimeout(function(){$("div.message-alert").remove();},4000);
  }
});
$("#formPass").submit(function(e){
  e.preventDefault();
  if ($("#pass--form").val()!="") {
    $.ajax({
      url:"validar-contrasena",
      type:"post",
      dataType:"json",
      data:({data:$("#pass--form").val()}),
      success:function(result){
        console.log(result);
        // si la contraseña es valida  redireccionara segun el rol
        if (result==1) {
          location.href="administracion";
        }else if(result==2){
          location.href="alumno";
        }else if(result==3){
          location.href="docente";
        }else{
          // si la contraseña es incorrecta mostrara el mensaje
          $("div.message-alert").remove();
          $("#pass--form").after("<div class='message-alert'>Contraseña incorrecta.</div>");
          setTimeout(function(){$("div.message-alert").remove();},4000);
        }
      },
      error:function(result){console.log(result);},
    });
  }else{
    // si el campo esta vacio mostrara una alerta
    $("div.message-alert").remove();
    $("#pass--form").after("<div class='message-alert'>Campo requerido.</div>");
    setTimeout(function(){$("div.message-alert").remove();},4000);
  }
});
