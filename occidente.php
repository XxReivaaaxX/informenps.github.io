<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona Occidente</title>
    <link rel="icon" type="img" href="img/banco-falabella.svg" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">

<style>
    * {
  margin: 0;
  padding: 0;
}
    body {
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  color: #000;
}

.contenedor {
  width: 97%;
  margin: auto;
}

header {
  padding: 12px 0;
}
header .contenedor {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 125px;
  
}
header .logo {
  height: 130px;
  width: 10px;
  margin-left: 50px;
  padding-left: 0px;
  padding-top: 10px;
  
}

header nav a {
  color: #AAA;
  text-decoration: none;
  margin-right: 9px;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  font-size: 26px;
  justify-content: space-between;
  align-items: center;
  padding: 0%;
  width: 100px;
  height: 100px;
  
}
.imagen-principal {
  font-size: 16px;
  min-height: 18.10em;
  color: white;
  background: url(img/fondo1fal.jpeg);
  border-radius: 80px;
  background-position: center center;
  background-size: cover;
  display: flex;
  padding: 5px;
}
.wrapper{
  display: flex;
  padding-top: 0px;
  justify-content: center;
  background-color: #008f39;
}

.collapsible{
  max-width: 450px;
  overflow: hidden;
  font-weight: 500;
}

.collapsible input{
  display: none;
}

.collapsible label {
  position: relative;
  font-weight: 600;
  /*background: white ; */
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.895) 0 4px 11px 0 rgba(0, 0, 0, 0.8);
  color: #BDECB6;
  display: block;
  margin-bottom: 10px;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
  z-index: 1;
  font-size: 18px;
  padding-left: 160px;
}

.collapsible label:after{
  content: "";
  position: absolute;
  right: 200px;
  width: 29px;
  height: 25px;
  background: url(img/icon12.png) no-repeat 0 0; 
  transition: all 0.3s ease;
}

.collapsible input:checked + label::after{
  transform: rotate(90deg);
}

.collapsible-text{
  max-height: 1px;
  overflow: hidden;
  border-radius: 4px;
  line-height: 1.4;
  position: relative;
  top: -100%;
  opacity: 0.5;
  transition: all 0.3s ease;
}

.collapsible input:checked ~ .collapsible-text{
  max-height: 300px;
  padding-bottom: 25px;
  /*background: green; */
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.895) 0 4px 11px 0 rgba(0, 0, 0, 0.8);
  opacity: 1;
  top: 0;
}


.collapsible-text p{
  padding-left: 15px;
  padding-right: 15px;
  font-size: 15px;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  color: white;

}
table th{
background-color: #008f39;
color: white;   
}
</style>
</head>
<div class="wrapper">
        <div class="collapsible">
            <input type="checkbox" id="collapsible-head">
            <label for="collapsible-head">ZONAS</label>
            <div class="collapsible-text">
                <p>Acá podrán visualizar información 
                    de los asesor x zona (tienda)
                </p>
            </div>
        </div>
    </div>
    <header>
        <div class="contenedor">
            <a href="sucursales.html" class="logo"><img src="img/logofalabella.png" width="290" height="100"></a>
            <nav>
                <a href="sucursales.html"><img src="img/nps,log.png" height="150" width="220">
                    <a href="sucursales.html"><img src="img/banderacol.png" height="150" width="">
                    </a>
                </a>
            </nav>
        </div>
        <br>
        <div class="imagen-principal">
            <div class="contenedor">
            </div>
        </div>
    </header>
<body>

 <table id="example" class="display" style="width:100%">
                <thead>
                    <tr class="tableizer-firstrow"><th>Indicadores</th><th>202407</th><th>202408</th><th>202409</th><th>202410</th><th>202411</th><th>202412</th></tr></thead><tbody>
 <tr><td># Respuestas</td><td>2.768</td><td>2.506</td><td>2.230</td><td>2.196</td><td>1.210</td><td>551</td></tr>
 <tr><td># Promotores</td><td>2.007</td><td>1.856</td><td>1.620</td><td>1.588</td><td>895</td><td>397</td></tr>
 <tr><td># Detractores</td><td>401</td><td>356</td><td>327</td><td>335</td><td>171</td><td>88</td></tr>
 <tr><td># Neutros</td><td>360</td><td>294</td><td>283</td><td>273</td><td>144</td><td>66</td></tr>
 <tr><td>% Promotores</td><td>73%</td><td>74%</td><td>73%</td><td>72%</td><td>74%</td><td>72%</td></tr>
 <tr><td>% Neutros</td><td>13%</td><td>12%</td><td>13%</td><td>12%</td><td>12%</td><td>12%</td></tr>
 <tr><td>% Detractores</td><td>14%</td><td>14%</td><td>15%</td><td>15%</td><td>14%</td><td>16%</td></tr>
 <tr><td>% NPS Total</td><td>58,02%</td><td>59,86%</td><td>57,98%</td><td>57,06%</td><td>59,83%</td><td>56,08%</td></tr>
</tbody>              
 </table>
 <footer class="footer">
        <h3>Experiencia del Cliente Banco Falabella Colombia</h3>
        <style>
            .footer {
                background: #008f39;
                text-align: center;
                border-radius: 15px;
                padding: 10px;
            }

            .footer h3 {
                color: #BDECB6;
            }
        </style>
    </footer>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script> 

<script>
$(document).ready(function(){
    var table = $('#example').DataTable({
       orderCellsTop: true,
       fixedHeader: true 
    });  
});
</script>
</body>
</html>