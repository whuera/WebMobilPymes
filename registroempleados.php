<script>
    
    $(document).on("ready",inicio);

function inicio(){
    //$("#btngrabar").click(validar);
    $("#nombres").keyup(validar);
}

function validar() {
var valor = document.getElementById("nombres").value;
if(valor== null || valor.length == 0 || /^\s+$/.test(valor)){
    $("#iconotexto").remove();
    $("#nombres").parent().attr("class", "form-group has-error has-feedback");
    $("#nombres").parent().children("span").text("Debe ingresar un nombre").show();
    $("#nombres").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback'></span>");
    return false;
}
else
{
    $("#iconotexto").remove();
    $("#nombres").parent().attr("class", "form-group has-success has-feedback");  
    $("#nombres").parent().children("span").text("").hide();
    $("#nombres").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback'></span>");   
    return true;
}
//alert(valor);

}

    
    </script>

<script type="text/javascript">
function submitform()
{
   $("#contenedor").load('registroemp.php');
  //document.myform.submit();
   
}
</script>

<script>
        function ajaxSubmit()
        {            if(validar()){
                        var nombres=document.getElementById('nombres').value;
                        var apellidos=document.getElementById('apellidos').value;
                        var tipodocumento=document.getElementById('tipodocumento').value;
                        var numerodocumento=document.getElementById('numerodocumento').value;
                        var genero=document.getElementById('genero').value;
                        var nacionalidad=document.getElementById('nacionalidad').value;
                        var totalcargas=document.getElementById('totalcargas').value;
                        var dataString='nombres='+nombres+'&apellidos='+apellidos+'&tipodocumento='+tipodocumento+'&numerodocumento='+numerodocumento+'&genero='+genero+'&nacionalidad='+nacionalidad+'&totalcargas='+totalcargas;
                        $.ajax({
                        type:"POST",
                        url:"registroemp.php",
                        data:dataString,
                        cache:false,
                        success:function(html){
                        $('#msg').html(html);
                        document.getElementById("myform").reset();
                        }
                        }); 
                    }
                    else
                    {                        
                    $("#msg").parent().append("<div id="msgalert" class="alert alert-warning" role="alert">Error al intentar grabar el registro intente de nuevo o verifique los datos.</div>");                   
                    }
                    return false;
        }
</script>

<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<div class="container" style="width:auto;">
 <!-- <h2>Dynamic Tabs</h2> -->
 <br>
  <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#home">Datos B&aacute;sicos</a></li>
    <li><a data-toggle="tab" href="#menu1">Cargas Familiares</a></li>
    <li><a data-toggle="tab" href="#menu2">Requisitos y Documentaci&oacute;n</a></li>
    <li><a data-toggle="tab" href="#menu3">Proyectos</a></li>
    <li><a data-toggle="tab" href="#menu4">Estad&iacute;sticas</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <!--  <h3>Registre su Informaci&oacute;n B&aacute;sica</h3> -->
      
