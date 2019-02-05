
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
        <meta charset="UTF-8">
        <title></title>
        
         <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="bootstrap/css/estilo.css" rel="stylesheet" type="text/css">
        
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/javascript.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <body>
<div class="container" >
    <div class="row"> 
        <div class="col-md-pull-6">
          <ul class=" nav nav-pills">
               <li><a href="index.php">Home</a></li>
               <li><a href="controlePrinc.php">Cercamento de numeros</a></li>
               <li><a href="CercardezView.php">Cercar 10 numeros</a></li>
               <li><a href="controleCadastro.php">Faça o cadastro</a></li>
               <li><a href="quemSou.php">Quem sou</a></li>
               <li><a href="login.php">Faça o login</a></li>
          </ul> <div class="msgErro"id="msgErro"></div>
        </div>
            <div class="jumbotron col-lg-12">
             <h2>Escolha os 10 números a ser cercados</h2>
            
              <div class="msgErro"id="msgErro"></div>
            </div>
          
        
        
        <form method="post" action="CercarAleatPost.php" id="formCercaPost" name="formCercaPost" class="form-horizontal">
            <div class="col-lg-12">
                    <input type="text" id="primeiro" name="primeiro"class=" text-center texto " value="">                
                    <input type="text" id="segundo"  name="segundo"class="text-center texto" value="">
                    <input type="text" id="terceiro" name="terceiro"class="text-center texto" value="">
                    <input type="text" id="quarto"   name="quarto"class="text-center texto" value="">    
                    <input type="text" id="quinto"   name="quinto"class="text-center texto" value="">
                    <input type="text" id="sexto"    name="sexto"class="text-center texto" value="">
                    <input type="text" id="setimo"   name="setimo"class="text-center texto" value="">
                    <input type="text" id="oitavo"   name="oitavo"class="text-center texto" value="">
                    <input type="text" id="nono"     name="nono"class="text-center texto" value="">
                    <input type="text" id="decimo"   name="decimo"class="text-center texto" value=""><br/>
                    <input type="text" id="desPrimeiro" name="desPrimeiro"class=" text-center texto" value="">                
                    <input type="text" id="desSegundo"  name="desSegundo"class="text-center texto" value="">
                    <input type="text" id="desTerceiro" name="desTerceiro"class="text-center texto" value="">
                    <input type="text" id="desQuarto"   name="desQuarto"class="text-center texto" value="">    
                    <input type="text" id="desQuinto"   name="desQuinto"class="text-center texto" value="">
                    <input type="text" id="desSexto"    name="desSexto"class="text-center texto" value="">
                    <input type="text" id="desSetimo"   name="desSetimo"class="text-center texto" value="">
                    <input type="text" id="desOitavo"   name="desOitavo"class="text-center texto" value="">
                    <input type="text" id="desNono"     name="desNono"class="text-center texto" value="">
                    <input type="text" id="vigesimo"   name="vigesimo"class="text-center texto" value=""><br/>
                    <input type="text" id="vigPrimeiro" name="vigPrimeiro"class=" text-center texto" value="">                
                    <input type="text" id="vigSegundo"  name="vigSegundo"class="text-center texto" value="">
                    <input type="text" id="vigTerceiro" name="vigTerceiro"class="text-center texto" value="">
                    <input type="text" id="vigQuarto"   name="vigQuarto"class="text-center texto" value="">    
                    <input type="text" id="vigQuinto"   name="vigQuinto"class="text-center texto" value="">
                    <input type="text" id="vigSexto"    name="vigSexto"class="text-center texto" value="">
                    <input type="text" id="vigSetimo"   name="vigSetimo"class="text-center texto" value="">
                    <input type="text" id="vigOitavo"   name="vigOitavo"class="text-center texto" value="">
                    <input type="text" id="vigNono"     name="vigNono"class="text-center texto" value="">
                    <input type="text" id="trigesimo"   name="trigesimo"class="text-center texto" value=""><br/>
                    <input type="text" id="trigPrimeiro" name="trigPrimeiro"class=" text-center texto" value="">                
                    <input type="text" id="trigSegundo"  name="trigSegundo"class="text-center texto" value="">
                    <input type="text" id="trigTerceiro" name="trigTerceiro"class="text-center texto" value="">
                    <input type="text" id="trigQuarto"   name="trigQuarto"class="text-center texto" value="">    
                    <input type="text" id="trigQuinto"   name="trigQuinto"class="text-center texto" value="">
                    <input type="text" id="trigSexto"    name="trigSexto"class="text-center texto" value="">
                    <input type="text" id="trigSetimo"   name="trigSetimo"class="text-center texto" value="">
                    <input type="text" id="trigOitavo"   name="trigOitavo"class="text-center texto" value="">
                    <input type="text" id="trigNono"     name="trigNono"class="text-center texto" value="">
                    <input type="text" id="quadragesimo"   name="quadragesimo"class="text-center texto" value=""><br/>
                    <input type="text" id="quadragPrimeiro" name="quadragPrimeiro"class=" text-center texto" value="">                
                    <input type="text" id="quadragSegundo"  name="quadragSegundo"class="text-center texto" value="">
                    <input type="text" id="quadragTerceiro" name="quadragTerceiro"class="text-center texto" value="">
                    <input type="text" id="quadragQuarto"   name="quadragQuarto"class="text-center texto" value="">    
                    <input type="text" id="quadragQuinto"   name="quadragQuinto"class="text-center texto" value="">
                    <input type="text" id="quadragSexto"    name="quadragSexto"class="text-center texto" value="">
                    <input type="text" id="quadragSetimo"   name="quadragSetimo"class="text-center texto" value="">
                    <input type="text" id="quadragOitavo"   name="quadragOitavo"class="text-center texto" value="">
                    <input type="text" id="quadragNono"     name="quadragNono"class="text-center texto" value="">
                    <input type="text" id="quinquagesimo"   name="quinquagesimo"class="text-center texto" value=""><br/>
                    <input type="text" id="quinquagPrimeiro" name="quinquagPrimeiro"class=" text-center texto" value="">                
                    <input type="text" id="quinquagSegundo"  name="quinquagSegundo"class="text-center texto" value="">
                    <input type="text" id="quinquagTerceiro" name="quinquagTerceiro"class="text-center texto" value="">
                    <input type="text" id="quinquagQuarto"   name="quinquagQuarto"class="text-center texto" value="">    
                    <input type="text" id="quinquagQuinto"   name="quinquagQuinto"class="text-center texto" value="">
                    <input type="text" id="quinquagSexto"    name="quinquagSexto"class="text-center texto" value="">
                    <input type="text" id="quinquagSetimo"   name="quinquagSetimo"class="text-center texto" value="">
                    <input type="text" id="quinquagOitavo"   name="quinquagOitavo"class="text-center texto" value="">
                    <input type="text" id="quinquagNono"     name="quinquagNono"class="text-center texto" value="">
                    <input type="text" id="sexagesimo"       name="sexagesimo"class="text-center texto" value=""><br/><br/>

               </div>
            
            <div class="col-lg-12">
                 <input type="button" value="01"class="btn-fie" id="btn1">
                 <input type="button" value="02"class="btn-fie" id="btn2">
                 <input type="button" value="03"class="btn-fie" id="btn3">
                 <input type="button" value="04"class="btn-fie" id="btn4">
                 <input type="button" value="05"class="btn-fie" id="btn5">
                 <input type="button" value="06"class="btn-fie" id="btn6">
                 <input type="button" value="07"class="btn-fie" id="btn7">
                 <input type="button" value="08"class="btn-fie" id="btn8">
                 <input type="button" value="09"class="btn-fie" id="btn9">
                 <input type="button" value="10"class="btn-fie" id="btn10"><br>
                 <input type="button" value="11"class="btn-fie" id="btn11">
                 <input type="button" value="12"class="btn-fie" id="btn12">
                 <input type="button" value="13"class="btn-fie" id="btn13">
                 <input type="button" value="14"class="btn-fie" id="btn14">
                 <input type="button" value="15"class="btn-fie" id="btn15">
                 <input type="button" value="16"class="btn-fie" id="btn16">
                 <input type="button" value="17"class="btn-fie" id="btn17">
                 <input type="button" value="18"class="btn-fie" id="btn18">
                 <input type="button" value="19"class="btn-fie" id="btn19">
                 <input type="button" value="20"class="btn-fie" id="btn20"><br>
                 <input type="button" value="21"class="btn-fie" id="btn21">
                 <input type="button" value="22"class="btn-fie" id="btn22">
                 <input type="button" value="23"class="btn-fie" id="btn23">
                 <input type="button" value="24"class="btn-fie" id="btn24">
                 <input type="button" value="25"class="btn-fie" id="btn25">
                 <input type="button" value="26"class="btn-fie" id="btn26">
                 <input type="button" value="27"class="btn-fie" id="btn27">
                 <input type="button" value="28"class="btn-fie" id="btn28">
                 <input type="button" value="29"class="btn-fie" id="btn29">
                 <input type="button" value="30"class="btn-fie" id="btn30"><br>
                 <input type="button" value="31"class="btn-fie" id="btn31">
                 <input type="button" value="32"class="btn-fie" id="btn32">
                 <input type="button" value="33"class="btn-fie" id="btn33">
                 <input type="button" value="34"class="btn-fie" id="btn34">
                 <input type="button" value="35"class="btn-fie" id="btn35">
                 <input type="button" value="36"class="btn-fie" id="btn36">
                 <input type="button" value="37"class="btn-fie" id="btn37">
                 <input type="button" value="38"class="btn-fie" id="btn38">
                 <input type="button" value="39"class="btn-fie" id="btn39">
                 <input type="button" value="40"class="btn-fie" id="btn40"><br>
                 <input type="button" value="41"class="btn-fie" id="btn41">
                 <input type="button" value="42"class="btn-fie" id="btn42">
                 <input type="button" value="43"class="btn-fie" id="btn43">
                 <input type="button" value="44"class="btn-fie" id="btn44">
                 <input type="button" value="45"class="btn-fie" id="btn45">
                 <input type="button" value="46"class="btn-fie" id="btn46">
                 <input type="button" value="47"class="btn-fie" id="btn47">
                 <input type="button" value="48"class="btn-fie" id="btn48">
                 <input type="button" value="49"class="btn-fie" id="btn49">
                 <input type="button" value="50"class="btn-fie" id="btn50"><br>
                 <input type="button" value="51"class="btn-fie" id="btn51">
                 <input type="button" value="52"class="btn-fie" id="btn52">
                 <input type="button" value="53"class="btn-fie" id="btn53">
                 <input type="button" value="54"class="btn-fie" id="btn54">
                 <input type="button" value="55"class="btn-fie" id="btn55">
                 <input type="button" value="56"class="btn-fie" id="btn56">
                 <input type="button" value="57"class="btn-fie" id="btn57">
                 <input type="button" value="58"class="btn-fie" id="btn58">
                 <input type="button" value="59"class="btn-fie" id="btn59">
                 <input type="button" value="60"class="btn-fie" id="btn60"><br><br/>
            </div>
                   <input type="submit" value="Cercar  "class="btn-danger" id="btnCadastro" >
                   <input type="reset" value="Limpar"class="btn-danger" id="btnLimar"><br/>
 

            </form>
       </div>
    </body>
</html>
