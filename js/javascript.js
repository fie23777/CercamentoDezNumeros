function mensagem(){
  $('#msgErro').slideUp('fast'); // para mostrar um feedback
  $('#msgErro').html("Já foram selecionados 10 numeros");
  $('#msgErro').slideDown('fast'); 
}



$(
  function(){
     $('#usuario').click(
         function(){
             if($(this).val() === "Usuario"){
             $(this).val('');
            }
         }    
     );
     $('#senha').click(
         function(){
             if($(this).val() === "Senha"){
             $(this).val('');
            }
         }    
     );
     $('#cadSenha').click(
         function(){
             if($(this).val() === "Senha"){
             $(this).val('');
            }
         }    
     );
     
    $('#email').click(
         function(){
             if($(this).val() === "Email"){
             $(this).val('');
            }
         }    
     );
     
     $('#UsuLogin').click(
         function(){
             if($(this).val() === "Login"){
             $(this).val('');
            }
         }    
     );
     
     $('#nome').click(
         function(){
             if($(this).val() === "Nome"){
             $(this).val('');
            }
         }    
     );
     


            $('#btnCadastro').click(
                    function () {
                        $('#mensagem').slideUp('fast'); // para mostrar um feedback

                        if ($('#nome').val() === "Nome" || $('#nome').val() === "") {
                            event.preventDefault();

                            $('#mensagem').html('Nome inválido');
                            $('#mensagem').slideDown('fast');


                        } else if ($('#email').val() === "Email" || $('#email').val() === "") {
                            event.preventDefault();
                            $('#mensagem').html('Email inválido');
                            $('#mensagem').slideDown('fast');

                        } else if ($('#UsuLogin').val() === "Login" || $('#UsuLogin').val() === "") {
                            event.preventDefault();
                            $('#mensagem').html('Login inválido');
                            $('#mensagem').slideDown('fast');

                        } else if ($('#senha').val() === "Senha" || $('#senha').val() === "") {
                            event.preventDefault();
                            $('#mensagem').html('Senha inválido');
                            $('#mensagem').slideDown('fast');
                        }

                        else {
                            document.forms["formCadastro"].submit();
                        }
                    }

            );
         

     }          
        
);

var contador = 0;
     
$(document).ready(function(){
      $("#btn1").click(function(){
       if(contador >= 10){  
      mensagem();
   }else{
      $("#primeiro").val($("#btn1").val()); 
      $("#primeiro").css("background-color", "green");
      $('#btn1').attr('disabled', 'disabled');
      contador++;    
     }
     }); 
   });
        
$(document).ready(function(){
      $("#btn2").click(function(){
      if(contador >= 10){
       mensagem();
     }else{
      $("#segundo").val($("#btn2").val()); 
      $("#segundo").css("background-color", "green");
      $('#btn2').attr('disabled', 'disabled');
      contador++;

     }    
     }); 
   });
   
   $(document).ready(function(){
      $("#btn3").click(function(){
      if(contador >= 10){
       mensagem();
     }else{
      $("#terceiro").val($("#btn3").val()); 
      $("#terceiro").css("background-color", "green");
      $('#btn3').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn4").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quarto").val($("#btn4").val()); 
      $("#quarto").css("background-color", "green"); 
      $('#btn4').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn5").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quinto").val($("#btn5").val()); 
      $("#quinto").css("background-color", "green"); 
      $('#btn5').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn6").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#sexto").val($("#btn6").val()); 
      $("#sexto").css("background-color", "green"); 
      $('#btn6').attr('disabled', 'disabled');
      contador++;

     }
    
     }); 
   });
   
        
$(document).ready(function(){
      $("#btn7").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#setimo").val($("#btn7").val()); 
      $("#setimo").css("background-color", "green"); 
      $('#btn7').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn8").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#oitavo").val($("#btn8").val()); 
      $("#oitavo").css("background-color", "green"); 
      $('#btn8').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn9").click(function(){
      if(contador >= 10){
       mensagem();
     }else{
      $("#nono").val($("#btn9").val()); 
      $("#nono").css("background-color", "green");
      $('#btn9').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn10").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#decimo").val($("#btn10").val()); 
      $("#decimo").css("background-color", "green"); 
      $('#btn10').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   //*******************************************************************************
   
   $(document).ready(function(){
      $("#btn11").click(function(){
      if(contador >= 10){          
       mensagem();
     }else{
      $("#desPrimeiro").val($("#btn11").val()); 
      $("#desPrimeiro").css("background-color", "green");
      $('#btn11').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
        
$(document).ready(function(){
      $("#btn12").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#desSegundo").val($("#btn12").val()); 
      $("#desSegundo").css("background-color", "green");
      $('#btn12').attr('disabled', 'disabled');
      contador++;

          
     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn13").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#desTerceiro").val($("#btn13").val()); 
      $("#desTerceiro").css("background-color", "green");
      $('#btn13').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn14").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#desQuarto").val($("#btn14").val()); 
      $("#desQuarto").css("background-color", "green"); 
      $('#btn14').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn15").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#desQuinto").val($("#btn15").val()); 
      $("#desQuinto").css("background-color", "green");
      $('#btn15').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn16").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#desSexto").val($("#btn16").val()); 
      $("#desSexto").css("background-color", "green"); 
      $('#btn16').attr('disabled', 'disabled');
      contador++;

     }
    
     }); 
   });
   
        
