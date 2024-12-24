<?php 
$inc = include_once('consultphp/conexion_bd.php');
if ($inc) {
	$consulta = "SELECT Canal, registro_enviado_por_loyalink, envio_abierto,
	encuesta_completada, mes, año, FROM ENVIOS_SUCURSALES_GEN";
	$resultado = mysqlrv_query($conn,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $Canal = $row['Canal'];
	    $Registro_Enviado = $row['registro_enviado_por_loyalink'];
	    $Envios_Abierto = $row['envio_abierto'];
	    $Encuesta_Completada = $row['encuesta_completada'];
		$mes = $row['mes'];
		$año = $row['año'];
	    ?>
        	<div>
        		<p>
        			<b>ID: </b> <?php $Canal ?><br>
        		    <b>Email: </b> <?php $Registro_Enviado ?><br>
        		    <b>Fecha Registro: </b> <?php $Envios_Abierto ?><br>
					<b>Fecha Registro: </b> <?php $Encuesta_Completada ?><br>
					<b>Fecha Registro: </b> <?php $mes?><br>
					<b>Fecha Registro: </b> <?php $año ?><br>

        		</p>
        	</div>
	    <?php
	    }
	}
}
?>