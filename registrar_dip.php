<?php
include 'conexion.php';
$fecha_actual                       =$_POST['fecha_actual'];
$id_usuario_reg                     =$_POST['id_usuario_reg'];

$fecha_nacimiento                   =$_POST['fecha_nacimiento'];
$cap_movilizacion                   =$_POST['cap_movilizacion'];

$nombre                             =$_POST['nombre'];
$apellido_p                         =$_POST['apellido_p'];
$apellido_m                         =$_POST['apellido_m'];
$edad                               =$_POST['edad'];
$edo_civil                          =$_POST['edo_civil'];

$municipio                          =$_POST['municipio'];
$distrito                           =$_POST['distrito'];
$colonia                            =$_POST['colonia'];
$calle_numero                       =$_POST['calle_numero'];
$zona                               =$_POST['zona'];
$seccion                            =$_POST['seccion'];

$seccion_grado_urbanizacion         =$_POST['seccion_grado_urbanizacion'];

$email                              =$_POST['email'];
$telefono                           =$_POST['telefono'];
$movil                              =$_POST['movil'];

$nivel_educativo                    =$_POST['nivel_educativo'];
$ocupacion                          =$_POST['ocupacion'];


$cargos_publicos                    =$_POST['cargos_publicos'];
$periodo                            =$_POST['periodo'];
$lugar                              =$_POST['lugar'];
$influencia                         =$_POST['influencia'];

$asoc_religiosa                     =$_POST['asoc_religiosa'];
$otra                               =$_POST['otra'];

$tipo_nivel_educativo               =$_POST['tipo_nivel_educativo'];
$nombre_cto_edu                     =$_POST['nombre_cto_edu'];
$direccion_cto_educativo            =$_POST['direccion_cto_educativo'];
$privada_publica                    =$_POST['privada_publica'];


$tipo_actividad                     =$_POST['tipo_actividad'];
$nombre_asociacion                  =$_POST['nombre_asociacion'];
$direccion_asociacion               =$_POST['direccion_asociacion'];


$consejos                           =$_POST['consejos'];
$delegados                          =$_POST['delegados'];

$nombre_lider                       =$_POST['nombre_lider'];

$filiacion_politica                 =$_POST['filiacion_politica'];
$tipo_filiacion                     =$_POST['tipo_filiacion'];
$filiacion_otra                     =$_POST['filiacion_otra'];

$evento_pacosantos                  =$_POST['evento_pacosantos'];
$detalle_event_paco                 =$_POST['detalle_event_paco'];
$envento_veces                      =$_POST['envento_veces'];





$insertar_registro = "INSERT INTO tb_reg_dipu SET 

-- TODO: e agrega
id_usuario_reg = '$id_usuario_reg',

fecha_nacimiento = '$fecha_nacimiento',
nombre = '$nombre',
apellido_p = '$apellido_p',
apellido_m = '$apellido_m',
edad = '$edad',
edo_civil = '$edo_civil',
municipio = '$municipio',
distrito = '$distrito',
colonia = '$colonia',
calle_numero = '$calle_numero',
zona = '$zona',
seccion = '$seccion',
seccion_grado_urbanizacion = '$seccion_grado_urbanizacion',
email = '$email',
telefono = '$telefono',
movil = '$movil',
nivel_educativo = '$nivel_educativo',
ocupacion = '$ocupacion',
cargos_publicos = '$cargos_publicos',
periodo = '$periodo',
lugar = '$lugar',

-- TODO: e agrega
cap_movilizacion ='$cap_movilizacion',

influencia = '$influencia',
asoc_religiosa = '$asoc_religiosa',
otra = '$otra',
direccion_cto_educativo = '$direccion_cto_educativo',
tipo_nivel_educativo = '$tipo_nivel_educativo',
nombre_cto_edu = '$nombre_cto_edu',
privada_publica = '$privada_publica',
tipo_actividad = '$tipo_actividad',
nombre_asociacion = '$nombre_asociacion',
direccion_asociacion = '$direccion_asociacion',
consejos = '$consejos',
delegados = '$delegados',
nombre_lider = '$nombre_lider',
filiacion_politica = '$filiacion_politica',

-- TODO: e agrega
tipo_filiacion ='$tipo_filiacion',

filiacion_otra ='$filiacion_otra',
evento_pacosantos ='$evento_pacosantos',
detalle_event_paco ='$detalle_event_paco',
envento_veces ='$envento_veces'
";


mysqli_query($conexion, $insertar_registro);

if ( $insertar_registro) {
    // echo "<script>window.location='sendEmail.php'</script>";  
    echo "<script>alert('Registro exitoso');window.location='formulario_diputacion.php';</script>";  
  }else {
    echo "<script>alert('error de registro :/');window,history.go(-1);</script>";  
  }

?>