$(document).ready(function(){
      $("#btn17").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#desSetimo").val($("#btn17").val()); 
      $("#desSetimo").css("background-color", "green");
      $('#btn17').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn18").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#desOitavo").val($("#btn18").val()); 
      $("#desOitavo").css("background-color", "green"); 
      $('#btn18').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn19").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#desNono").val($("#btn19").val()); 
      $("#desNono").css("background-color", "green"); 
      $('#btn19').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn20").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#vigesimo").val($("#btn20").val()); 
      $("#vigesimo").css("background-color", "green"); 
      $('#btn20').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   //*******************************************************************************8
   
   $(document).ready(function(){
      $("#btn21").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#vigPrimeiro").val($("#btn21").val()); 
      $("#vigPrimeiro").css("background-color", "green");
      $('#btn21').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
        
$(document).ready(function(){
      $("#btn22").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#vigSegundo").val($("#btn22").val()); 
      $("#vigSegundo").css("background-color", "green");
      $('#btn22').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn23").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#vigTerceiro").val($("#btn23").val()); 
      $("#vigTerceiro").css("background-color", "green");
      $('#btn23').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn24").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#vigQuarto").val($("#btn24").val()); 
      $("#vigQuarto").css("background-color", "green");  
      $('#btn24').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn25").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#vigQuinto").val($("#btn25").val()); 
      $("#vigQuinto").css("background-color", "green"); 
      $('#btn25').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn26").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#vigSexto").val($("#btn26").val()); 
      $("#vigSexto").css("background-color", "green"); 
      $('#btn26').attr('disabled', 'disabled');
      contador++;

     }
    
     }); 
   });
   
        
$(document).ready(function(){
      $("#btn27").click(function(){
       contador++;
     if(contador >= 10){
       mensagem();
     }else{
      $("#vigSetimo").val($("#btn27").val()); 
      $("#vigSetimo").css("background-color", "green"); 
      $('#btn27').attr('disabled', 'disabled');

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn28").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#vigOitavo").val($("#btn28").val()); 
      $("#vigOitavo").css("background-color", "green"); 
      $('#btn28').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn29").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#vigNono").val($("#btn29").val()); 
      $("#vigNono").css("background-color", "green"); 
      $('#btn20').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn30").click(function(){
     if(contador >= 10){
        mensagem();
     }else{
      $("#trigesimo").val($("#btn30").val()); 
      $("#trigesimo").css("background-color", "green"); 
      $('#btn30').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   //*******************************************************************************8
   
   $(document).ready(function(){
      $("#btn31").click(function(){
      contador++;
     if(contador >= 10){
       mensagem();
     }else{
      $("#trigPrimeiro").val($("#btn31").val()); 
      $("#trigPrimeiro").css("background-color", "green");
      $('#btn31').attr('disabled', 'disabled');

     }
     }); 
   });
        
$(document).ready(function(){
      $("#btn32").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#trigSegundo").val($("#btn32").val()); 
      $("#trigSegundo").css("background-color", "green");
      $('#btn32').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn33").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#trigTerceiro").val($("#btn33").val()); 
      $("#trigTerceiro").css("background-color", "green");
      $('#btn33').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn34").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#trigQuarto").val($("#btn34").val()); 
      $("#trigQuarto").css("background-color", "green"); 
      $('#btn34').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn35").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#trigQuinto").val($("#btn35").val()); 
      $("#trigQuinto").css("background-color", "green"); 
      $('#btn35').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn36").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#trigSexto").val($("#btn36").val()); 
      $("#trigSexto").css("background-color", "green"); 
      $('#btn36').attr('disabled', 'disabled');
      contador++;

     }
    
     }); 
   });
   
        