<!--formulario de registro -->
<div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Registre su Informaci&oacute;n B&aacute;sica</h3>
                                </div>
                                <div class="panel-body second marca-de-agua" style="height: 500px; overflow-y: scroll">
                                    <form id="myform" role="form" onkeyup="validar();">
                                        <div class="form-group">
                                            <label>Ingrese sus nombres</label>
                                            <input id="nombres" class="form-control transparent-input" placeholder="ejem:Juan Carlos" required>
                                            <span class="help-block"></span>
                                        </div>
                                            
                                        <div class="form-group">
                                            <label>Ingrese sus apellidos</label>
                                            <input id="apellidos" class="form-control transparent-input" placeholder="ejem: Perez Ortega" required>
                                        </div>
                                        
                                            <div class="form-group">
                                                <label>Tipo de documento</label>
                                                <select id="tipodocumento" class="form-control transparent-input">
                                                    <option value="Cedula">C&eacute;dula</option>
                                                    <option value="Pasaporte">Pasaporte</option>                            
                                                </select>
                                            </div>
                                        
                                        <div class="form-group">
                                            <label>Ingrese su n&uacute;mero de documento</label>
                                            <input id="numerodocumento" class="form-control transparent-input" placeholder="ejem: 1712456987" required>
                                        </div>
                                               <div class="form-group">
                                                <label>Genero</label>
                                                <select id="genero" class="form-control transparent-input">
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>                            
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Pa&iacute;s de procedencia</label>
                                                <select id="nacionalidad" class="form-control transparent-input" required>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Colombia">Colombia</option>                            
                                                    <option value="Venezuela">Venezuela</option>                            
                                                    <option value="Cuba">Cuba</option>                            
                                                    <option value="EEUU">EEUU</option>                            
                                                    <option value="Otros">Otros</option>                            
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Total cargas familiares</label>
                                                <select id="totalcargas" class="form-control transparent-input" required>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>                            
                                                    <option value="3">3</option>                            
                                                    <option value="4">4</option>                            
                                                    <option value="5">5</option>                            
                                                    <option value="6">6</option>                            
                                                </select>
                                            </div>
                                       
                                             <label>Ingrese su fecha de nacimiento</label>                                           
                                           <input id="fechanacimiento" class="form-control transparent-input" placeholder="ejem: 01/01/1980" type="date" id="datepicker" maxlength="10">
                                        
                                         
                                        </div>

                                        <div class="well">
                                            <button id="btngrabar" type="submit" class="btn btn-success" onclick="return ajaxSubmit();">Grabar Informaci&oacute;n</button>
                                            <button type="reset" class="btn btn-warning">Encerar campos</button>
                                            <button type="submit" class="btn btn-info">Agregar Cargas</button>
                                        </div>



                                    </form>
                                    <p id="msg"></p>

                                </div>

                            </div>
