<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="icon" type="img" href="../img/banco-falabella.svg">
	<title>Informe NPS BFCO</title>
</head>
<body>


<script type="text/javascript">
    n = 100
    var l = document.getElementById("number");
    var id = window.setInterval(function(){
        document.onmousemove = function(){
            n = 100
        };
        
        l.innerText = n;
        n--;

        if(n <= -1){
            alert("La sesión ha expirado");
            location.href="login.php";
    }
    }, 1200);
    
    </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>