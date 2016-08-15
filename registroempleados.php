<script>

    $(document).on("ready", inicio);

    function inicio() {
        //$("#btngrabar").click(validar);
        $("#nombres").keyup(validar);
    }

    function validar() {
        var valor = document.getElementById("nombres").value;
        var valorapellidos = document.getElementById("apellidos").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            $("#iconotexto").remove();
            $("#nombres").parent().attr("class", "form-group has-error has-feedback");
            $("#nombres").parent().children("span").text("Debe ingresar un nombre").show();
            $("#nombres").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else
        {
            $("#iconotexto").remove();
            $("#nombres").parent().attr("class", "form-group has-success has-feedback");
            $("#nombres").parent().children("span").text("").hide();
            $("#nombres").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback'></span>");
            return true;
        }
        /*
        if (valorapellidos == null || valorapellidos.length == 0 || /^\s+$/.test(valorapellidos)) {
            $("#iconotexto").remove();
            $("#apellidos").parent().attr("class", "form-group has-error has-feedback");
            $("#apellidos").parent().children("span").text("Debe ingresar un apellido").show();
            $("#apellidos").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else
        {
            $("#iconotexto").remove();
            $("#apellidos").parent().attr("class", "form-group has-success has-feedback");
            $("#apellidos").parent().children("span").text("").hide();
            $("#apellidos").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback'></span>");
            return true;
        }
        */
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
    {
        var flag =1;
        if (flag ===1) {
            var nombres = document.getElementById('nombres').value;
            var apellidos = document.getElementById('apellidos').value;
            var tipodocumento = document.getElementById('tipodocumento').value;
            var numerodocumento = document.getElementById('numerodocumento').value;
            var genero = document.getElementById('genero').value;
            var nacionalidad = document.getElementById('nacionalidad').value;
            var totalcargas = document.getElementById('totalcargas').value;
            var dataString = 'nombres=' + nombres + '&apellidos=' + apellidos + '&tipodocumento=' + tipodocumento + '&numerodocumento=' + numerodocumento + '&genero=' + genero + '&nacionalidad=' + nacionalidad + '&totalcargas=' + totalcargas;
            $.ajax({
                type: "POST",
                url: "registroemp.php",
                data: dataString,
                cache: false,
                success: function (html) {
                    $('#msg').html(html);
                    document.getElementById("myform").reset();
                }
            });
        } else
        {
           // $("#msg").parent().append("<div id="msgalert" class="alert alert - warning" role="alert">Error al intentar grabar el registro intente de nuevo o verifique los datos.</div>");
        }
        return false;
    }
</script>

<script>
    $(function () {
        $("#datepicker").datepicker();
    });
</script>
<div class="row">
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
            <div class="panel panel-default col-lg-8">
                <div class="panel-heading">
                    <h3 class="panel-title">Registre su Informaci&oacute;n B&aacute;sica</h3>
                    <p id="msg"></p>
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
                            <span class="help-block"></span>
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
                    <!--
                    <p id="msg"></p>
                    -->

                </div>

            </div>
            <!-- fin formulario-->


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

                </div>
            </div>
        </div>

    </div>
</div>

