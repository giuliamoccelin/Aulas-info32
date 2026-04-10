<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Upload Simples</title>
</head>
<body>
    <h1>Enviar arquivo</h1>

    <form action="upload.php" method="POST" enctype="multipart/form-data"> 
<!----- Comando mais importante: Enctype, sem ele Uploads não funcionam---->

        <input type="file" name="arquivo">
        <br>
        <p> <button type="submit"> Enviar </button> </p>
    </form>
</body>
</html>

