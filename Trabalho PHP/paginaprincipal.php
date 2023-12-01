<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="principal.css">
    <title>Site DO Condominio</title>
    <style>
    </style>
</head>
<body>

<header>
    <div class="center">
        <div class="logo"><img src="logo_sistema-removebg-preview-removebg-preview.png" alt="img" height="80px" width="100px" ></div>

</header>

<main>
    <nav>
        <a href="#"  class="fas fa-angle-right dropdown" onclick="loadPage('tabelaencomendas.php') ">Encomendas</a>
        <a href="#" class="fas fa-angle-right dropdown"onclick="loadPage('financeiro.php')">Financeiro</a>
        <a href="#" class="fas fa-angle-right dropdown"onclick="loadPage('aviso.php')">Avisos Do Condominio</a>
        <a href="telainicial.php" class="fas fa-angle-right dropdown"onclick="loadPage('')">Pagina principal</a>
        
        <!-- Adicione mais links conforme necessário -->
    </nav>

    <div class="content">
        <iframe id="frame" src="" name="contentFrame"></iframe>
    </div>
</main>

<script>
    function loadPage(url) {
        const frame = document.getElementById('frame');
        frame.src = url;
    }
</script>

</body>
</html>
