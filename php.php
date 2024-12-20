<?php
include('pp.php');

$tsql = "SELECT		
 ID
,ID_CLIENTE
,FECHA_EXPERIENCIA
,SEMANA_LIQUIDACION
,NOTA
,COMENTARIO_CLIENTE
,CEDULA_EJECUTIVO
,NOMBRE_EJECUTIVO

FROM		Canales.dbo.REPORTING_NPS_DETALLE		AS A
WHERE		/*Tipo NOT IN ('Backoffice') AND */
			PERIODO_EXPERIENCIA BETWEEN (SELECT PERIODO FROM INFORMES_COMERCIALES..TBL_INFO_PERIODO_HIST WHERE COSECHA = (SELECT COSECHA-6 FROM INFORMES_COMERCIALES..TBL_INFO_PERIODO_HIST WHERE PERIODO = (SELECT MAX(PERIODO_EXPERIENCIA) FROM Canales.dbo.REPORTING_NPS_DETALLE)))
			AND (SELECT MAX(PERIODO_EXPERIENCIA) FROM Canales.dbo.REPORTING_NPS_DETALLE)";
$stmt = sqlsrv_query($conn, $tsql);
if ($stmt == false) {
   echo 'Error';
}
while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
   echo $obj['ID'] .'</br>';
   echo $obj['ID_CLIENTE'] .'</br>';
   echo $obj['SEMANA_LIQUIDACION'] .'</br>';
   echo $obj['NOTA'] .'</br>';
   echo $obj['COMENTARIO_CLIENTE'] .'</br>';
   echo $obj['CEDULA_EJECUTIVO'] .'</br>';
   echo $obj['NOMBRE_EJECUTIVO'] .'</br>';
}

?>

<style type="text/css">
	table.tableizer-table {
		font-size: 12px;
		border: 1px solid #CCC; 
		font-family: Arial, Helvetica, sans-serif;
	} 
	.tableizer-table td {
		padding: 4px;
		margin: 3px;
		border: 1px solid #CCC;
	}
	.tableizer-table th {
		background-color: #104E8B; 
		color: #FFF;
		font-weight: bold;
	}
</style>
<table class="tableizer-table">
<thead><tr class="tableizer-firstrow"><th>Indicadores</th><th>202407</th><th>202408</th><th>202409</th><th>202410</th><th>202411</th><th>202412</th></tr></thead><tbody>
 <tr><td># Respuestas</td><td>2.768</td><td>2.506</td><td>2.230</td><td>2.196</td><td>1.210</td><td>551</td></tr>
 <tr><td># Promotores</td><td>2.007</td><td>1.856</td><td>1.620</td><td>1.588</td><td>895</td><td>397</td></tr>
 <tr><td># Detractores</td><td>401</td><td>356</td><td>327</td><td>335</td><td>171</td><td>88</td></tr>
 <tr><td># Neutros</td><td>360</td><td>294</td><td>283</td><td>273</td><td>144</td><td>66</td></tr>
 <tr><td>% Promotores</td><td>73%</td><td>74%</td><td>73%</td><td>72%</td><td>74%</td><td>72%</td></tr>
 <tr><td>% Neutros</td><td>13%</td><td>12%</td><td>13%</td><td>12%</td><td>12%</td><td>12%</td></tr>
 <tr><td>% Detractores</td><td>14%</td><td>14%</td><td>15%</td><td>15%</td><td>14%</td><td>16%</td></tr>
 <tr><td>% NPS Total</td><td>58,02%</td><td>59,86%</td><td>57,98%</td><td>57,06%</td><td>59,83%</td><td>56,08%</td></tr>
</tbody></table>