$(document).ready(function(){
      $("#btn37").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#trigSetimo").val($("#btn37").val()); 
      $("#trigSetimo").css("background-color", "green"); 
      $('#btn37').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn38").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#trigOitavo").val($("#btn38").val()); 
      $("#trigOitavo").css("background-color", "green"); 
      $('#btn38').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn39").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#trigNono").val($("#btn39").val()); 
      $("#trigNono").css("background-color", "green"); 
      $('#btn39').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn40").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quadragesimo").val($("#btn40").val()); 
      $("#quadragesimo").css("background-color", "green"); 
      $('#btn40').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   //*******************************************************************************8
   
   $(document).ready(function(){
      $("#btn41").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quadragPrimeiro").val($("#btn41").val()); 
      $("#quadragPrimeiro").css("background-color", "green");
      $('#btn41').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
        
$(document).ready(function(){
      $("#btn42").click(function(){
                contador++;
     if(contador >= 10){
       mensagem();
     }else{
      $("#quadragSegundo").val($("#btn42").val()); 
      $("#quadragSegundo").css("background-color", "green");
      $('#btn42').attr('disabled', 'disabled');

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn43").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quadragTerceiro").val($("#btn43").val()); 
      $("#quadragTerceiro").css("background-color", "green");
      $('#btn43').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn44").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quadragQuarto").val($("#btn44").val()); 
      $("#quadragQuarto").css("background-color", "green");   
      $('#btn44').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn45").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quadragQuinto").val($("#btn45").val()); 
      $("#quadragQuinto").css("background-color", "green"); 
      $('#btn45').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn46").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quadragSexto").val($("#btn46").val()); 
      $("#quadragSexto").css("background-color", "green"); 
      $('#btn46').attr('disabled', 'disabled');
      contador++;

     }
    
     }); 
   });
   
        
$(document).ready(function(){
      $("#btn47").click(function(){
    if(contador >= 10){
       mensagem();
     }else{
      $("#quadragSetimo").val($("#btn47").val()); 
      $("#quadragSetimo").css("background-color", "green"); 
      $('#btn47').attr('disabled', 'disabled');
      contador++;
 
     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn48").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quadragOitavo").val($("#btn48").val()); 
      $("#quadragOitavo").css("background-color", "green"); 
      $('#btn48').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn49").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quadragNono").val($("#btn49").val()); 
      $("#quadragNono").css("background-color", "green"); 
      $('#btn49').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn50").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quinquagesimo").val($("#btn50").val()); 
      $("#quinquagesimo").css("background-color", "green"); 
      $('#btn50').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   //*******************************************************************************8
   
   $(document).ready(function(){
      $("#btn51").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quinquagPrimeiro").val($("#btn51").val()); 
      $("#quinquagPrimeiro").css("background-color", "green");
      $('#btn51').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
        
$(document).ready(function(){
      $("#btn52").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quinquagSegundo").val($("#btn52").val()); 
      $("#quinquagSegundo").css("background-color", "green");
      $('#btn52').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn53").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quinquagTerceiro").val($("#btn53").val()); 
      $("#quinquagTerceiro").css("background-color", "green");
      $('#btn53').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn54").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quinquagQuarto").val($("#btn54").val()); 
      $("#quinquagQuarto").css("background-color", "green");   
      $('#btn54').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn55").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quinquagQuinto").val($("#btn55").val()); 
      $("#quinquagQuinto").css("background-color", "green"); 
      $('#btn55').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn56").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quinquagSexto").val($("#btn56").val()); 
      $("#quinquagSexto").css("background-color", "green"); 
      $('#btn56').attr('disabled', 'disabled');
      contador++;

     }
    
     }); 
   });
   
        
$(document).ready(function(){
      $("#btn57").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quinquagSetimo").val($("#btn57").val()); 
      $("#quinquagSetimo").css("background-color", "green"); 
      $('#btn57').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn58").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#quinquagOitavo").val($("#btn58").val()); 
      $("#quinquagOitavo").css("background-color", "green"); 
      $('#btn58').attr('disabled', 'disabled');
      contador++;

     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn59").click(function(){
    if(contador >= 10){
       mensagem();
     }else{
      $("#quinquagNono").val($("#btn59").val()); 
      $("#quinquagNono").css("background-color", "green"); 
      $('#btn59').attr('disabled', 'disabled');
      contador++;
 
     }
     }); 
   });
   
   $(document).ready(function(){
      $("#btn60").click(function(){
     if(contador >= 10){
       mensagem();
     }else{
      $("#sexagesimo").val($("#btn60").val()); 
      $("#sexagesimo").css("background-color", "green");
      $('#btn60').attr('disabled', 'disabled');
      contador++;
     }
     }); 
   });
   
  
   $(document).ready(function(event) {
    $("#formCercaPost").submit(function(event){
      $('#msgErro').slideUp('fast'); // para mostrar um feedback
        var faltam =  10 - contador;
          if (contador < 10) {
                 $('#msgErro').html("Você escolheu "+contador+" numero(s), faltam " +faltam);
                 $('#msgErro').slideDown('fast');
            event.preventDefault();
                                                 
             }else {
               document.forms["formCercaPost"].submit();
             }
    });
});
          
          
   $(document).ready(function() {
    $("#btnLimar").click(function(){
      location.reload(); 
       
    });
});

$('#btnContato').click( function(event)
 {
alert("ola");
 });
