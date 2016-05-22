<!DOCTYPE html>
<html>
    <head>
        <title>SGCE</title>
        <meta charset="utf-8">
        <script type="text/javascript" src="../Scr/jquery-2.2.0.js"></script>
        <script type="text/javascript" src="../Scr/moment.min.js"></script>
        <script type="text/javascript" src="../Scr/bootstrap.js"></script>
        <script type="text/javascript" src="../Scr/bootstrap-datetimepicker.js"></script>
        <link type="text/css" rel="stylesheet" href="../Css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="../Css/modals.css">
        <link type="text/css" rel="stylesheet" href="../Css/letras.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <div class="container-fluid" style="padding-bottom:9px;" id="header">
            <img src="../Img/SEP.png" height="64px" style="float:left; padding-left:15px;">
            <img class="img-head" src="../Img/logoIPNGris.png" style="float:right; padding-top:15px; padding-right:15px;">
        </div>

        <!-- Nueva nav -->
        <nav class="navbar navbar-inverse navbar-static-top" style="height:84px;" id="top-bar">
            <div class="container-fluid" style="padding-left:51px; padding-right:51px;">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../">
                        <img id="logoSGCE" src="../Img/logoSGCE.png">
                    </a>
                    <div style="padding-top:33px;">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-bar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="header-bar">
                    <ul class="nav navbar-nav navbar-right" style="padding-top:12px;">

                        <?php
                        if (isset($_COOKIE["cargo"])) {
                        ?>
                        <?php
                            if($_COOKIE["cargo"]==1){ 
                        ?>

                        <!--  Administrador -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span><img src="../Img/bookmarkGreen.png" height="30px"></span> Administrador<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dark">
                                <li><a href="../Vista/AdministrarDepartamentos.php">
                                    <span><img src="../Img/Admin_Dep.png" height="36px"></span>
                                    Administrar departamentos
                                    </a></li>
                                <li><a href="../Vista/AdministrarAreas.php">
                                    <span><img src="../Img/Admin_Area.png" height="36px"></span>
                                    Administrar areas
                                    </a></li>
                                <li><a href="../Vista/AdministrarCuentas.php">
                                    <span><img src="../Img/Admin_Cont.png" height="36px"></span>
                                    Administrar cuentas
                                    </a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span><img src="../Img/loginiGreen.png" height="30px"></span> Bienvenido(a)<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dark">
                                <li><a href="../Vista/CambiarContrasena.php">
                                    <span><img src="../Img/Edit2.png" height="36px"></span>
                                    Cambiar contraseña
                                    </a></li>
                                <li><a href="../cierra_sesion.php">
                                    <span><img src="../Img/Out.png" height="36px"></span>
                                    Cerrar sesión
                                    </a></li>
                            </ul>
                        </li>

                        <?php }else{?> 

                        <! Personal administrativo -->                    
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span><img src="../Img/bookmarkGreen.png" height="30px"></span> Personal Administrativo<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dark">
                                <li><a href="../Vista/Calendario.php">
                                    <span><img src="../Img/333.png" height="36px"></span>
                                    Calendario
                                    </a></li>
                                <li><a href="../Vista/VerInformesYS.php">
                                    <span><img src="../Img/22.png" height="36px"></span>
                                    Informes y Sugerencias
                                    </a></li>
                                <li><a href="../Vista/SolicitudesCita.php">
                                    <span><img src="../Img/11.png" height="36px"></span>
                                    Solicitudes de citas
                                    </a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span><img src="../Img/loginiGreen.png" height="30px"></span> Bienvenido(a)<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dark">
                                <li><a href="../Vista/CambiarContrasena.php">
                                    <span><img src="../Img/Edit2.png" height="36px"></span>
                                    Cambiar contraseña
                                    </a></li>
                                <li><a href="../cierra_sesion.php">
                                    <span><img src="../Img/Out.png" height="36px"></span>
                                    Cerrar sesión
                                    </a></li>
                            </ul>
                        </li>
                        <?php
                            } } else {
                        ?>
                        <script type="text/javascript">
                            window.location = "../";
                        </script>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Mensajes bajo el campo -->
        <div class="container-fluid" style="padding-bottom:57px;" id="main-content">
            <div class="container">
                <h3><strong>Administrar áreas</strong></h3>
                <p>En esta sección  podrás consultar los datos de las áreas existentes.También podrás registrar nuevas áreas.</p> 
                <br>
                <br>
                <div class="table-responsive">          
                    <table class="table">
                        <thead>
                            <tr style="color: #FFF; background: #656565;">
                                <th>Área</th>
                                <th colspan="3">Departamento</th>      
                            </tr>
                        </thead>

                        <tbody>
                <?php

                            include("../Modelo/abre_conexion.php");
                            $query = "SELECT a.nombre as area,a.idarea as idarea,d.nombre as depto FROM area a, depto d WHERE idarea>0 and a.iddepto=d.iddepto ORDER BY a.nombre";                        
                            $result = mysqli_query($link, $query);
                            if ($hay = mysqli_fetch_array($result, MYSQLI_ASSOC) > 0) {
                                $result = mysqli_query($link, $query);
                                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                    $idarea=$row['idarea'];
                                    $area = $row['area'];
                                    $depto = $row['depto'];
                                    echo "<tr>";
                                    echo "<th>$area</th>";
                                    echo "<th>$depto</th>";
                                    echo "<th><a class=' text-success text-right'  style = 'text-decoration:underline;' href='EditarAreas.php?id=$idarea'>Editar</a></th>";   
                                    echo "<th><a class=' text-success text-right' onclick=''  name='EliminaA' style = 'text-decoration:underline; cursor:pointer;' href='../Modelo/eliminar_area.php?id=$idarea'>Eliminar</a></th>  ";
                                    echo "</tr>";
                                }
                            }else{
                                $jaja = "ALTER TABLE area AUTO_INCREMENT = 2";
                                mysqli_query($link, $jaja);
                            }

                            ?>
                        </tbody>
                        <script type="text/javascript">
                            $("[name='EliminaA']").click(function() {
                                var id = $(this).closest('tr').attr('id');
                                eliminar(id);
                            });
                        </script>
                    </table>
                    <script type="text/javascript">
                        function eliminar(str) {
                            var id = str.substring(1);
                            $("#confirmacion").modal();
                            $("#eliminarT").click(function() {
                                $.ajax({
                                    method: "POST",
                                    url: "../Modelo/eliminar_area.php",
                                    data: { value: id }
                                }).done(function(msg){
                                    if (msg == "hecho") location.reload();
                                });
                            });
                        }
                    </script>			
                </div>
                <div class="form-group text-right">
                    <div class="col-md-8 col-md-offset-4">							                     
                        <a class="btn btn-success" href="AgregarArea.php" style="width: 80px; height:40px;" onclick="enviarForm();"><span class="glyphicon glyphicon-plus"  style="color:#FFF; padding-top:5px;"></span></a>
                    </div>					                                                                               						                             
                </div>
            </div>                                                               
        </div>
        
        <div class="modal fade" data-keyboard="false" data-backdrop="static" id="confirmacion" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-has-warning">
                        <h4 class="modal-title">Mensaje de confirmación</h4>
                    </div>
                    <div class="modal-body">
                        <p>¿Seguro que desea eliminar este departamento?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-warning" id="eliminarT" data-dismiss="modal">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nav de abajo -->
        <nav class="navbar navbar-inverse navbar-fixed-bottom" id="bottom-bar">
            <div class="container-fluid" style="padding-right:51px;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#footer-bar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="footer-bar">
                    <ul class="nav navbar-nav navbar-right">
                        <p class="navbar-text">@2016 Team Rocket Inc.</p>
                        <a class="navbar-brand" href="https://www.facebook.com/escom.iscipn.9/">
                            <img src="../Img/facebookWhite.png" height="24px">
                        </a>
                        <a class="navbar-brand" href="https://twitter.com/escomunidad?ref_src=twsrc%5Etfw">
                            <img src="../Img/twitterWhite.png" height="24px">
                        </a>
                        <a class="navbar-brand" href="https://plus.google.com/112263443520207638663/posts">
                            <img src="../Img/googleWhite.png" height="24px">
                        </a>
                    </ul>
                </div>
            </div>
        </nav>

        <script type="text/javascript">
            $(document).ready(function() {
                // Sticky bar plz
                $(window).scroll(function() {
                    if ($(window).scrollTop() > $("#header").height()) {
                        $("#top-bar").addClass("navbar-fixed-top");
                        $("#main-content").css({"padding-top":"90px"});
                    }
                    if ($(window).scrollTop() < $("#header").height()) {
                        $("#top-bar").removeClass("navbar-fixed-top");
                        $("#main-content").css({"padding-top":"0px"});
                    }
                });

                if ($(window).width() <= 886) {
                    $("#top-bar").removeAttr("style");
                }

                $(window).resize(function() {
                    if ($(window).width() > 886) {
                        $("#top-bar").attr({"style":"height:84px;"});
                    }
                    if ($(window).width() <= 886) {
                        $("#top-bar").removeAttr("style");
                    }
                }); 
            });
        </script>
    </body>
</html>