<!-- fin formulario-->

    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Cargas Familiares</h3>
      <p>Registro de todas as cargas familiares.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Requisitos</h3>
      <p>Check list de todos los habilitantes y documentaci&oacute;n.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Proyectos</h3>
      <p>Proyectos en los cuales participa.</p>
    </div>      
      <div id="menu4" class="tab-pane fade">
      <h3>Habilidades y destrezas</h3>
       <div class="panel-body">
                                <div style="position: relative;" id="morris-area-chart"><svg style="overflow: hidden; position: relative; top: -0.700012px;" xmlns="http://www.w3.org/2000/svg" width="1281" version="1.1" height="347"><desc>Created with RaphaÃ«l 2.1.2</desc><defs></defs><text font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="end" y="312" x="56.5" style="text-anchor: end; font: 12px sans-serif;"><tspan dy="4">0</tspan></text><path stroke-width="0.5" d="M69,312H1256" stroke="#aaaaaa" fill="none" style=""></path><text font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="end" y="240.25" x="56.5" style="text-anchor: end; font: 12px sans-serif;"><tspan dy="4">7,500</tspan></text><path stroke-width="0.5" d="M69,240.25H1256" stroke="#aaaaaa" fill="none" style=""></path><text font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="end" y="168.5" x="56.5" style="text-anchor: end; font: 12px sans-serif;"><tspan dy="4">15,000</tspan></text><path stroke-width="0.5" d="M69,168.5H1256" stroke="#aaaaaa" fill="none" style=""></path><text font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="end" y="96.75000000000003" x="56.5" style="text-anchor: end; font: 12px sans-serif;"><tspan dy="4.000000000000028">22,500</tspan></text><path stroke-width="0.5" d="M69,96.75000000000003H1256" stroke="#aaaaaa" fill="none" style=""></path><text font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="end" y="25" x="56.5" style="text-anchor: end; font: 12px sans-serif;"><tspan dy="4">30,000</tspan></text><path stroke-width="0.5" d="M69,25H1256" stroke="#aaaaaa" fill="none" style=""></path><text transform="matrix(1,0,0,1,0,7.5)" font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="324.5" x="1211.2891859052247" style="text-anchor: middle; font: 12px sans-serif;"><tspan dy="4">2012-05</tspan></text><text transform="matrix(1,0,0,1,0,7.5)" font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="324.5" x="1123.3098420413123" style="text-anchor: middle; font: 12px sans-serif;"><tspan dy="4">2012-03</tspan></text><text transform="matrix(1,0,0,1,0,7.5)" font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="324.5" x="1036.7727825030377" style="text-anchor: middle; font: 12px sans-serif;"><tspan dy="4">2012-01</tspan></text><text transform="matrix(1,0,0,1,0,7.5)" font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="324.5" x="948.7934386391252" style="text-anchor: middle; font: 12px sans-serif;"><tspan dy="4">2011-11</tspan></text><text transform="matrix(1,0,0,1,0,7.5)" font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="324.5" x="860.8140947752127" style="text-anchor: middle; font: 12px sans-serif;"><tspan dy="4">2011-09</tspan></text><text transform="matrix(1,0,0,1,0,7.5)" font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="324.5" x="771.3924665856622" style="text-anchor: middle; font: 12px sans-serif;"><tspan dy="4">2011-07</tspan></text><text transform="matrix(1,0,0,1,0,7.5)" font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="324.5" x="683.4131227217497" style="text-anchor: middle; font: 12px sans-serif;"><tspan dy="4">2011-05</tspan></text><text transform="matrix(1,0,0,1,0,7.5)" font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="324.5" x="595.4337788578372" style="text-anchor: middle; font: 12px sans-serif;"><tspan dy="4">2011-03</tspan></text><text transform="matrix(1,0,0,1,0,7.5)" font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="324.5" x="510.3390036452005" style="text-anchor: middle; font: 12px sans-serif;"><tspan dy="4">2011-01</tspan></text><text transform="matrix(1,0,0,1,0,7.5)" font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="324.5" x="422.359659781288" style="text-anchor: middle; font: 12px sans-serif;"><tspan dy="4">2010-11</tspan></text><text transform="matrix(1,0,0,1,0,7.5)" font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="324.5" x="334.38031591737547" style="text-anchor: middle; font: 12px sans-serif;"><tspan dy="4">2010-09</tspan></text><text transform="matrix(1,0,0,1,0,7.5)" font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="324.5" x="244.95868772782504" style="text-anchor: middle; font: 12px sans-serif;"><tspan dy="4">2010-07</tspan></text><text transform="matrix(1,0,0,1,0,7.5)" font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="324.5" x="156.9793438639125" style="text-anchor: middle; font: 12px sans-serif;"><tspan dy="4">2010-05</tspan></text><text transform="matrix(1,0,0,1,0,7.5)" font-weight="normal" font-family="sans-serif" font-size="12px" fill="#888888" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="324.5" x="69" style="text-anchor: middle; font: 12px sans-serif;"><tspan dy="4">2010-03</tspan></text><path fill-opacity="1" d="M69,261.1723C102.17253948967193,255.91063333333335,168.51761846901582,244.99147916666666,201.69015795868773,240.12563333333333C234.86269744835965,235.2597875,301.20777642770355,228.90665173041896,334.38031591737547,222.24553333333336C367.1922843256379,215.65681839708563,432.8162211421628,189.092289640884,465.62818955042525,187.12630000000001C498.07958687727825,185.181914640884,562.9823815309842,205.17415833333334,595.4337788578372,206.60403333333335C628.6063183475092,208.06568333333334,694.9513973268529,197.71899166666668,728.1239368165249,198.69240000000002C761.2964763061968,199.66580833333336,827.6415552855407,231.6705296903461,860.8140947752127,214.3913C893.6260631834751,197.29988802367942,959.25,69.54718333333336,992.0619684082625,61.209833333333364C1024.873936816525,52.87248333333336,1090.49787363305,135.4676984061931,1123.3098420413123,147.69250000000002C1156.4823815309842,160.05164007285975,1222.8274605103281,156.58232500000003,1256,159.5456L1256,312L69,312Z" stroke="none" fill="#7cb47c" style="fill-opacity: 1;"></path><path stroke-width="3" d="M69,261.1723C102.17253948967193,255.91063333333335,168.51761846901582,244.99147916666666,201.69015795868773,240.12563333333333C234.86269744835965,235.2597875,301.20777642770355,228.90665173041896,334.38031591737547,222.24553333333336C367.1922843256379,215.65681839708563,432.8162211421628,189.092289640884,465.62818955042525,187.12630000000001C498.07958687727825,185.181914640884,562.9823815309842,205.17415833333334,595.4337788578372,206.60403333333335C628.6063183475092,208.06568333333334,694.9513973268529,197.71899166666668,728.1239368165249,198.69240000000002C761.2964763061968,199.66580833333336,827.6415552855407,231.6705296903461,860.8140947752127,214.3913C893.6260631834751,197.29988802367942,959.25,69.54718333333336,992.0619684082625,61.209833333333364C1024.873936816525,52.87248333333336,1090.49787363305,135.4676984061931,1123.3098420413123,147.69250000000002C1156.4823815309842,160.05164007285975,1222.8274605103281,156.58232500000003,1256,159.5456" stroke="#4da74d" fill="none" style=""></path><circle stroke-width="1" style="" stroke="#ffffff" fill="#4da74d" r="2" cy="261.1723" cx="69"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#4da74d" r="2" cy="240.12563333333333" cx="201.69015795868773"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#4da74d" r="2" cy="222.24553333333336" cx="334.38031591737547"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#4da74d" r="2" cy="187.12630000000001" cx="465.62818955042525"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#4da74d" r="2" cy="206.60403333333335" cx="595.4337788578372"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#4da74d" r="2" cy="198.69240000000002" cx="728.1239368165249"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#4da74d" r="2" cy="214.3913" cx="860.8140947752127"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#4da74d" r="2" cy="61.209833333333364" cx="992.0619684082625"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#4da74d" r="2" cy="147.69250000000002" cx="1123.3098420413123"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#4da74d" r="2" cy="159.5456" cx="1256"></circle><path fill-opacity="1" d="M69,286.4952666666667C102.17253948967193,280.7409166666667,168.51761846901582,268.51830416666667,201.69015795868773,263.47786666666667C234.86269744835965,258.4374291666667,301.20777642770355,248.92759398907103,334.38031591737547,246.17176666666666C367.1922843256379,243.44589398907104,432.8162211421628,243.7671638581952,465.62818955042525,241.55106666666666C498.07958687727825,239.35932219152855,562.9823815309842,231.61421730769231,595.4337788578372,228.5404C628.6063183475092,225.39827564102563,694.9513973268529,216.55695416666666,728.1239368165249,216.6873C761.2964763061968,216.81764583333333,827.6415552855407,242.90179635701276,860.8140947752127,229.58316666666667C893.6260631834751,216.4093046903461,959.25,118.52851666666669,992.0619684082625,110.71733333333336C1024.873936816525,102.90615000000003,1090.49787363305,158.893485291439,1123.3098420413123,167.0937C1156.4823815309842,175.38402695810566,1222.8274605103281,174.28305,1256,176.67950000000002L1256,312L69,312Z" stroke="none" fill="#a7b3bc" style="fill-opacity: 1;"></path><path stroke-width="3" d="M69,286.4952666666667C102.17253948967193,280.7409166666667,168.51761846901582,268.51830416666667,201.69015795868773,263.47786666666667C234.86269744835965,258.4374291666667,301.20777642770355,248.92759398907103,334.38031591737547,246.17176666666666C367.1922843256379,243.44589398907104,432.8162211421628,243.7671638581952,465.62818955042525,241.55106666666666C498.07958687727825,239.35932219152855,562.9823815309842,231.61421730769231,595.4337788578372,228.5404C628.6063183475092,225.39827564102563,694.9513973268529,216.55695416666666,728.1239368165249,216.6873C761.2964763061968,216.81764583333333,827.6415552855407,242.90179635701276,860.8140947752127,229.58316666666667C893.6260631834751,216.4093046903461,959.25,118.52851666666669,992.0619684082625,110.71733333333336C1024.873936816525,102.90615000000003,1090.49787363305,158.893485291439,1123.3098420413123,167.0937C1156.4823815309842,175.38402695810566,1222.8274605103281,174.28305,1256,176.67950000000002" stroke="#7a92a3" fill="none" style=""></path><circle stroke-width="1" style="" stroke="#ffffff" fill="#7a92a3" r="2" cy="286.4952666666667" cx="69"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#7a92a3" r="2" cy="263.47786666666667" cx="201.69015795868773"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#7a92a3" r="2" cy="246.17176666666666" cx="334.38031591737547"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#7a92a3" r="2" cy="241.55106666666666" cx="465.62818955042525"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#7a92a3" r="2" cy="228.5404" cx="595.4337788578372"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#7a92a3" r="2" cy="216.6873" cx="728.1239368165249"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#7a92a3" r="2" cy="229.58316666666667" cx="860.8140947752127"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#7a92a3" r="2" cy="110.71733333333336" cx="992.0619684082625"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#7a92a3" r="2" cy="167.0937" cx="1123.3098420413123"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#7a92a3" r="2" cy="176.67950000000002" cx="1256"></circle><path fill-opacity="1" d="M69,286.4952666666667C102.17253948967193,286.2274,168.51761846901582,288.1096416666667,201.69015795868773,285.4238C234.86269744835965,282.7379583333334,301.20777642770355,266.1976752276867,334.38031591737547,265.00853333333333C367.1922843256379,263.83231689435337,432.8162211421628,278.2445980662983,465.62818955042525,275.96236666666664C498.07958687727825,273.705214732965,562.9823815309842,249.10166346153846,595.4337788578372,246.851C628.6063183475092,244.5503217948718,694.9513973268529,255.37729166666668,728.1239368165249,257.757C761.2964763061968,260.13670833333333,827.6415552855407,277.1945324225865,860.8140947752127,265.88866666666667C893.6260631834751,254.70569075591985,959.25,174.8175875,992.0619684082625,167.80163333333334C1024.873936816525,160.78567916666668,1090.49787363305,201.86290050091074,1123.3098420413123,209.76103333333333C1156.4823815309842,217.74595883424408,1222.8274605103281,225.94065833333332,1256,231.33386666666667L1256,312L69,312Z" stroke="none" fill="#2577b5" style="fill-opacity: 1;"></path><path stroke-width="3" d="M69,286.4952666666667C102.17253948967193,286.2274,168.51761846901582,288.1096416666667,201.69015795868773,285.4238C234.86269744835965,282.7379583333334,301.20777642770355,266.1976752276867,334.38031591737547,265.00853333333333C367.1922843256379,263.83231689435337,432.8162211421628,278.2445980662983,465.62818955042525,275.96236666666664C498.07958687727825,273.705214732965,562.9823815309842,249.10166346153846,595.4337788578372,246.851C628.6063183475092,244.5503217948718,694.9513973268529,255.37729166666668,728.1239368165249,257.757C761.2964763061968,260.13670833333333,827.6415552855407,277.1945324225865,860.8140947752127,265.88866666666667C893.6260631834751,254.70569075591985,959.25,174.8175875,992.0619684082625,167.80163333333334C1024.873936816525,160.78567916666668,1090.49787363305,201.86290050091074,1123.3098420413123,209.76103333333333C1156.4823815309842,217.74595883424408,1222.8274605103281,225.94065833333332,1256,231.33386666666667" stroke="#0b62a4" fill="none" style=""></path><circle stroke-width="1" style="" stroke="#ffffff" fill="#0b62a4" r="2" cy="286.4952666666667" cx="69"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#0b62a4" r="2" cy="285.4238" cx="201.69015795868773"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#0b62a4" r="2" cy="265.00853333333333" cx="334.38031591737547"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#0b62a4" r="2" cy="275.96236666666664" cx="465.62818955042525"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#0b62a4" r="2" cy="246.851" cx="595.4337788578372"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#0b62a4" r="2" cy="257.757" cx="728.1239368165249"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#0b62a4" r="2" cy="265.88866666666667" cx="860.8140947752127"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#0b62a4" r="2" cy="167.80163333333334" cx="992.0619684082625"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#0b62a4" r="2" cy="209.76103333333333" cx="1123.3098420413123"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#0b62a4" r="2" cy="231.33386666666667" cx="1256"></circle></svg><div style="left: 403.628px; top: 167px; display: none;" class="morris-hover morris-default-style"><div class="morris-hover-row-label">2010 Q4</div><div class="morris-hover-point" style="color: #0b62a4">
  iPhone:
  3,767
</div><div class="morris-hover-point" style="color: #7A92A3">
  iPad:
  3,597
</div><div class="morris-hover-point" style="color: #4da74d">
  iPod Touch:
  5,689
</div></div></div>
                            </div>
    </div>
      
  </div>
</div>

